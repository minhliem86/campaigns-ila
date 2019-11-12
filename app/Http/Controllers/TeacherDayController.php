<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BackToHomeController as Controller;

use Illuminate\Support\Facades\Validator;
use App\Models\Center;
use App\Models\City;
use App\Models\Product;
use Session;
use Cache;
use Cookie;
use Carbon\Carbon;
use GuzzleHttp\Client as Client;

class TeacherDayController extends Controller
{
    protected $client;
    protected $mobile;

    public function __construct()
    {
        $this->client = new Client();
        $this->mobile = new \Mobile_Detect();
    }

    public function teacherday_home()
    {
        if(Cache::has('cities')){
            $cities = Cache::get('cities');
        }else{
            $cities = City::where('api_status',1)->orderBy('order','ASC')->select('id','name')->with(['center'=>function($center){
                return $center->where('status',1)->select('id','id_city','name_vi');
            }])->get();
            Cache::forever('cities',$cities);
        }

        if(Cache::has('products')){
            $products = Cache::get('products');
        }else{
            $products_raw = Product::whereIn('id', [11, 12, 13, 14, 15, 28])->select('id','name' )->get();
            if(!$products_raw->isEmpty()){
                $products_raw->map(function($item, $key){
                    switch ($item->id){
                        case 14 :
                            $new = $item->order = 1;
                            $new = $item->name = 'Jumpstart (Tiếng Anh Trẻ Em từ 3 - 6 tuổi)';
                            break;
                        case  13 :
                            $new = $item->order = 2;
                            $new = $item->name = 'Super Juniors (Tiếng Anh Thiếu Nhi từ 6 - 11 tuổi)';
                            break;
                        case  15 :
                            $new = $item->order = 3;
                            $new = $item->name = 'Smart Teens (Tiếng Anh Thiếu Niên từ 11 - 16 tuổi)';
                            break;
                        case  12:
                            $new = $item->order = 4;
                            $new = $item->name = 'Global English (Tiếng Anh Giao Tiếp Quốc Tế)';
                            break;
                        case  11:
                            $new = $item->order = 5;
                            $new = $item->name = 'Exam English (Tiếng Anh Luyện Thi)';
                            break;

                        default :
                            $new = $item->order = 28;
                            $new = $item->name = 'ILA Maths (Chương trình Toán)';
                            break;

                    }
                    return $new;
                });
            }
            $products = $products_raw->sortBy('order');

            Cache::forever('products',$products);
        }

        $mobile_detect = $this->mobile;

        $utm_campaign = request()->query('utm_campaign') ? request()->query('utm_campaign') : Cookie::get('utm_campaign') ? Cookie::get('utm_campaign') : 'ELT - Back To Home 2019';
        $utm_source = request()->query('utm_source') ? request()->query('utm_source') :  Cookie::get('utm_source') ? Cookie::get('utm_source') : 'original';
        $utm_term = request()->query('utm_term') ? request()->query('utm_term') :  Cookie::get('utm_term') ? Cookie::get('utm_term') : '';
        $utm_content = request()->query('utm_content') ? request()->query('utm_content') :  Cookie::get('utm_content') ? Cookie::get('utm_content') : '';

        return response()->view('pages.teacherday.home', compact(['cities','products','mobile_detect']))
            ->withCookie('utm_campaign',$utm_campaign ? $utm_campaign : '',1440 * 30)
            ->withCookie('utm_source',$utm_source ? $utm_source : '', 1440 * 30)
            ->withCookie('utm_term',$utm_term ? $utm_term : '', 1440 * 30)
            ->withCookie('utm_content', $utm_content ? $utm_content : '', 1440 * 30);

    }

    public function postSubmit(Request $request)
    {
    
        $utm_campaign = Cookie::get('utm_campaign');
        $utm_source = Cookie::get('utm_source');
        $utm_term = Cookie::get('utm_term');
        $utm_content = Cookie::get('utm_content');

        $rules = [
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:2',
            'parentname' => 'required',
            'phone' => 'required|digits_between:9,11',
            'center_id' => 'required',
            'program_id' => 'required',
        ];
        $messages = [
            'parentname.required' => 'Vui lòng nhập họ tên người liên hệ',
            'phone.required' => 'Vui lòng nhập số điện thoại liên lạc.',
            'phone.digits_between' => 'Số điện thoại từ 7 đến 11 số.',
            'center_id.required' => 'Vui lòng chọn Trung tâm ILA.',
            'program_id.required' => 'Vui lòng chọn chương trình học.'
        ];

        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid->errors());
        }
        $link = \Request::fullUrl();

        $data = [
            'fullname' => $request->get('parentname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'id_city' => $this->__getCity($request->get('center_id')),
            'id_center' => $request->get('center_id'),
            'id_program' => $request->get('program_id'),
            'study_ila' => $request->get('study_ila') ? $request->get('study_ila') : 0,
            'utm_campaign' => $utm_campaign,
            'utm_source' => $utm_source,
            'utm_term' => $utm_term,
            'utm_content' => $utm_content,
            'landing_page' => $link,
        ];


       $response = $this->client->post('http://dev.ila.edu.vn/crm-api-v2/crm/request-otp',[
           'json' => $data
       ]);

       if($response->getStatusCode() == 200){
            Session::put($request->phone, $data);
            Session::save();

           return redirect()->route('otp.get', ['phone'=> $request->phone]);
       }else{
           return back()->with('error','Server interrupt.');
       }
    }

    public function otpLayout(Request $request)
    {
        $rules = [
            'phone' => 'required|digits_between:9,11',
        ];
        $messages = [
            'phone.required' => 'Vui lòng nhập số điện thoại di động.',
            'phone.digits_between' => 'Số điện thoại từ 9 đến 11 số.',
        ];

        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid->errors());
        }
        return view('pages.teacherday.otp',['phone'=>$request->phone, 'mobile_detect' => $this->mobile]);
    }

    public function verifyOTP(Request $request)
    {
        $rules = [
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:2',
            'otp' => 'required',
            'phone' => 'required|digits_between:7,11',
        ];
        $messages = [
            'otp.required' => 'Vui lòng nhập mã OTP.',
            'phone.required' => 'Vui lòng nhập số điện thoại liên lạc.',
            'phone.digits_between' => 'Số điện thoại từ 7 đến 11 số.',
        ];

        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid->errors());
        }
        $data_lead = Session::get($request->phone) + [
            'otp' => $request->otp,
            'phone' => $request->phone,
        ];
        $response = $this->client->post('http://dev.ila.edu.vn/crm-api-v2/crm/verify-otp', [
            'json' => $data_lead
        ]);

        $body_res = json_decode($response->getBody()->getContents());
        
        switch($body_res->status_code){
            case 401:
                return redirect()->route('teacherday')->withErrors(['duplicate'=>'Số điện thoại hoặc email của bạn đã đăng ký tư vấn tại hệ thống ILA. Vui lòng chờ điện thoại của tư vấn viên hoặc liên hệ trung tâm ILA gần nhất để được tư vấn thêm.']);
                break;
            case 402:
                return back()->withErrors(['otp_invalid'=>'Mã OTP không chính xác hoặc hết hạn. Vui lòng nhập lại mã OTP hoặc đăng ký mới thông tin.']);
                break;
            case 500:
                return redirect()->route('teacherday')->withErrors(['error_server' =>'Xảy ra lỗi trong quá trình đăng ký. Vui lòng liên hệ trung tâm ILA gần nhất để được tư vấn thêm.']);
                break;
            case 200:
                $request->session()->forget($request->phone);
                return redirect()->route('teacherday.thanks')->with('status', 'done');
                break;
            default:
                return redirect()->route('teacherday')->withErrors(['error_server'=> 'Xảy ra lỗi trong quá trình đăng ký. Vui lòng liên hệ trung tâm ILA gần nhất để được tư vấn thêm.']);
                break;
        }
    }

    public function thankyou()
    {
        return session()->has('status') && session()->has('status') == 'done' ?  view('pages.teacherday.home-thankyou',['mobile_detect' => $this->mobile]) :  redirect()->route('teacherday');
    }
}

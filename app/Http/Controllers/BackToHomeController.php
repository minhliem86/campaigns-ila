<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Center;
use App\Models\City;
use App\Models\Product;
use Session;
use Cache;
use Cookie;
use Carbon\Carbon;

class BackToHomeController extends Controller
{

    public function index_ver2()
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
            $products = Product::whereIn('id', [14,13,15,52,12,21])->orderBy('order_cust','ASC')->select('id')->get();
            Cache::forever('products',$products);
        }

        $mobile_detect = new \Mobile_Detect();

        if(request()->query()){
            $utm_campaign = request()->query('utm_campaign') ? request()->query('utm_campaign') : 'ELT - Back To Home 2019';
            $utm_source = request()->query('utm_source') ? request()->query('utm_source') : '';
            $utm_term = request()->query('utm_term') ? request()->query('utm_term') : '';

            $utm_content = request()->query('utm_content') ? request()->query('utm_content') : '';
            return response()->view('pages.backtohome-new', compact(['cities','products',"mobile_detect"]))           ->withCookie('utm_campaign',$utm_campaign ? $utm_campaign : '',1440 * 30,'','.ila.edu.vn')
                ->withCookie('utm_source',$utm_source ? $utm_source : '', 1440 * 30, '','.ila.edu.vn')
                ->withCookie('utm_term',$utm_term ? $utm_term : '', 1440 * 30, '','.ila.edu.vn')
                ->withCookie('utm_content', $utm_content ? $utm_content : '', 1440 * 30, '','.ila.edu.vn');
        }else{
            return response()->view('pages.backtohome-new', compact(['cities','products',"mobile_detect"]))->withCookie('utm_campaign', 'ELT - Back To Home 2019', 1440 * 30,'','.ila.edu.vn');
        }
    }

    public function index()
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
            $products = Product::whereIn('id', [14,13,15,52,12,21])->orderBy('order_cust','ASC')->select('id')->get();
            Cache::forever('products',$products);
        }

        $mobile_detect = new \Mobile_Detect();

        if(request()->query()){
            $utm_campaign = request()->query('utm_campaign') ? request()->query('utm_campaign') : 'ELT - Back To Home 2019';
            $utm_source = request()->query('utm_source') ? request()->query('utm_source') : '';
            $utm_term = request()->query('utm_term') ? request()->query('utm_term') : '';

            $utm_content = request()->query('utm_content') ? request()->query('utm_content') : '';
            return response()->view('pages.backtohome-new', compact(['cities','products',"mobile_detect"]))           ->withCookie('utm_campaign',$utm_campaign ? $utm_campaign : '',1440 * 30,'','.ila.edu.vn')
                ->withCookie('utm_source',$utm_source ? $utm_source : '', 1440 * 30, '','.ila.edu.vn')
                ->withCookie('utm_term',$utm_term ? $utm_term : '', 1440 * 30, '','.ila.edu.vn')
                ->withCookie('utm_content', $utm_content ? $utm_content : '', 1440 * 30, '','.ila.edu.vn');
        }else{
            return response()->view('pages.backtohome-new', compact(['cities','products',"mobile_detect"]))->withCookie('utm_campaign', 'ELT - Back To Home 2019', 1440 * 30,'','.ila.edu.vn');
        }
    }

    public function postBackToHome(Request $request)
    {
        $rules = [
            'honeypot_name' => 'honeypot',
            'honeypot_time' => 'required|honeytime:2',
            'parentname' => 'required',
            'phone' => 'required|digits_between:7,11',
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
            'parent_name' => $request->get('parentname'),
            'phone' => $request->get('phone'),
            'mobile' => $request->get('phone'),
            'email' => $request->has('email') ? $request->get('email') : 'no-email@gmail.com',
            'id_city' => $this->__getCity($request->get('center_id')) ? $this->__getCity($request->get('center_id')) : 48 ,
            'id_center' => $request->get('center_id'),
            'id_program' => $request->get('program_id'),
            'study_ila' => $request->get('study_ila'),
            'register_date' => \Carbon\Carbon::now()->toDateTimeString(),
            'landing_page' => $link,
        ];
        unset($data['created_at']);
            $data_track = [
                'utm_campaign' => $request->cookie('utm_campaign') ? $request->cookie('utm_campaign') : '',
                'utm_source' => $request->cookie('utm_source') ? $request->cookie('utm_source') : '',
                'utm_term' => $request->cookie('utm_term') ? $request->cookie('utm_term') : '',
                'utm_content' => $request->cookie('utm_content') ? $request->cookie('utm_content') : '',
            ];

        $data_tracking = parent::getUtmTraking($data_track);

        $data_final = $data + $data_tracking;

        $new = parent::storeCustomer($data_final);
        if($new){
            \Cookie::queue(
                \Cookie::forget('utm_campaign')
            );
            \Cookie::queue(
                \Cookie::forget('utm_source')
            );
            \Cookie::queue(
                \Cookie::forget('utm_term')
            );
            \Cookie::queue(
                \Cookie::forget('utm_content')
            );
            return redirect()->route('bth.thanks')->with('status','OK');
        }else{
            return back()->withInput()->withErrors(['errors'=>'Quá trình đăng ký gặp sự cố vui lòng đăng ký lại!']);
        }
    }

    public function thankyou()
    {
        if(session('status')){
            $mobile_detect = new \Mobile_Detect();
            return view('pages.thankyou',compact('mobile_detect'));
        }else{
            return redirect('back-to-home');
        }

    }

    protected  function __getCity($id_center)
    {
        $center = Center::find($id_center);
        if($center){
            return $center->id_city;
        }else{
            return false;
        }
    }
}

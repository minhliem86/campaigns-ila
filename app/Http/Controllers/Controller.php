<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Session;
use App\Models\Customer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getCampaign($request, $media_id='0', $ga_medium='0', $campaign_id=249, $utm_term = '', $utm_content = '')
    {

        if($request->query('utm_source')){

            $row = DB::connection('mysql2')->table('media')->where('alias', $request->get('utm_source'))->first();

            if(count($row)){

                $media_id = $row->id;

                $ga_medium = $row->medium;
            }


        }

        if($request->query('utm_campaign')){
            $row2 = DB::connection('mysql2')->table('campaign')->where('alias', $request->get('utm_campaign'))->first();

            if(count($row2)){

                $campaign_id = $row2->id;
            }
        }

        return $data = [

            'id_campaign'=> $campaign_id,

            'id_media' => $media_id,

            'ga_medium' => $ga_medium,

            'utm_term' => $request->has('utm_term') ? $request->get('utm_term') : $utm_term,

            'utm_content' => $request->has('utm_content') ? $request->get('utm_content') : $utm_content,

        ];
    }

    public function getUtmTraking($data = [
        'utm_campaign' =>'',
        'utm_source' =>'',
        'utm_term' => '',
        'utm_content'=>''])
    {
        if($data){
            if($data['utm_campaign']){
                $row2 = DB::connection('mysql2')->table('campaign')->where('alias', $data['utm_campaign'])->first();
                if(count($row2)){
                    $campaign_id = $row2->id;
                }else{
                    $campaign_id = 196;
                }
            }else{
                $campaign_id = 196;
            }

            if($data['utm_source']){
                $row = DB::connection('mysql2')->table('media')->where('alias', $data['utm_source'])->first();
                if($row){

                    $media_id = $row->id;

                    $ga_medium = $row->medium;
                }else{
                    $media_id = 0;

                    $ga_medium = 'statis';
                }
            }else{
                $media_id = 0;

                $ga_medium = 'statis';
            }


            return $datafinal = [
                'id_campaign'=> $campaign_id,

                'id_media' => $media_id,

                'ga_medium' => $ga_medium,

                'utm_term' => array_key_exists("utm_term", $data) ? $data['utm_term'] : '',

                'utm_content' => array_key_exists("utm_content", $data) ? $data['utm_content'] : '',
            ];
        }else{
            return false;
        }
    }

    public function storeCustomer($data)
    {
        $data_marketing = [
            'is_run_cron' => 0,
        ];

        $newCustomer = Customer::create($data + $data_marketing);
        return $newCustomer;
    }
}

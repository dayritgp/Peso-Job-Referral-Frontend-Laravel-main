<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Alert;
use Illuminate\Support\Facades\Crypt;

class Login_Controller extends Controller
{
    public function login_account(Request $request)
    {

        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a POST request to the API endpoint
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($base_url.$base_url_dir.'login',[
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $decode_data = $response->json();
       //dd($decode_data);
        if ($response->status()==200) {
                //get
            switch( $decode_data['data']['roleID']){
                case 1:
                    //go to admin staff
                    Session::put(['id' => $decode_data['data']['id'],'roleid' => $decode_data['data']['roleID'],'token' => $decode_data['token'],
                    'user' => $decode_data['data']['staff_info']['firstname']." ".$decode_data['data']['staff_info']['surname']]);
                    return redirect('/peso_dashboard');
                    break;
                case 2:
                    //go to peso staff
                    Session::put(['id' => $decode_data['data']['id'],'roleid' => $decode_data['data']['roleID'],'token' => $decode_data['token'],
                    'user' => $decode_data['data']['staff_info']['firstname']." ".$decode_data['data']['staff_info']['surname']]);
                    return redirect('/peso_dashboard');
                    break;
                case 3:
                    Session::put(['id' => $decode_data['data']['id'],'roleid' => $decode_data['data']['roleID'],'token' => $decode_data['token'],
                    'user' =>$decode_data['data']['employer_info']['trade_name']]);
                    return redirect('/employer_dashboard');
                    break;
                case 4:
                    Session::put(['id' => $decode_data['data']['id'],'roleid' => $decode_data['data']['roleID'],'token' => $decode_data['token'],
                    'user' => $decode_data['data']['jobseeker_info']['firstname']." ".$decode_data['data']['jobseeker_info']['surname']]);

                    return redirect('/jobseeker_dashboard');
                    break;
                default:
            // Flash an error message
              Session::flash('error', 'Invalid Account');
                return redirect('/login');
            }

        }
        else if($response->status()==400){
              // Flash an error message
              $message = $decode_data['message'];
              Session::flash('error', $message);
                return redirect('/login');
        }

    }
    public function logout(Request $request,$id){
        if ($request->input('confirmed') === '1') {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');


        $bearer_token = Session::get('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$bearer_token,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($base_url.$base_url_dir.'log-out?id='.$id,
    );
    $decodedData = $response->json();
    //dd($decodedData);
        if($response->status()==200){
            Session::flush();
            return redirect('/');
        }
        else{
        // Flash an error message
        Session::flash('error', $decodedData['message']);
            return redirect('/');
        }
    }
    }

    public function logout_timeout(){
        $base_url = config('app.app_http_url');
         $base_url_dir = config('app.app_http_url_dir');


         $id = Session::get('id');
         $bearer_token = Session::get('token');
         $response = Http::withHeaders([
             'Authorization' => 'Bearer '.$bearer_token,
             'Content-Type' => 'application/json',
             'Accept' => 'application/json',
         ])->post($base_url.$base_url_dir.'log-out?id='.$id,
     );
     $decodedData = $response->json();
     //dd($decodedData);
         if($response->status()==200){
            Session::flush();
             return true;
         }
         else{
            return false;
         }
     }
}

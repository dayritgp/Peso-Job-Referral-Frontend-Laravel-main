<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Employer_Register_Controller extends Controller
{
    protected $session;

    public function __construct(Session $session) {
        $this->session = $session;
    }
    public function register(Request $request){

        // Get the uploaded files
        $files = [
            'company_logo' => $request->file('company_logo'),
            'business_permit' => $request->file('business_permit_image'),
            'BIR_form' => $request->file('BIR_form'),
            'company_profile' => $request->file('company_profile'),
        ];

        // Encode each file as a base64 string
        $base64Files = [];
        foreach ($files as $key => $file) {
            $fileContents = File::get($file);
            $base64Files[$key] = base64_encode($fileContents);
        }

        // Now you can access the base64 encoded files like this:
        $companyLogoBase64 = $base64Files['company_logo'];
        $businessPermitBase64 = $base64Files['business_permit'];
        $BIRFormBase64 = $base64Files['BIR_form'];
        $companyProfileBase64 = $base64Files['company_profile'];

        $data = [

            'email' => $request->email,
            'password' => $request->password,
            'business_name' =>  $request->business_name,
            'trade_name' =>  $request->trade_name,
            'acronym' => $request->acronym,
            'business_office' => $request->business_office,
            'tin' => $request->tin,
            'employer_type' => $request->emp_type,
            'employer_type_desc' =>  $request->employer_type_desc,
            'total_work_force' =>  $request->total_work_force,
            'business_line' => $request->business_line,
            'street' => $request->street,
            'barangay' =>  $request->barangay,
            'municipal_city' => $request->municipal_city,
            'province' =>  $request->province,
            'account_stats' => $request->account_stats,
            'business_permit' => $business_permit_base64File,
            'BIR_form' => $BIR_form_base64File,
            'company_profile' => $company_profile_base64File,
            'company_logo' => $company_logo_base64File,
            'owner_name' => $request->owner_name,
            'contact_person' => $request->contact_person,
            'position' => $request->position,
            'telephone' =>  $request->telephone,
            'mobile' => $request->mobile,
            'fax' => $request->fax,
            'contact_email' =>  $request->contact_email,
            'roleID' =>  '3',
            // 'date' => $request->date,
            // 'time' => $request->time,
        ];
        // dd($data);
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');
        // Send a POST request to the API endpoint
        $response_acc = Http::withHeaders([
        'Accept' => 'application/json',
        ])->post($base_url.$base_url_dir.'register_employer_info',$data);
            $decode_data = $response_acc->json();

            return redirect('/employer_register')->with('message',$decode_data['message']);
    }
}

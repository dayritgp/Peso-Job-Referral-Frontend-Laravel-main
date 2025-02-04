<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Jobseeker_Register_Controller extends Controller
{
    public function register(Request $request){

        $data = [

            //User Account
            'email' => $request->email,
            'password' => $request->password == null ?"" :$request->password ,

            //Personal Information
            'surname' => $request->surname,
            'firstname' =>$request->firstname,
            'middlename' => $request->middlename,
            'suffix' => $request->suffix,
            'birthdate' => $request->birthdate,
            'birthplace' => $request->birthplace,
            'sex' => $request->sex,
            'contact'=> $request->contact,
            'civil_status' => $request->civilstatus,
            'disability' => $request->disability_type == null ? "None" : $request->disability_type,
            'province' => $request->province,
            'municipal_city' => $request->municipalCity,
            'tin' => $request->tin,
            'height' => $request->height,
            'street' => $request->street,
            'barangay' => $request->barangay,

            'disability' => $request->disability_type ,
            'account_stats' => "Pending",
            // $resume = $request->resume;


            //Employment Status
            'employment_status'=> $request->employedType,
           'actively_looking' => $request->activelyLooking,
            'work_immediately' => $request->willingToWorkYes,
            'referred_time' => $request->referred_time,
            'months_jobhunting_work' => $request->lookingDuration,
            'fps_beneficiary' => $request->fpsBeneficiary,
            'household_ID' => $request->householdid == null ? "None" : $request->householdid,

            //Job Preference
            'preferred_occupation' => $request->prefOcc1 == null ? "None" : $request->prefOcc1,
            'occupation_1' =>$request->prefOcc1 == null ? "None" : $request->prefOcc1,
            'occupation_2' => $request->prefOcc2 == null ? "None" : $request->prefOcc2,
            'occupation_3' => $request->prefOcc3 == null ? "None" : $request->prefOcc3,
            'work_location1' => $request->local1 !== null ? $request->local1 : ($request->overseas1 !== null ? $request->overseas1 : 'None'),
            'work_location2' => $request->local2 !== null ? $request->local2 : ($request->overseas2 !== null ? $request->overseas2 : 'None'),
            'work_location3' => $request->local3 !== null ? $request->local3 : ($request->overseas3 !== null ? $request->overseas3 : 'None'),
            'expected_salary'=> $request->salary,
            'passport_no' => $request->passport,
            'expiry_date' => $request->expiry,


            //Language/dialects
            'enLanguage' => $request->enlanguage,
            'filLanguage' => $request->fillanguage,
            'otherLanguage' => $request->otherlanguage,
            'otherLanguageName' => $request->otherLanguageName,

            //educational background
            'school_currently_elem' => $request->elemSchool,
            'year_graduated_elem' => $request->elemGradYear,
            'award_elem' => $request->elemGradYear,

            'school_currently_high' => $request->secondSchool,
            'year_graduated_high' => $request->secondGradYear,
            'award_high' => $request->elemGradYear,

            'school_currently_ter' => $request->terSchool,
            'course_ter' => $request->terSec,
            'year_graduated_ter' => $request->terGradYear,
            'award_ter' => $request->elemGradYear,

            'school_currently_grad' => $request->gradSchool,
            'course_grad'=> $request->gradSec,
            'year_graduated_grad'=> $request->gradYear,
            'award_grad' => $request->award_grad,

            //Certification/Training
            'course' => $request->course ?? "None",
            'hours' => $request->hours ?? "None",
            'institution' => $request->institution ?? "None",
            'certificate' => $request->certificate ?? "None",


            //Eligibility/License
            'civil_service' => $request->eligibility,
            'date_taken' => $request->eligibilityExamDate,

            //Work Experience
            'company' => $request->company,
            'address'=>  $request->address,
            'position' => $request->position,
            'months'=> $request->months,
            'status'=> $request->status,

            //Other Skills
            'otherSkills' => $request->otherSkills,
            'date' =>$request->date,
            'time' => $request->time,
        ];

        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');
        // Send a POST request to the API endpoint
        $response_acc = Http::withHeaders([
        'Accept' => 'application/json',
        ])->post($base_url.$base_url_dir.'jobseeker_regist',$data);
            $decode_data = $response_acc->json();

            $status_code = $response_acc->status();

            return  $status_code;
    }


}

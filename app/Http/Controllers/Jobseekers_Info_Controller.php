<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class Jobseekers_Info_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fetch_referrals()
    {
        //
    }

    public function fetch_jobseekers_accepted()
    {
        //
    }
    public function fetch_jobseekers_status_count()
    {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'fetch_jobseeker_stats_counts');
        $decode_data = json_decode($response->body(), true);

       return $decode_data['data'];
    }


    public function fetch_jobseekers_active_status()
    {

        $bearer_token = Session::get('token');
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a POST request to the API endpoint
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $bearer_token,
        ])->post($base_url . $base_url_dir . 'jobseeker/filter', [
            'account_stats' => "Active",
        ]);

        $decode_data = json_decode($response->body(), true);

        // Return the data to be used by DataTables
        return DataTables::of($decode_data['data'])
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $updateBtn = '<a href="javascript:void(0)" class="btn btn-sm btn-primary update" data-id="'.$row['id'].'">Update</a>';
                $revokeBtn = '<a href="javascript:void(0)" class="btn btn-sm btn-danger revoke" data-id="'.$row['id'].'">Revoke</a>';
                $viewApplicationsBtn = '<a href="javascript:void(0)" class="btn btn-sm btn-info view-applications" data-id="'.$row['id'].'">View Applications</a>';
                return $updateBtn . ' ' . $revokeBtn . ' ' . $viewApplicationsBtn;
            })
            ->rawColumns(['action'])
            ->make(true);


    }

    public function fetch_jobseekers_pending_status()
    {

        $bearer_token = Session::get('token');

        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

         // Send a POST request to the API endpoint
         $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$bearer_token,
        ])->post($base_url.$base_url_dir.'jobseeker/filter',[
            'account_stats' => "Pending",

        ]);


        $decode_data = json_decode($response->body(), true);
        return $decode_data['data'];

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

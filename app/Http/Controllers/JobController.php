<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Alert;
use Illuminate\Support\Facades\Crypt;

use App\Models\Job;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $jobs = Job::where('title', 'like', "%$keyword%")
                    ->orWhere('description', 'like', "%$keyword%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        return view('jobs.search', compact('jobs'));
    }

    public function fetch_job_random()
    {

        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'jobs/filter');
        $decode_data = json_decode($response->body(), true);

        if ($decode_data !== null) {
            $data = $decode_data['data']; // Assign the 'data' key to $data variable
        } else {
            $data = []; // Set an empty array if no data is available
        }

        return view('index', compact('data'));
    }


    public function fetch_job_search(Request $request)
    {
        $job = $request->input('job') ?? '';
        $place = $request->input('location') ?? '';
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'jobs/filter?position=&place_work=');
        $response1 = Http::get($base_url.$base_url_dir.'jobs/filter?position='.$job.'&place_work='.$place);

        $decode_data = json_decode($job == '' ? $response->body() : $response1->body(), true);

        if ($decode_data !== null) {
            return view('search_job', ['data' => $decode_data['data']]);
        } else {

            return view('index', ['message' => "No jobs available."]);
        }
    }

    public function fetch_job_detail($job)
    {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'jobs/filter?id='.$job);
        $decode_data = json_decode($response->body(), true);

        //dd($decode_data['data']);

        if ($decode_data !== null) {
            return view('job_post_detail', ['data' => $decode_data['data']]);
        } else {

            return view('index', ['message' => "No jobs available."]);
        }
    }

    //TOBE WORK TOMORROW
    public function fetch_companies()
    {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'jobs/filter?id='.$job);
        $decode_data = json_decode($response->body(), true);

        if ($decode_data !== null) {
            return view('job_post_detail', ['data' => $decode_data['data']]);
        } else {

            return view('index', ['message' => "No jobs available."]);
        }
    }

     //TOBE WORK TOMORROW
    public function fetch_locations()
    {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'jobs/filter?id='.$job);
        $decode_data = json_decode($response->body(), true);

        if ($decode_data !== null) {
            return view('job_post_detail', ['data' => $decode_data['data']]);
        } else {

            return view('index', ['message' => "No jobs available."]);
        }
    }

     //05142024
    public function job_search_paginate(Request $request)
    {

        $currentPage = $request->input('page', 1);
        $position = $request->input('job', '') ?? '';
        $placeWork = $request->input('location') ?? '';
        $searchQuery = $request->input('search', '');

        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

          // Construct the API URL with filters
        $apiUrl = $base_url . $base_url_dir . 'jobs/filter?page=' . $currentPage;
        if (!empty($position)) {
            $apiUrl .= '&position=' . urlencode($position);
        }

        if (!empty($placeWork)) {
            $apiUrl .= '&place_work=' . urlencode($placeWork);
        }


        // Retrieve jobs data from the REST API
        $response = Http::get($apiUrl);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode the JSON response
            $responseData = $response->json();

            $jobs = $responseData['data'];
            $meta = $responseData['meta'];
            $links = $responseData['links'];

            // Get current page from the meta data
            $currentPage = $meta['current_page'] ?? 1;
            // Define how many items we want to be visible on each page
            $perPage = $meta['per_page'] ?? 15;
            // Calculate the total number of items
            $total = count($jobs);

            // Create our paginator
            $jobsPaginator = new LengthAwarePaginator(
                $jobs,
                $total,
                $perPage,
                $currentPage,
                ['path' => $meta['path'], 'query' => $jobs]
            );
            //return view('jobs.index', ['jobs' => $jobsPaginator]);
            return view('search_job', ['jobs' => $jobsPaginator, 'searchQuery' => $searchQuery]);
        }
    }

    public function register_jobPost(Request $request){

        $data = [

            //Personal Information
            'barangay' => $request->barangay,
            'muni_city' => $request->muni_city,
            'province' => $request->province,
            'establishmentName' =>$request->establishmentName,
            'industry' => $request->industry,
            'prepared_by' => $request->preparedBy,
            'designation' => $request->designation,
            'posting_date' => $request->postingDate,
            'valid_until' => $request->validUntil,
            'contact'=> $request->contact,

            //Job List
            'joblist' => $request->jobList,



        ];


        $bearer_token = Session::get('token');
        dd( $bearer_token);
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');
        // Send a POST request to the API endpoint
        $response_acc = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $bearer_token,
        ])->post($base_url.$base_url_dir.'jobpost_regist',$data);

            $decode_data = $response_acc->json();
            dd( $decode_data);

            $status_code = $response_acc->status();

            return   $decode_data;
    }

}


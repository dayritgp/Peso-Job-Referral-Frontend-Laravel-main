<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Employer_Info_Controller extends Controller
{
    public function fetch_employer_status_count()
    {
        $base_url = config('app.app_http_url');
        $base_url_dir = config('app.app_http_url_dir');

        // Send a GET request to the API endpoint
        $response = Http::get($base_url.$base_url_dir.'fetch_employer_stats_counts');
        $decode_data = json_decode($response->body(), true);

        return $decode_data['data'];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

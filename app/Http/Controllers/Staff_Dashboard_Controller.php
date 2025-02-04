<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Employer_Info_Controller;
use App\Http\Controllers\Jobseekers_Info_Controller;

use Illuminate\Http\Request;

class Staff_Dashboard_Controller extends Controller
{
    public function fetchDashboardData()
    {
        $jobSeekerStats = (new Jobseekers_Info_Controller)->fetch_jobseekers_status_count();
        $employerStats = (new Employer_Info_Controller)->fetch_employer_status_count();

        return view('staff.staff_dashboard',compact('jobSeekerStats', 'employerStats'));
    }
}

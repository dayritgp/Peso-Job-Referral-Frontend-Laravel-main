<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login_Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Employer_Register_Controller;
use App\Http\Controllers\Jobseeker_Register_Controller;
use App\Http\Controllers\Staff_Dashboard_Controller;
use App\Http\Controllers\Jobseekers_Info_Controller;

//Routes with Controller

Route::middleware(['auth', 'auth.timeout:300'])->group(function () {
    Route::get('/', [JobController::class, 'fetch_job_random'])->name('home');
});

Route::get('/check-session', function () {
    return session()->all();
});


Route::get('/',[JobController::class,'fetch_job_random'])->name('home');
Route::post('/init_login',[Login_Controller::class,'login_account']);
Route::post('/init_logout/{id}',[Login_Controller::class,'logout'])->name('init.logout');
Route::post('/timeout_logout',[Login_Controller::class,'logout_timeout'])->name('timeout.logout');
Route::get('/job_post_detail/{job}', [JobController::class,'fetch_job_detail'])->name('job.detail');
//Route::get('/job_search', [JobController::class,'fetch_job_search'])->name('job.search');
Route::get('/job_search', [JobController::class,'job_search_paginate'])->name('job.search');
//Routes with Views
Route::get('/login', function () {
    return view('loginfield');
})->name('login');;

//EMPLOYER RELATED ROUTES
Route::get('/employer_account', function () {
    return view('employer/employer_view_profile');
});
Route::get('/employer_jobsearch', function () {
    return view('employer/employer_jobsearch');
});

Route::get('/employer_jobseeker', function () {
    return view('employer/employer_search_jobseeker');
});
Route::get('/employer_dashboard', function () {
    return view('employer/employer_dashboard');
})->name('employer.dashboard');

Route::any('/employer_registration', function () {
    return view('employer/employer_register');
})->name('employer.registration');



Route::post('register_employer',[Employer_Register_Controller::class,'register'])->name('register.employer');
//SIDE MENU EMPLOYER
Route::get('/employer_application', function () {
    return view('employer/employer_application');
});

Route::get('/employer_dashboard', function () {
    return view('employer/employer_dashboard');
})->name('employer-dashboard');

Route::get('/employer_notifications', function () {
    return view('employer/employer_notifications');
});

Route::get('/employer_statistics', function () {
    return view('employer/employer_statistics');
});

Route::get('/employer_jobpost', function () {
    return view('employer/employer_jobpost');
});

Route::any('/employer_jobposting', function () {
    return view('employer/employer_jobposting');
})->name('employer.jobposting');

Route::post('register_jobpost',[JobController::class,'register_jobPost'])->name('register.jobpost');



//JOBSEEKER RELATED ROUTES
Route::get('/jobseeker', function () {
    return view('jobseeker/jobseeker_search_jobs');
});

Route::get('/jobseeker_dashboard', function () {
    return view('jobseeker/js-dashboard');
})->name('jobseeker.dashboard');

//NEEDED TO ADD
Route::get('/jobseeker_application', function () {
    return view('/jobseeker/js-dashboard');
});

Route::any('/jobseeker_registration', function () {
    return view('jobseeker/js-registration');
})->name('jobseeker.register');

Route::post('register_jobseeker',[Jobseeker_Register_Controller::class,'register'])->name('register.jobseeker');


Route::get('/staff_account', function () {
    return view('admin_view_profile');
});

Route::get('admin_login', function(){
    return view('admin_login');
});

//STAFF
Route::get('/peso_dashboard', [Staff_Dashboard_Controller::class,'fetchDashboardData'])->name('staff.dashboard');

Route::get('/peso_jobseekers_applications', function () {
    return view('staff/staff_jobseeker_view_applications');
})->name('staff.jobseeker.application');

Route::post('/peso_jobseekers_active',[Jobseekers_Info_Controller::class,'fetch_jobseekers_active_status'])->name('staff.jobseeker.active');
Route::post('/peso_jobseekers_pending',[Jobseekers_Info_Controller::class,'fetch_jobseekers_pending_status'])->name('staff.jobseeker.pending');

Route::get('/peso_employers', function () {
    return view('staff/staff_employer_view_job_posts');
})->name('staff.peso_employers');

Route::get('/peso_referral-slip', function () {
    return view('staff/staff_referral_slip');
})->name('staff.peso.referral');

Route::get('/peso_notifs', function () {
    return view('staff/main_menu_dashboard/notifications');
})->name('staff.peso.notif');

Route::get('/peso_stats', function () {
    return view('staff/main_menu_dashboard/statistics');
})->name('staff.peso.stats');

Route::get('/peso_settings', function () {
    return view('staff/main_menu_dashboard/settings');
})->name('staff.peso.settings');

Route::get('/peso_history', function () {
    return view('staff/main_menu_dashboard/history');
})->name('staff.peso.history');


Route::get('/admin-account', function () {
    return view('admin_account');
});

Route::get('/admin-employer-company-details', function () {
    return view('admin-employer-company-details');
});
Route::get('/admin-employer-NSRPForm2', function () {
    return view('admin_employer_NSRPForm1');
});
Route::get('/admin-employer-view-job-posts', function () {
    return view('admin_employer_view_job_posts');
});
Route::get('/admin-jobseeker-company', function () {
    return view('admin_jobseeker_company');
});
Route::get('/admin-jobseeker-jobsearch', function () {
    return view('admin_jobseeker_jobsearch');
});
Route::get('/admin-jobseeker-NSRPForm1', function () {
    return view('admin_jobseeker_NSRPForm1');
});
Route::get('/admin-jobseeker-searchjob', function () {
    return view('admin_jobseeker_searchjob');
});

Route::get('/admin-jobseeker-view-profile', function () {
    return view('admin_jobseeker_view_profile');
});
Route::get('/admin-login', function () {
    return view('admin_login');
});

Route::get('/admin-view-profile', function () {
    return view('admin_view_profile');
});
Route::get('/admin', function () {
    return view('admin ');
});
Route::get('/index', function () {
    return view('index');
});




Route::get('/js-page-dashboard', function () {
    return view('jobseeker/js-page-dashboard');
})->name('jobseeker.page-dashboard');;

Route::get('/js-jobsearch', function () {
    return view('js-jobsearch');
});

Route::get('/js-company', function() {
    return view('js-company');
});

Route::get('/js-view-profile', function() {
    return view('js-view-profile');
});




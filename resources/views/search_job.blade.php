<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/jobseeker_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/search_jobs_paginator.css') }}">

    <link rel="stylesheet" href="../../assets/css/employer/styles.css">
    <link rel="stylesheet" href="../../assets/css/employer/dashboard.css">


    <link rel="stylesheet" href="../../assets/css/employer/profile.css">
    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('images/pesologo.png') }}">


</head>

<body>
    <!-- Header and navigation content -->
    <!--=============== HEADER ===============-->

    @switch(session()->has('roleid'))
        @case(1)
            @include('extensions/staff_header')
        @break

        @case(2)
            @include('extensions/staff_header')
        @break

        @case(3)
            @include('extensions/employer_header')
        @break

        @case(4)
            @include('extensions/jobseeker_header')
        @break

        @default
            @include('extensions/visitor_header')
    @endswitch

    <div class="search-background">
        <form method="GET" action="{{ route('job.search') }}">
            <div class="search-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" name="job" value="{{ request()->input('job') }}" placeholder="Job position">
                </div>
                <div class="search-box">
                    <i class='fas fa-map-marker-alt'></i>
                    <input type="text" name="location" value="{{ request()->input('location') }}" placeholder="Work Location">
                </div>
                <div class="searchbtn" style="margin-left: 5px;">
                    <button type="submit">SEARCH</button>
                </div>
            </div>
        </form>
    </div>



    <!-- Category Start -->
    <div id="jobs" class="container" style="padding-top: 40px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Find Jobs Here</h1>
        <h3>
            <center>You may search by position title, employer name, work location, education level or course, etc.
            </center>
        </h3><br>
    </div>
    <div class="jobsearch_container">
        <table id="dashboardjobs" class="display" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="job-row">
                            @if (!empty($jobs))
                                @foreach ($jobs as $job)
                                    <div class="job-box">
                                        <div class="job-cell job-details">
                                            <a href="#">
                                                <div class="job-title">{{ $job['position'] }}</div>
                                            </a>
                                            <div class="company">{{ $job['employer_post']['business_name'] }}
                                            </div>
                                            <div class="location"> <i class="fas fa-map-marker-alt"></i>
                                                {{ $job['employer_post']['location'] }}</div>
                                            <div class="salary"><i class="fas fa-money-bill-alt"></i>
                                                {{ $job['salary'] }}</div>
                                            <div class="description">{{ $job['description'] }}</div>
                                            <!--  <div class="buttons-container">
                                            <a href="#"><button class="job-button">HTML</button></a>
                                            <a href="#"><button class="job-button">HTML5</button></a>
                                            <a href="#"><button class="job-button">Adobe Photoshop</button></a>
                                            <a href="#"><button class="job-button">PHP</button></a>
                                            <a href="#"><button class="job-button">Web Development</button></a>
                                        </div>-->
                                        </div>
                                        <div class="job-cell job-apply">
                                            <a href="{{ route('job.detail', ['job' => $job['id']]) }}"><button
                                                    class="apply-button">See More</button></a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No jobs available</p>
                            @endif
                        </div>


                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Render the pagination links -->
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($jobs->onFirstPage())
                <span class="disabled">&laquo;</span>
            @else
            <a href="{{ route('job.search', ['page' => $jobs->currentPage() - 1] + request()->except('page')) }}" rel="prev">&laquo;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($jobs->getUrlRange(1, $jobs->lastPage()) as $page => $url)

                @if ($page == $jobs->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                <a href="{{ route('job.search', ['page' => $page] + request()->except('page')) }}">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($jobs->hasMorePages())
            <a href="{{ route('job.search', ['page' => $jobs->currentPage() + 1] + request()->except('page')) }}" rel="next">&raquo;</a>
            @else
                <span class="disabled">&raquo;</span>
            @endif
        </div>
    </div>



    <footer class="footer">
        <div class="row">
            <div class="column">
                <h4>Job Seekers</h4>
                <p><a href="#">Job Search</a></p>
                <p><a href="#">Profile</a></p>
                <p><a href="#">Recommended jobs</a></p>
                <p><a href="#">Job Applications</a></p>
            </div>
            <div class="column">
                <h4>Employers</h4>
                <p><a href="#">Register for free</a></p>
                <p><a href="#">Post a Job ad</a></p>
                <p><a href="#">Customer Service</a></p>
            </div>
            <div class="column">
                <h4>About PESO Gensan</h4>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Partner Services</a></p>
            </div>
            <div class="column">
                <h4>Contact</h4>
                <p><a href="#">Help Centre</a></p>
                <p><a href="#">Contact Us</a></p>
            </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <!-- Footer links and copyright text -->
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Safe Job Search Guide</a>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2024 PESO JobPortal</p>
            </div>
        </div>
    </footer>
</body>
<!--=============== MAIN JS ===============-->
<script>
    @include('extensions/search_job_dropdown_buttons')
</script>
<!--=============== FOOTER
<div id="footer-placeholder"></div>
<script>
    // Fetch and insert the footer content
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
</script>
===============-->

</html>

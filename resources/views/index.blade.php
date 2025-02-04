<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/employer/styles.css') }}">

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/pesologo.png') }}">

</head>

<body>

    <!-- Header and navigation content -->
    <!--=============== HEADER ===============-->

    @if (session('roleid') == 1)
        @include('extensions/staff_header')
    @elseif (session('roleid') == 2)
        @include('extensions/staff_header')
    @elseif (session('roleid') == 3)
        @include('extensions/employer_header')
    @elseif (session('roleid') == 4)
        @include('extensions/jobseeker_header')
    @else
        @include('extensions/visitor_header')
    @endif


    <!-- Category Start -->
    <div class="container" style="padding-top: 30px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Special job categories</h1>
        <h3>
            <center>We have job vacancies for various types of jobseekers</center>
        </h3>
    </div>
    <!-- Category End -->

    <div class="containercard">
        <div class="card">
            <img src="{{ asset('import/images/pwd.jpg') }}" alt="Image 1">
            <div class="card-content">
                <h3>Differently abled/PWD</h3>
                <p> 1 position available</p>
            </div>
        </div>
        <div class="card">
            <img src="images/displaced.png" alt="Image 2">
            <div class="card-content">
                <h3>Displaced Workers</h3>
                <p>2 positions available</p>
            </div>
        </div>
        <div class="card">
            <img src="images/highschool.png" alt="Image 3">
            <div class="card-content">
                <h3>High School Graduates</h3>
                <p>3 positions available</p>
            </div>
        </div>
        <div class="card">
            <img src="images/government.png" alt="Image 4">
            <div class="card-content">
                <h3>Government Jobs</h3>
                <p>4 positions available</p>
            </div>
        </div>
    </div>
    <!-- Category Start -->
    <div class="container" style="padding-top: 30px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Quick Stats</h1>
        <h3>
            <center>PESO-Gensan is FREE for all and accessible 24/7</center>
        </h3>
    </div>
    <!-- Category End -->
    <div class="quick-stats">
        <div class="stat">
            <i class="fas fa-user"></i>
            <div class="stat-value" data-count="5331">0</div>
            <div class="stat-label">Jobseekers</div>
        </div>
        <div class="stat">
            <i class="fas fa-building"></i>
            <div class="stat-value" data-count="2034">0</div>
            <div class="stat-label">Employers</div>
        </div>
        <div class="stat">
            <i class="fas fa-briefcase"></i>
            <div class="stat-value" data-count="4321">0</div>
            <div class="stat-label">Job Vacancies</div>
        </div>
        <div class="stat">
            <i class="fas fa-user-check"></i>
            <div class="stat-value" data-count="3291">0</div>
            <div class="stat-label">Jobseekers Hired</div>
        </div>
    </div>


    <!-- Category Start -->
    <div id="jobs" class="container" style="padding-top: 60px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <h3>
            <center>We have job vacancies for various types of jobseekers
        </h3><br>
    </div>
    <!-- Category End -->
    <table>
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
                        @if (!empty($data))

                            @foreach ($data as $job)
                                <div class="job-box">
                                    <div class="job-cell job-details">
                                        <a href="#">
                                            <div class="job-title">{{ $job['position'] }}</div>
                                        </a>
                                        <div class="company">{{ $job['employer_post']['business_name'] }}</div>
                                        <div class="location"> <i class="fas fa-map-marker-alt"></i>
                                            {{ $job['employer_post']['location'] }}</div>
                                        <div class="salary"><i class="fas fa-money-bill-alt"></i> {{ $job['salary'] }}
                                        </div>
                                        <div class="description">{{ $job['description'] }}</div>
                                        <!--  <div class="buttons-container">
                                        <a href="#"><button class="job-button">HTML</button></a>
                                        <a href="#"><button class="job-button">HTML5</button></a>
                                        <a href="#"><button class="job-button">Adobe Photoshop</button></a>
                                        <a href="#"><button class="job-button">PHP</button></a>
                                        <a href="#"><button class="job-button">Web Development</button></a>
                                    </div> -->


                                    </div>
                                    <div class="job-cell job-apply">
                                        <a href="{{ route('job.detail', ['job' => $job['id']]) }}"
                                            target="_blank"><button class="apply-button">See More</button></a>
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



    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('import/js/jobseeker/main.js') }}"></script>
</body>
</html>

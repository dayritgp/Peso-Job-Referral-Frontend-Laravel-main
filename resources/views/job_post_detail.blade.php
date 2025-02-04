<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/employer/styles.css') }}">

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/pesologo.png') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <div class="padding-container">
        <h2>Job Details</h2>
        <div class="padding-content">
            <div class="image-container">
                <img src="{{ asset('images/pesologo.png') }}" alt="Image" class="left-image">

            </div>
            @foreach ($data as $job)
                <div class="job-info">
                    <h3>{{ $job['position'] }}</h3>
                    <div class="company">{{ $job['employer_post']['business_name'] }}</div>
                    <div class="location-salary">
                        <div class="location"><i class="fas fa-map-marker-alt"></i>
                            {{ $job['employer_post']['location'] }}</div>
                        <div class="salary1"><i class="fas fa-money-bill-alt"></i> {{ $job['salary'] }}/month</div>
                        <div class="attainment"><i class="fas fa-graduation-cap"></i> {{ $job['min_education_req'] }}
                        </div>
                    </div>
                </div>
                <div class="button-container">
                    @if (session('id'))
                        <a href="#" id="apply-btn"
                            onclick="confirmApplication(event,{{ $job['id'] }},{{ session('id') }},)">
                            <button class="apply-button">APPLY NOW</button>
                        </a>
                        <input type="hidden" name="confirmed" id="confirmed" value="0">
                    @else
                        <a href="#" onclick="confirmLogin(event)">
                            <button class="apply-button">APPLY NOW</button>
                        </a>
                        <input type="hidden" name="confirmed" id="confirmed" value="0">
                    @endif

                </div>
        </div>
        <div class="row-padding">
            <div class="column-padding">
                <h3>Job Description</h3>
                <p>{{ $job['description'] }}</p>

                <h3>Qualifications/Requirements</h3>
                <div class="bullet-list">
                    <ul>
                        <li>Graduate of {{ $job['job_vacancy_qualification']['course'] }}.</li>
                        <li>With atleast {{ $job['years_experience'] }}-year experience or equivalent
                        </li>
                        <li>{{ $job['description'] }}</li>

                    </ul>
                </div>

                <h3>Work location</h3>
                <p>{{ $job['employer_post']['location'] }}</p><br>

                <h3>Remarks</h3>
                <p>No additional remarks</p><br>

                <div class="button-container" style="text-align: center;">
                    @if (session('id'))
                        <input type="hidden" name="confirmed" id="confirmed" value="0">
                        <a href="#" id="apply-btn2"
                            onclick="confirmApplication(event,{{ $job['id'] }},{{ session('id') }},)"><button
                                class="apply-button2">APPLY
                                NOW</button></a>
                    @else
                        <a href="#" onclick="confirmLogin(event)"><button class="apply-button2">APPLY
                                NOW</button></a>
                    @endif
                </div>

            </div>

            <!---
      <div class="column-padding2">
        <h3>About the Company</h3>
        <p>A Christian Microfinance NGO registered in SEC last October 26, 1981. We are offering different financial
          programs for small and medium enterprises. We currently have 121 branches covering Luzon's Northern and
          Southern parts.</p><br>
        <h3>Industry</h3>
        <p>FINANCIAL INTERMEDIATION</p><br>
        <h3>Employment size</h3>
        <p>200 and over (Large)</p><br>
      </div>
    </div>
    -->

        </div>
        @endforeach



        <!--=============== MAIN JS ===============-->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @include('extensions.session_timeout_guard')
        <!-- Include SweetAlert library -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            $(document).ready(function() {
                var session = '<?php echo session('id'); ?>';
                if (session != '') {
                    const apiUrl = '<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'check_job_app'; ?>';
                    const token = '<?php echo session('token'); ?>';
                    // Run the check for existing application when the page is loaded
                    $.ajax({
                        url: apiUrl,
                        method: 'POST',
                        data: {
                            employerid: {{ $job['id'] }},
                            jobseekerid: session
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Authorization': 'Bearer <?php echo Session::get('token'); ?>'
                        },
                        success: function(response) {

                            if (response === true) {
                                $('#apply-btn').replaceWith(
                                    '<button class="apply-button applied">Applied</button>');
                                $('#apply-btn2').replaceWith(
                                    '<button class="apply-button2 applied">Applied</button>');
                            }
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                }
            });




            // Script for SweetAlert confirmation dialog

            function confirmApplication(event, employerID, jobseekerId) {


                event.preventDefault(); // Prevent default form submission behavior
                Swal.fire({
                    title: "Applying for this position",
                    text: "You want to apply? ",
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes",
                }).then((result) => {
                    if (result.isConfirmed) {
                        const apiUrl = '<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'job-app'; ?>';
                        const token = '<?php echo session('token'); ?>';

                        const url = apiUrl;
                        const headers = {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        };

                        axios.post(url, {
                                employerid: employerID,
                                jobseekerid: jobseekerId,
                                status: 'Active',
                                date: '',
                                time: '',
                            }, {
                                headers: headers
                            })
                            .then((response) => {
                                Swal.fire({
                                    title: "Success!",
                                    text: response.data,
                                    icon: "success",
                                    confirmButtonText: "OK",
                                }).then((result) => {
                                    $('#apply-btn').replaceWith(
                                        '<button class="apply-button applied">Applied</button>');
                                    $('#apply-btn2').replaceWith(
                                        '<button class="apply-button2 applied">Applied</button>');
                                });



                            })
                            .catch((error) => {
                                Swal.fire({
                                    title: 'Error Detected',
                                    text: error,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            });
                    } else {
                        // The user clicked on the "Cancel" button
                    }

                });
            }


            function confirmLogin(event) {
                event.preventDefault(); // Prevent default form submission behavior
                Swal.fire({
                    title: "You have to login first",
                    text: "Logging in, ",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Login",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('login') }}";
                    }
                });
            }
        </script>


</body>
<footer class="footer">
    <div class="footer-content">
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
    </div>
</footer>

</html>

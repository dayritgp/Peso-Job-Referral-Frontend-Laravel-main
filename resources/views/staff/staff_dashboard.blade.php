<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!--=============== ICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/adminstaff/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/adminstaff/account.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/adminstaff/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/adminstaff/admin_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/adminstaff/cards.css') }}"> <!-- STATISTICS CARDS -->

    <!--=============== DATA TABLES PLUGINS ===============-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css  ">0
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/pesologo.png') }}">
</head>

<body>

    <!--=============== HEADER ===============-->
    @include('extensions.staff_header')

    <div class="container1">
        <!-- ====================== START DASHBOARD SIDEBAR MAIN MENU =======================-->
        @include('staff.staff_main_menu_dashboard')
        <div class="content">
            @include('staff.main_menu_dashboard.dashboard')
            <!-- ====================== END DASHBOARD =======================-->
            <!-- ====================== JOB POSTS =======================-->
            @include('staff.main_menu_dashboard.jobseekers')
            @include('staff.main_menu_dashboard.employer')
            @include('staff.main_menu_dashboard.staff')
            @include('staff.main_menu_dashboard.jobs')


        </div>



    </div>
    <!-- ====================== END DASHBOARD =======================-->



    <!--=============== MAIN JS ===============-->

    @include('extensions.session_timeout_guard')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to handle page navigation
        document.querySelectorAll('.sidebar ul li a').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.querySelectorAll('.content > div').forEach(page => {
                    page.style.display = 'none';
                });
                document.getElementById(targetId).style.display = 'block';
                // Store the active section in local storage
                localStorage.setItem("activeSection", targetId);
            });
        });

        Swal.zIndex = 10000;

        // Function to set the active section on page load
        document.addEventListener("DOMContentLoaded", function() {
            var activeSection = localStorage.getItem("activeSection");
            if (activeSection) {
                var section = document.getElementById(activeSection);
                if (section) {
                    section.style.display = 'block';
                }
                // Hide the dashboard section if it's not the active section
                if (activeSection !== 'dashboard') {
                    var dashboardSection = document.getElementById('dashboard');
                    if (dashboardSection) {
                        dashboardSection.style.display = 'none';
                    }
                }
            } else {
                // If no active section is stored, show the default section
                var defaultSection = document.getElementById('referrals');
                if (defaultSection) {
                    defaultSection.style.display = 'block';
                }
            }
        });
    </script>
    @include('staff.main_menu_dashboard.js_scripts')





</body>

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


</html>


<script>
    // JavaScript function to handle tab switching within each section
    @include('staff.main_menu_dashboard.js_scripts')
</script>

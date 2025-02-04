<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== ICONS ===============-->

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/jobseeker_dashboard.css') }}">


    <!--=============== DATA TABLES PLUGINS ===============-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css  ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/pesologo.png') }}">
</head>

<body>


    <!--=============== HEADER ===============-->

    <div id="header-placeholder"></div>
    @include('extensions/jobseeker_header')
    <!-- ====================== START DASHBOARD =======================-->
    <div class="container1">
        @include('jobseeker/main_menu_dashboard')
        <div class="content">
            <div id="dashboard">
                <h2>Dashboard</h2>
                <h4 style="color: gray;">Hello {{ Session::get('user') }}</h4>

                <div class="home-content">
                    <div id="dashboard">
                        <div class="admin-boxes">
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Job Matches</div>
                                    <div class="number" id="jobMatches"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart"></i>
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">New Job Applied</div>
                                    <div class="number" id="newJobApplied"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart two"></i>
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Total Vacancies</div>
                                    <div class="number" id="totalVacancies"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart three"></i>
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">No. of Invitations</div>
                                    <div class="number" id="invitations"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart four"></i>
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Pending Applications</div>
                                    <div class="number" id="pendingApp"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart five"></i>
                            </div>
                            <div class="box">
                                <div class="right-side">
                                    <div class="box-topic">Interview</div>
                                    <div class="number" id="interview"></div>
                                    <div class="indicator">
                                        <i class="bx bx-up-arrow-alt"></i>
                                        <span class="text">Up from yesterday</span>
                                    </div>
                                </div>
                                <i class="bx bx-file cart six"></i>
                            </div>
                        </div>
                    </div>
                    <script>
                        function generateFakeNumber() {
                            return faker.random.number({
                                min: 10,
                                max: 1000
                            }); // Generate a random number between 10 and 1000
                        }

                        // Set generated numbers to the corresponding elements
                        document.getElementById("jobMatches").textContent = generateFakeNumber();
                        document.getElementById("newJobApplied").textContent = generateFakeNumber();
                        document.getElementById("totalVacancies").textContent = generateFakeNumber();
                        document.getElementById("invitations").textContent = generateFakeNumber();
                        document.getElementById("pendingApp").textContent = generateFakeNumber();
                        document.getElementById("interview").textContent = generateFakeNumber();
                    </script>

                    <div class="sales-boxes">
                        <div class="recent-sales box">
                            <div class="title">Recent Applications</div>
                            <div class="sales-details">
                                <div class="details-table-wrapper">
                                    <table class="details-table" id="recentApp">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Company</th>
                                                <th>Position</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <script>
                                        function generateFakeRecentApp(length) {
                                            const fakeList = [];
                                            for (let i = 0; i < length; i++) {
                                                fakeList.push({
                                                    company: faker.company.companyName(),
                                                    position: faker.name.jobTitle(),
                                                    date: faker.date.past().toLocaleDateString()
                                                });
                                            }
                                            return fakeList;
                                        }

                                        function populateRecentApp(data) {
                                            const tableBody = document.querySelector('#recentApp tbody');
                                            data.forEach(item => {
                                                const row = document.createElement('tr');
                                                row.innerHTML = `
                  <td>${item.date}</td>
                  <td>${item.company}</td>
                  <td>${item.position}</td>
                `;
                                                row.addEventListener('click', function() {
                                                    // Open modal when row is clicked
                                                    document.getElementById('myModal').style.display = 'block';
                                                });
                                                tableBody.appendChild(row);
                                            });
                                        }

                                        // Example usage:
                                        const fakeRecentApp = generateFakeRecentApp(50); // Generates a fake list with 5 entries
                                        populateRecentApp(fakeRecentApp);
                                    </script>
                                </div>

                            </div>

                        </div>
                        <div class="top-sales box">
                            <div class="title">Recommended Jobs</div>
                            <div class="details-table-wrapper">
                                <table class="details-table" id="recommendedJobs">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <script>
                                    function generateFakeRecommendedJobs(length) {
                                        const fakeList = [];
                                        for (let i = 0; i < length; i++) {
                                            fakeList.push({
                                                company: faker.company.companyName(),
                                                position: faker.name.jobTitle(),
                                            });
                                        }
                                        return fakeList;
                                    }

                                    function populateRecommendedJobs(data) {
                                        const tableBody = document.querySelector('#recommendedJobs tbody');
                                        data.forEach(item => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
            <td>${item.company}</td>
            <td>${item.position}</td>
          `;
                                            row.addEventListener('click', function() {
                                                // Redirect to jobseeker_searchjob.html when the row is clicked
                                                window.location.href = 'jobseeker_searchjob.html';
                                            });
                                            tableBody.appendChild(row);
                                        });
                                    }

                                    // Example usage:
                                    const fakeRecommendedJobs = generateFakeRecommendedJobs(50); // Generates a fake list with 5 entries
                                    populateRecommendedJobs(fakeRecommendedJobs);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====================== END DASHBOARD =======================-->



            <!-- ====================== JOB POSTS =======================-->
            <div id="applications" style="display: none;">
                <h2>My Applications</h2>
                <div class="table-container">
                    <div class="scroll">
                        <table id="dashboardjobs" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Job Title/Position</th>
                                    <th>Company</th>
                                    <th>Job Match</th>
                                    <th>Date Interview</th>
                                    <th>Date Hired</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>

                            </thead>
                            <tbody>



                            </tbody>
                        </table>
                    </div>
                    <script>
                        function generateFakeList(length) {
                            const fakeList = [];
                            for (let i = 0; i < length; i++) {
                                fakeList.push({
                                    company: faker.company.companyName(),
                                    name: faker.name.findName(),
                                    match: "Yes",
                                    position: faker.name.jobTitle(),
                                    date: faker.date.past().toLocaleDateString(),
                                    status: "Pending"
                                });
                            }
                            return fakeList;
                        }

                        function populateTable(data) {
                            const tableBody = document.querySelector('#dashboardjobs tbody');
                            data.forEach(item => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                  <td>${item.position}</td>
                  <td>${item.company}</td>
                  <td>${item.match}</td>
                  <td>${item.date}</td>
                  <td>${item.date}</td>
                  <td>${item.status}</td>
                  <td><button class="view-user" data-modal="myModal"><i class="fas fa-user"></i></button>
                    <button class="cancel-button" onclick="confirmReject()"><i class="fas fa-times"></i></button></td>
                `;
                                tableBody.appendChild(row);
                            });
                        }

                        // Example usage:
                        const fakeData = generateFakeList(100); // Generates a fake list with 5 entries
                        populateTable(fakeData);
                    </script>
                </div>
            </div>
            <!-- ====================== END JOB POSTS =======================-->
            <!-- The Modal for view-button -->
            <!-- The Modal -->

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="logoProfile">
                        <img src="../../images/jobseeker/profile.png" alt="Profile Image">
                    </div>
                    <div class="modal-text">
                        <h2>Juan Dela Cruz Sample Sample</h2>
                        <p>Education: Bachelor of Science in Information Technology</p>
                        <p>Last Work/Job: Computer Programmer</p>
                    </div>
                    <div class="button-row">
                        <a href="jobseeker_view_profile.html"><button class="view-button1"><i
                                    class="fas fa-user"></i> View
                                Profile</button></a>
                        <a href="NSRPForm1.html"><button class="view-button1"><i class="fas fa-file"></i> NSRP Form
                                1</button></a>
                    </div>
                </div>
            </div>
            <script>
                // Get all elements with class "view-user"
                var viewUserButtons = document.querySelectorAll(".view-button, .view-user");

                // Loop through each button to attach modal functionality
                viewUserButtons.forEach(function(button) {
                    // When the user clicks the button, open the corresponding modal
                    button.addEventListener("click", function() {
                        var modalId = button.dataset.modal;
                        var modal = document.getElementById(modalId);
                        modal.style.display = "block";
                    });
                });

                // Close the modal when the user clicks on <span> (x) or outside of it
                var modals = document.querySelectorAll(".modal");
                modals.forEach(function(modal) {
                    var span = modal.querySelector(".close");
                    span.addEventListener("click", function() {
                        modal.style.display = "none";
                    });
                    window.addEventListener("click", function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    });
                });
            </script>
            <script>
                // Function to show SweetAlert confirmation for rejecting
                function confirmReject() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to reject this application?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, reject it!',
                        cancelButtonText: 'No, cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If user clicks "Yes", perform the desired action
                            Swal.fire(
                                'Rejected!',
                                'Application has been rejected.',
                                'error'
                            );
                            // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                        }
                    });
                }
            </script>


            <!-- ====================== END HIRED =======================-->

            <!-- The Modal for view-button -->
            <!-- The Modal -->

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="logoProfile">
                        <img src="../../images/jobseeker/profile.png" alt="Profile Image">
                    </div>
                    <div class="modal-text">
                        <h2>Juan Dela Cruz Sample Sample</h2>
                        <p>Education: Bachelor of Science in Information Technology</p>
                        <p>Last Work/Job: Computer Programmer</p>
                    </div>
                    <div class="button-row">
                        <a href="jobseeker_view_profile.html"><button class="view-button1"><i
                                    class="fas fa-user"></i> View
                                Profile</button></a>
                        <a href="jobseeker_NSRPForm1.html"><button class="view-button1"><i class="fas fa-file"></i>
                                NSRP Form
                                1</button></a>
                    </div>
                </div>
            </div>












            <!-- ====================== HIRED =======================-->


            <!-- ====================== END HIRED =======================-->






            <!-- ====================== NOTIFICATIONS =======================-->
            <div id="notifications" style="display: none;">
                <h2>Notifications</h2>
                <div class="notificationtbl">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2">Recent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="notification">
                                        <div class="logo">
                                            <img src="../../images/jobseeker/PESO LOGO NEW.png" alt="Logo">
                                        </div>
                                        <div class="notificationcontent">
                                            <div class="header1">
                                                <div>
                                                    <h3>PESO - Admin</h3>
                                                    <h4>Referral Slip</h4>
                                                </div>
                                                <span class="time">21m ago</span>
                                            </div>
                                            <p class="message">PESO-Gensan released your Referral Slip for the job
                                                "Website Builder"</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="notification">
                                        <div class="logo">
                                            <img src="../../images/jobseeker/PESO LOGO NEW.png" alt="Logo">
                                        </div>
                                        <div class="notificationcontent">
                                            <div class="header1">
                                                <div>
                                                    <h3>PESO - Admin</h3>
                                                    <h4>Referral Slip</h4>
                                                </div>
                                                <span class="time">21m ago</span>
                                            </div>
                                            <p class="message">PESO-Gensan released your Referral Slip for the job
                                                "Website Builder"</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th colspan="2">Old</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="2">
                                    <div class="notification">
                                        <div class="logo">
                                            <img src="../../images/jobseeker/PESO LOGO NEW.png" alt="Logo">
                                        </div>
                                        <div class="notificationcontent">
                                            <div class="header1">
                                                <div>
                                                    <h3>PESO - Admin</h3>
                                                    <h4>NSRP Form</h4>
                                                </div>
                                                <span class="time">2 days ago</span>
                                            </div>
                                            <p class="message">Paki fill-out sa imong form. Salamat</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="notification">
                                        <div class="logo">
                                            <img src="../../images/jobseeker/PESO LOGO NEW.png" alt="Logo">
                                        </div>
                                        <div class="notificationcontent">
                                            <div class="header1">
                                                <div>
                                                    <h3>PESO - Admin</h3>
                                                    <h4>NSRP Form</h4>
                                                </div>
                                                <span class="time">2 days ago</span>
                                            </div>
                                            <p class="message">Paki fill-out sa imong form. Salamat</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====================== END NOTIFICATIONS =======================-->




            <script>
                // Get all elements with class "view-user"
                var viewUserButtons = document.querySelectorAll("#settings .view-user");

                // Loop through each button to attach modal functionality
                viewUserButtons.forEach(function(button) {
                    // When the user clicks the button, open the corresponding modal
                    button.addEventListener("click", function() {
                        var modalId = button.dataset.modal;
                        var modal = document.getElementById(modalId);
                        modal.style.display = "block";
                    });
                });

                // Close the modal when the user clicks on <span> (x) or outside of it
                var modals = document.querySelectorAll(".modal");
                modals.forEach(function(modal) {
                    var span = modal.querySelector(".close");
                    span.addEventListener("click", function() {
                        modal.style.display = "none";
                    });
                    window.addEventListener("click", function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    });
                });
            </script>




            <script></script>


            <!-- ====================== HISTORY =======================-->
            <div id="recent" style="display: none;">
                <h2>Recently Viewed</h2>
                <div class="table-container">

                    <div class="scroll">
                        <table id="recentjobs" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Job Title/Position</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                </tr>

                            </thead>

                            <tbody>



                            </tbody>

                        </table>
                        <script>
                            function generateFakeList(length) {
                                const fakeList = [];
                                for (let i = 0; i < length; i++) {
                                    const minSalary = faker.random.number({
                                        min: 50000,
                                        max: 100000
                                    });
                                    const maxSalary = faker.random.number({
                                        min: 100000,
                                        max: 200000
                                    });
                                    const formattedSalary = formatSalary(minSalary, maxSalary);

                                    fakeList.push({
                                        company: faker.company.companyName(),
                                        location: faker.address.country(),
                                        position: faker.name.jobTitle(),
                                        salary: formattedSalary
                                    });
                                }
                                return fakeList;
                            }

                            function formatSalary(minSalary, maxSalary) {
                                const formattedMin = minSalary.toLocaleString(); // Format min salary with commas
                                const formattedMax = maxSalary.toLocaleString(); // Format max salary with commas
                                return `₱${formattedMin} - ₱${formattedMax} per year`; // Combine formatted salaries with currency symbol
                            }


                            function populateTable(data) {
                                const tableBody = document.querySelector('#recentjobs tbody');
                                data.forEach(item => {
                                    const row = document.createElement('tr');
                                    row.innerHTML = `
                  <td>${item.position}</td>
                  <td>${item.company}</td>
                  <td>${item.location}</td>
                  <td>${item.salary}</td>

                `;
                                    row.addEventListener('click', function() {
                                        // Redirect to jobseeker_searchjob.html when the row is clicked
                                        window.location.href = 'jobseeker_searchjob.html';
                                    });
                                    tableBody.appendChild(row);
                                });
                            }



                            // Example usage:
                            const fakeRecentData = generateFakeList(100); // Generates a fake list with 5 entries
                            populateTable(fakeRecentData);
                        </script>
                    </div>

                </div>
            </div>
            <!-- ====================== END HISTORY =======================-->


        </div>
    </div>
    <!-- ====================== END DASHBOARD =======================-->



    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('import/js/main.js') }}"></script>
    <script src="{{ asset('import/js/chart.js') }}"></script>
    <script src="{{ asset('import/js/Scripts.js') }}"></script>
    @include('extensions.session_timeout_guard')

    <!-- Scripts -->

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





        $(document).ready(function() {
            var minDate = new DateTime('#min', {
                format: 'MMMM Do YYYY'
            });
            var maxDate = new DateTime('#max', {
                format: 'MMMM Do YYYY'
            });

            var table = $('#recentjobs, #dashboardjobs').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    'colvis',
                    {
                        extend: 'pageLength',
                    }
                ]
            });

            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date(data[4]);

                if (min && max) {
                    return (min <= date && date <= max);
                } else {
                    return true; // Display all rows when date range is not specified
                }
            });

            $('#min, #max').on('change', function() {
                table.draw();
            });
        });



        // JavaScript function to handle tab switching within each section
        function openTab(event, tabName, sectionId) {
            // Hide all tab content within the section
            document.querySelectorAll(`#${sectionId} .tab-content`).forEach(tabContent => {
                tabContent.classList.remove('active');
            });
            // Remove the 'active' class from all tab buttons within the section
            document.querySelectorAll(`#${sectionId} .tab-button`).forEach(tabButton => {
                tabButton.classList.remove('active');
            });
            // Show the selected tab content within the section
            document.getElementById(tabName).classList.add('active');
            // Add the 'active' class to the clicked tab button within the section
            event.currentTarget.classList.add('active');

            // Store the active tab in local storage
            localStorage.setItem(`${sectionId}-activeTab`, tabName);
        }


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


</body>
<!--=============== FOOTER ===============-->
<div id="footer-placeholder"></div>
<script>
    // Fetch and insert the footer content
    fetch('import/extended-layouts/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
</script>

</html>

@extends('extensions.homepage')

@section('content')
        <div class="sidebar">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="{{ url('/page-dashboard') }}"><i class='bx bx-grid-alt'></i>&nbsp;Dashboard</a></li>
                <li><a href="#"><i class='bx bx-user-circle'></i>&nbsp;My Applications</a></li>
                <li><a href="#"><i class='bx bx-bell'></i>&nbsp;Notifications<span
                    class="notification-badge">2</span></a></li>
                <li><a href="#"><i class='bx bx-history'></i>&nbsp;Recently Viewed</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Dashboard</h2>
                    <h4 style="color: gray;">Hello Mr. Nurhasan, Good Morning!</h4>

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
                        return faker.random.number({ min: 10, max: 1000 }); // Generate a random number between 10 and 1000
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
                                    row.addEventListener('click', function () {
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
                                row.addEventListener('click', function () {
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

</body>


    <!-- Scripts -->

    <script>
        // JavaScript to handle page navigation
        document.querySelectorAll('.sidebar ul li a').forEach(link => {
        link.addEventListener('click', function (event) {
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





        $(document).ready(function () {
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

            $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date(data[4]);

                if (min && max) {
                return (min <= date && date <= max);
                } else {
                return true; // Display all rows when date range is not specified
                }
            });

                $('#min, #max').on('change', function () {
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
        document.addEventListener("DOMContentLoaded", function () {
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

@endsection
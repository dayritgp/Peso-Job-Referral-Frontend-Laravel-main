<div id="dashboard">
    <h2>Dashboard</h2>
    <h4 style="color: gray;">Hello {{ session('user') }}</h4>
    <div class="home-content">
        <div class="sales-boxes" style="padding: 20px">
            <div class="recent-sales box">
                <div class="title">Recent Referred</div>
                <div class="sales-details">
                    <div class="details-table-wrapper">
                        <table class="details-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Jobseeker</th>
                                    <th>Position</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">02 Jan 2021</a></td>
                                    <td><a href="#">Alex Doe</a></td>
                                    <td><a href="#">IT Specialist</a></td>
                                    <!--<td><button type="button"> <i class="bx bx-user"></i></button></td>  Changed from <a> to <button> -->
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="top-sales box">
                <div class="title">Recent Job Posts</div>
                <div class="details-table-wrapper">
                    <table class="details-table">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>No. of Vacancy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <span class="position">Software Engineer</span>
                                    </a>
                                </td>
                                <td class="vacancy">5</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        <div id="dashboard">
            <div class="admin-boxes">
                <div class="box">
                    <div class="right-side">
                        <!-- FROM  EMPLYER INFO CONTROLLER - Staff Dashboard Controller fetchDashboardData() -->
                        <div class="box-topic">No. of Approved Jobseekers</div>
                        @if (!empty($jobSeekerStats))
                            <div class="number">{{ $jobSeekerStats['Active'] }}</div>
                        @else
                            <div class="number">0</div>
                        @endif

                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="bx bx-file cart three"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <!-- FROM  EMPLYER INFO CONTROLLER - Staff Dashboard Controller fetchDashboardData() -->
                        <div class="box-topic">No. of Approved Employers</div>
                        @if (!empty($employerStats))
                            <div class="number">{{ $employerStats['Active'] }}</div>
                        @else
                            <div class="number">0</div>
                        @endif
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="bx bx-file cart four"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <!-- FROM  EMPLYER INFO CONTROLLER - Staff Dashboard Controller fetchDashboardData() -->
                        <div class="box-topic">No. of Pending Jobseekers</div>
                        @if (!empty($jobSeekerStats))
                            <div class="number">{{ $jobSeekerStats['Pending'] }}</div>
                        @else
                            <div class="number">0</div>
                        @endif
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="bx bx-file cart five"></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">No. of Pending Employers</div>
                        <!-- FROM  EMPLYER INFO CONTROLLER - Staff Dashboard Controller fetchDashboardData() -->
                        @if (!empty($employerStats))
                            <div class="number">{{ $employerStats['Pending'] }}</div>
                        @else
                            <div class="number">0</div>
                        @endif
                        <div class="indicator">
                            <i class="bx bx-up-arrow-alt"></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class="bx bx-file cart six"></i>
                </div>
            </div>
        </div>



    </div>
</div>

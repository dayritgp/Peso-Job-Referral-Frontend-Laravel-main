<div id="statistics" style="display: none;">
    <h2>Statistics</h2>
    <div class="table-container">
        <div class="input-container">
            <label for="min">Minimum date:</label>
            <input type="text" id="min" name="min">
            <label for="max">Maximum date:</label>
            <input type="text" id="max" name="max">
        </div>
        <div class="tab-menu">
            <button class="tab-button active"
                onclick="openTab(event, 'job-tab1', 'statistics')">Jobseeker</button>
            <button class="tab-button"
                onclick="openTab(event, 'employ-tab2', 'statistics')">Employer</button>
        </div>
        <div id="job-tab1" class="tab-content active">
            <div class="home-content">
                <div id="dashboard">
                    <div class="admin-boxes">
                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">No. of Approved Jobseekers</div>
                                <div class="number">340</div>
                                <div class="indicator">
                                    <i class="bx bx-up-arrow-alt"></i>
                                    <span class="text">Up from yesterday</span>
                                </div>
                            </div>
                            <i class="bx bx-file cart three"></i>
                        </div>

                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">No. of Pending Jobseekers</div>
                                <div class="number">100</div>
                                <div class="indicator">
                                    <i class="bx bx-up-arrow-alt"></i>
                                    <span class="text">Up from yesterday</span>
                                </div>
                            </div>
                            <i class="bx bx-file cart five"></i>
                        </div>
                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">No. of Applications</div>
                                <div class="number">100</div>
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
            <div class="charts">
                <div class="charts-card">
                    <p class="chart-title">Jobseeker's Age</p>
                    <div class="bar-chart"></div> <!-- Changed id to class -->
                </div>

                <div class="charts-card">
                    <p class="chart-title">Jobseeker's Monthly Applications</p>
                    <div class="area-chart"></div> <!-- Changed id to class -->
                </div>
            </div>
        </div>
        <div id="employ-tab2" class="tab-content">
            <div class="home-content">
                <div id="dashboard">
                    <div class="admin-boxes">
                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">Total Jobposts</div>
                                <div class="number">42</div>
                                <div class="indicator">
                                    <i class="bx bx-up-arrow-alt"></i>
                                    <span class="text">Up from yesterday</span>
                                </div>
                            </div>
                            <i class="bx bx-file cart"></i>
                        </div>


                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">No. of Approved Employers</div>
                                <div class="number">100</div>
                                <div class="indicator">
                                    <i class="bx bx-up-arrow-alt"></i>
                                    <span class="text">Up from yesterday</span>
                                </div>
                            </div>
                            <i class="bx bx-file cart four"></i>
                        </div>

                        <div class="box">
                            <div class="right-side">
                                <div class="box-topic">No. of Pending Employers</div>
                                <div class="number">100</div>
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
            <div class="charts">
                <div class="charts-card">
                    <p class="chart-title">Total Approved Jobseekers</p>
                    <div class="bar-chart"></div> <!-- Changed id to class -->
                </div>

                <div class="charts-card">
                    <p class="chart-title">Jobseeker's Monthly Applications</p>
                    <div class="area-chart"></div> <!-- Changed id to class -->
                </div>
            </div>
        </div>

    </div>


</div>

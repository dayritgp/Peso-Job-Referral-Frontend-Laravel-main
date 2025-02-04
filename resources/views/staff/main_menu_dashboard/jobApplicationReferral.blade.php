  <!-- ====================== REFERRALS =======================-->
  <div id="referral" style="display: none;">
    <h2>Referrals</h2>
    <div id="employer-tab1" class="tab-content active" style="max-height: 420px;">
        <table id="dashboardInterview" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Employer ID</th>
                    <th>Job Title/Position</th>
                    <th>Company</th>
                    <th>Jobseeker ID</th>
                    <th>Date Interview</th>
                    <th>Date Hired</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody id="employerInterview">
                <!-- Job data will be populated here dynamically -->
            </tbody>
        </table>
    </div>
</div>
<!-- ====================== END REFERRALS =======================-->
 <!-- The Modal for view-button -->
            <!-- The Modal -->

            <div id="myModalJobseeker" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="logoProfile">
                        <img src="../../images/admin/profile.png" alt="Profile Image">
                    </div>
                    <div class="modal-text">
                        <h2>Juan Dela Cruz Sample Sample</h2>
                        <p>Education: Bachelor of Science in Information Technology</p>
                        <p>Last Work/Job: Computer Programmer</p>
                    </div>
                    <div class="button-row">
                        <a href="{{ url('/admin-jobseeker-view-profile') }}"><button class="view-button1"><i
                                    class="fas fa-user"></i> View Profile</button></a>
                        <a href="{{ url('/admin-jobseeker-NSRPForm1') }}"><button class="view-button1"><i
                                    class="fas fa-file"></i> NSRP Form 1</button></a>
                    </div>
                </div>
            </div>



            <div id="myModalReferralTab1" class="custom-modal">
                <div class="custom-modal-content">
                    <span class="close">&times;</span>
                    <div class="logoProfile">
                        <img src="../../images/admin/apple.png" alt="Profile Image">
                    </div>
                    <div class="modal-text">
                        <h2>VXI Global Solutions</h2>
                        <p>Trade Name: TULAY SA PAG-UNLAD INC</p>
                        <p>Owner: Ricardo Soyti</p>
                    </div>
                    <div class="button-row">
                        <a href="{{ url('/admin=employer-company-details') }}"><button class="view-button1"><i
                                    class="fas fa-eye"></i> View Company</button></a>
                        <a href="{{ url('/admin-jobseeker-NSRPForm1') }}"><button class="view-button1"><i
                                    class="fas fa-file"></i> NSRP Form 2</button></a>
                    </div>
                </div>
            </div>


            <div id="myModalEmployerTab1" class="custom-modal">
                <div class="custom-modal-content">
                    <span class="close">&times;</span>
                    <div class="logoProfile">
                        <img src="../../images/admin/apple.png" alt="Profile Image">
                    </div>
                    <div class="modal-text">
                        <h2>VXI Global Solutions</h2>
                        <p>Trade Name: TULAY SA PAG-UNLAD INC</p>
                        <p>Owner: Ricardo Soyti</p>
                    </div>
                    <div class="button-row">
                        <a href="admin_employer_company_details.html"><button class="view-button1"><i
                                    class="fas fa-eye"></i> View Company</button></a>
                        <a href="admin_jobseeker_NSRPForm1.html"><button class="view-button1"><i
                                    class="fas fa-file"></i> NSRP Form 2</button></a>
                    </div>
                </div>
            </div>

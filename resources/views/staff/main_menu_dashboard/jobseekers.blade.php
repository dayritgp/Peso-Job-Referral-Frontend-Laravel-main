 <!-- ====================== JOB POSTS =======================-->
 <div id="jobseeker" style="display: none;">
    <h2>Job Seeker</h2>
    <div class="table-container">
        <div class="button-container">
            <div class="tab-menu">
                <button class="tab-button active"
                onclick="openTab(event, 'jobseeker-tab1', 'jobseeker')">
                    Approved
                </button>
                <button class="tab-button" onclick="openTab(event, 'jobseeker-tab2', 'jobseeker')">Pending</button>
            </div>
            <div style="text-align: right;">
                <button class="btn btn-primary" onclick="window.location.href = '{{ route('jobseeker.register') }}'">Add Jobseeker</button>
              </div>
          </div>

        <div id="jobseeker-tab1" class="tab-content active" style="max-height: 380px;">
            <table id="dashboardjobsActive" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Jobseeker ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="jobseekerApproved">
                    <!-- Job data will be populated here dynamically -->

                </tbody>
            </table>

        </div>
        <div id="jobseeker-tab2" class="tab-content" style="max-height: 380px;">
            <table id="dashboardjobsPending" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Jobseeker ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="jobseekerPending">
                    <!-- Job data will be populated here dynamically -->
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- ====================== END JOB POSTS =======================-->
<!-- The Modal for view-button -->
<!-- The Modal -->
<div id="myModalJobseekerTab" class="custom-modal">
    <div class="custom-modal-content">
      <span class="close">&times;</span>
      <div class="logoProfile">

        <img src=  "{{ asset('import/images/admin/profile.png') }}" alt="Profile Image">
      </div>
      <div class="modal-text">
        <h2>Juan Dela Cruz Sample Sample</h2>
        <p>Education: Bachelor of Science in Information Technology</p>
        <p>Last Work/Job: Computer Programmer</p>
      </div>
      <div class="button-row">
        <a href="admin_jobseeker_view_profile.html"><button class="view-button1"><i class="fas fa-user"></i> View Profile</button></a>
        <a href="admin_jobseeker_NSRPForm1.html"><button class="view-button1"><i class="fas fa-file"></i> NSRP Form 1</button></a>
      </div>
    </div>
  </div>

<!-- ====================== HIRED =======================-->

<div id="jobs" style="display: none;">
    <h2>Job Post</h2>
    <div class="table-container">

        <div class="button-container">
            <div class="tab-menu">

            </div>
            <div style="text-align: right;">
                <button class="btn btn-primary" onclick="window.location.href = '{{ route('employer.jobposting') }}'">Add Job Post</button>
            </div>
        </div>

    </div>
    <div id="job-tab1" class="tab-content active" style="max-height: 380px;">
        <table id="dashboardJobPostActive" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Employer ID</th>
                    <th>Establishment Name</th>
                    <th>Industry</th>
                    <th>Barangay</th>
                    <th>Municipal/City</th>
                    <th>Province</th>
                    <th>Prepared_by</th>
                    <th>Deesignation</th>
                    <th>Posting_date</th>
                     <th>Valid_until</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="joblistTable">
                <!-- Job data will be populated here dynamically -->
            </tbody>
        </table>
    </div>
</div>
</div>

<!-- The Modal -->
<div id="myModalAddJob" class="custom-modal">
    <div class="custom-modal-content">
        <span class="close">&times;</span>
        <div class="logoProfile">

            <img src= "{{ asset('import/images/admin/apple.png') }}" alt="Profile Image">
        </div>
        <div class="modal-text">
            <h2>VXI Global Solutions</h2>
            <p>Trade Name: TULAY SA PAG-UNLAD INC</p>
            <p>Owner: Ricardo Soyti</p>
        </div>
        <div class="button-row">
            <a href="admin_employer_company_details.html"><button class="view-button1"><i class="fas fa-eye"></i> View
                    Company</button></a>
            <a href="admin_jobseeker_NSRPForm1.html"><button class="view-button1"><i class="fas fa-file"></i> NSRP Form
                    2</button></a>
        </div>
    </div>
</div>



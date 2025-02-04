<div class="sidebar">
    @if (session('roleid') == 1)
        <h2>Administrator</h2>
    @else
        <h2>Staff</h2>
    @endif
    <!-- ====================== START DASHBOARD MAIN MENU =======================-->
    <ul>
        <li>
            <a href="#dashboard"><i class='bx bx-grid-alt'></i>&nbsp;Dashboard</a>
        </li>
        <li>
            <a id="jobseeker-link" href="#jobseeker" onclick="populateTableJobSeeker('Active')"><i
                    class='bx bx-user-circle'></i>&nbsp;Job Seekers</a>

        </li>
        <li>
            <a id="employer-link" href="#employer" onclick="populateEmployerTable('Active')">
                <i class='bx bx-briefcase'></i>&nbsp;Employers</a>
        </li>
        <li>
            <a id="staffs-link" href="#staffsPage" onclick="populateStaffTable('Active')">
                <i class='bx bx-briefcase'></i>&nbsp;Staffs</a>
        </li>
        <li>
            <a id="jobs-link" href="#jobs" onclick="populateTableJobsPost('Active')">
                <i class='bx bx-briefcase'></i>&nbsp;Jobs</a>
        </li>
        <li><a href="#referral"><i class='bx bx-user-plus'></i>&nbsp;Referrals</a></li>
        <li><a href="#adminnotifications"><i class='bx bx-bell'></i>&nbsp;Notifications<span
                    class="notification-badge">2</span></a></li>
        <li><a href="#statistics"><i class='bx bx-stats'></i>&nbsp;Statistics</a></li>
        <li><a href="#settings"><i class="fa fa-gear"></i>&nbsp;Settings</a></li>
        <li><a href="#history"><i class='bx bx-history'></i>&nbsp;Audit Logs</a></li>
    </ul>
</div>

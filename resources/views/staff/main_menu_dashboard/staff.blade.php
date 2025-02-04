<!-- ====================== HIRED =======================-->


<div id="staffsPage" style="display: none;">
    <h2>Staff</h2>
    <div class="table-container">
        <div class="button-container">
            <div class="tab-menu">
                <button class="tab-button active" onclick="openTab(event, 'staff-tab5', 'staff')">Approved</button>
                <button class="tab-button" onclick="openTab(event, 'staff-tab6', 'staff')">Pending</button>
            </div>
            <div style="text-align: right;">
                <button onclick="location.href='{{ url('/employer_register') }}'" class="btn btn-primary">Add
                    Staff</button>
            </div>
        </div>
        <div id="staff-tab5" class="tab-content active" style="max-height: 380px;">
            <table id="dashboardStaffsActive" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Surname</th>
                        <th>Contact</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="staffApproved">
                    <!-- Job data will be populated here dynamically -->
                </tbody>
            </table>
        </div>
        <div id="staff-tab6" class="tab-content" style="max-height: 380px;">
            <table id="dashboardStaffsPending" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Surname</th>
                        <th>Contact</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="staffPending">
                    <!-- Job data will be populated here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>

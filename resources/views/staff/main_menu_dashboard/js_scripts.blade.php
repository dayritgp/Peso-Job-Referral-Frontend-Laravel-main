<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
    // Modal JavaScript code
    function showModal(modalId) {
        $('#' + modalId).modal('show');
    }

    function populateEmployerTable(status) {
        var table;
        const token = '{{ session("token") }}';

        if (status == "Active") {
            table = '#dashboardEmployerActive';
        } else {
            table = '#dashboardEmployerPending';
        }

        //check if datatable is not empty
        if ($.fn.DataTable.isDataTable(table)) {
            $('#dashboardEmployerActive').DataTable().destroy();
        }

        $(document).ready(function() {

            $(table).DataTable({
                "processing": true,
                "serverSide": true,
                "destroy": true,
                "ajax": {
                    "url": "<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'emp_info/filter'; ?>",
                    "type": "POST",
                    "data": function(d) {
                        d.account_stats = status;
                    },
                    "headers": {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Authorization': `Bearer ${token}`,
                    },
                },
                "columns": [{
                        "data": "employerID"
                    },
                    {
                        "data": "business_name"
                    },
                    {
                        "data": "trade_name"
                    },
                    {
                        "data": "business_office"
                    },
                    {
                        "data": "employer_type"
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            if (status == "Active") {
                                return `
                    <button class="view-button" onclick="changeStatusPrompt()" title="View Profile"><i class="fas fa-eye"></i></button>
                      <button class="view-button" onclick="showModal('myModalDelete')" title="Update Information"><i class="fas fa-user"></i></button>
                    <button class="btn btn-primary" onclick="changeStatusPrompt("Pending")" title="Change Status"><i class="fas fa-download"></i></button>
                    <button class="cancel-button" onclick="downloadResume()" title="Delete"><i class="fas fa-download"></i></button>
                         `;
                            } else {
                                return `
                            <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                            <button class="view-file" onclick="showModal('myModalEmployerTab1')" title="View Applications"><i class="fas fa-file"></i></button>
                            <button class="view-user"  onclick="confirmApproveEmployer()"><i class="fas fa-check" title="Approved"> </i></button>
                            <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times" title="Removed">></i></button>
                            `;
                            }
                        }
                    }
                ]
            });
        });

    }

    function changeEmployerStatusPrompt(status) {
        if (confirm("Do you want to change Employer status from Active to Pending?")) {
            const apiUrl = '<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'changeEmployerStats/'; ?>';
            const token = '<?php echo session('token'); ?>';

            const url = apiUrl + jobseekerid;
            const headers = {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
            const data = {
                status: status, // This is the body part
            };

            axios.post(url, data, {
                    headers,
                })
                .then(response => {
                    const data = response.data.data;
                    alert(data);
                    // Redirect the user after the request has completed
                    window.location.href = '{{ route('employer.registration') }}';
                })
                .catch(error => {
                    if (error.response) {
                        // The request was made and the server responded with a status code
                        // that falls out of the range of 2xx
                        Swal.fire({
                            title: 'Error Detected',
                            text: error.response.data,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    } else if (error.request) {
                        // The request was made but no response was received
                        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                        // http.ClientRequest in node.js
                        Swal.fire({
                            title: 'Error Detected',
                            text: 'No response received from the server',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        Swal.fire({
                            title: 'Error Detected',
                            text: error.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
        }
    }

    function deleteEmployeeAdmin() {
        if (confirm("Do you want to remove this Employer?")) {
            // Call the route to update the status here
            window.location.href = '{{ route('employer.registration') }}';
        }
    }


    function populateStaffTable(status) {
        var table;
        const token = '{{ session("token") }}';

        if (status == "Active") {
            table = '#dashboardStaffsActive';
        } else {
            table = '#dashboardStaffsPending';
        }

        //check if datatable is not empty
        if ($.fn.DataTable.isDataTable(table)) {
            $('#dashboardStaffActive').DataTable().destroy();
        }

        $(document).ready(function() {

            $('#dashboardStaffsActive').DataTable({
                "processing": true,
                "serverSide": true,
                "destroy": true,
                "ajax": {
                    "url": "<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'peso_staff/filter'; ?>",
                    "type": "POST",
                    "data": function(d) {
                        d.status = status;
                    },
                    "headers": {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Authorization': `Bearer ${token}`,
                    },
                },
                "columns": [
                    { "data": "staffID", "title": "Staff ID" },
                    { "data": "firstname", "title": "Firstname" },
                    { "data": "middlename", "title": "Middlename" },
                    { "data": "surname", "title": "Surname" },
                    { "data": "contact", "title": "Contact" },
                    { "data": "positionID", "title": "Position ID" },
                    { "data": "status", "title": "Status" },
                    {
                        "data": null,

                        "render": function(data, type, row) {
                            if (status == "Active") {
                                return `
                    <button class="view-button" onclick="changeStatusPrompt()" title="View Profile"><i class="fas fa-eye"></i></button>
                      <button class="view-button" onclick="showModal('myModalDelete')" title="Update Information"><i class="fas fa-user"></i></button>
                    <button class="btn btn-primary" onclick="changeStatusPrompt("Pending")" title="Change Status"><i class="fas fa-download"></i></button>
                    <button class="cancel-button" onclick="downloadResume()" title="Delete"><i class="fas fa-download"></i></button>
                         `;
                            } else {
                                return `
                            <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                            <button class="view-file" onclick="showModal('myModalEmployerTab1')" title="View Applications"><i class="fas fa-file"></i></button>
                            <button class="view-user"  onclick="confirmApproveEmployer()"><i class="fas fa-check" title="Approved"> </i></button>
                            <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times" title="Removed">></i></button>
                            `;
                            }
                        }
                    }
                ]
            });
        });

    }


    function populateTableJobSeeker(status) {
        var table;

        if (status == "Active") {
            table = '#dashboardjobsActive';
        } else {
            table = '#dashboardjobsPending';
        }

        $(document).ready(function() {
            $(table).DataTable({
                "processing": true,
                "serverSide": true,
                "destroy": true,
                "ajax": {
                    "url": "<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'jobseeker/filter'; ?>",
                    "type": "POST",
                    "data": function(d) {
                        d.account_stats = status;
                    },
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Authorization': 'Bearer <?php echo Session::get('token'); ?>'
                    }
                },
                "columns": [{
                        "data": "jobseekerID"
                    },
                    {
                        "data": "surname"
                    },
                    {
                        "data": "firstname"
                    },
                    {
                        "data": "middlename"
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            if (status == 'Active') {
                                return `
                        <a href="admin_jobseeker_view_applications.html" target="_blank"><button class="view-button" title="View Applications"><i class="fas fa-eye"></i></button></a>
                        <button class="view-userProfile" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button>
                        <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                    `;
                            } else {
                                return `
                        <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                        <a href="admin_jobseeker_NSRPForm1.html" target="_blank"><button class="view-file" title="View Applications"><i class="fas fa-file"></i></button></a>
                        <button class="view-user" onclick="confirmApproveEmployer()"><i class="fas fa-check"></i></button>
                        <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times"></i></button>
                    `;
                            }
                        }
                    }
                ]
            });
        });
    }


    function populateTableJobsPost() {
        $('#dashboardJobPostActive').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'jobpost'; ?>",
                "type": "GET",
                "data": function(d) {

                },
                "success":function(d){
                    console.log(d);
                },
                "headers": {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': 'Bearer <?php echo Session::get('token'); ?>'
                },

            },
            "columns": [{
                    "data": "employer_jobID"
                },
                {
                    "data": "employer_post.establishment_name"
                },
                {
                    "data": "position"
                },
                {
                    "data": "salary"
                },

                {
                    "data": "nature_work"
                },
                {
                    "data": "place_work"
                },
                {
                    "data": "date"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `
                        <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                        <a href="admin_jobseeker_NSRPForm1.html" target="_blank"><button class="view-file" title="View Applications"><i class="fas fa-file"></i></button></a>
                        <button class="view-user" onclick="confirmApproveEmployer()"><i class="fas fa-check"></i></button>
                        <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times"></i></button>
                    `;
                    }
                }
            ]
        });
    }


    function openTab(event, tabName, sectionId) {
        var activePage = sectionId.replace('-', ' ').toUpperCase();

        if (tabName === 'jobseeker-tab1') {
            populateTableJobSeeker('Active');

        }

        if (tabName === 'jobseeker-tab2') {
            populateTableJobSeeker('Pending');

        }
        if (tabName === 'employer-tab3') {
            populateEmployerTable('Active');

        }

        if (tabName === 'employer-tab4') {
            populateEmployerTable('Pending');

        }
        if (tabName === 'staff-tab5') {


        }
        if (tabName === 'staff-tab6') {


        }
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


    function showJobseeker(jobseekerid) {
        const apiUrl = '<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'jobseeker-info/'; ?>';
        const token = '<?php echo session('token'); ?>';


        const url = apiUrl + jobseekerid;
        const headers = {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };

        axios.get(url, {
                headers
            })
            .then(response => {
                const data = response.data.data;
                alert(data);
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error Detected',
                    text: error,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    }

    function updateJobseeker() {
        alert('Hello, this is an alert dialog!');
    }

    function revokeJobseeker() {
        alert('Hello, this is an alert dialog! for revoke');
    }



    function showEmployer(employerid) {
        alert(employerid);
        const apiUrl = '<?php echo config('app.app_http_url') . config('app.app_http_url_dir') . 'emp_info/'; ?>';
        const token = '<?php echo session('token'); ?>';


        const url = apiUrl + employerid;
        const headers = {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };

        axios.get(url, {
                headers
            })
            .then(response => {
                const data = response.data.data;
                alert(data);
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error Detected',
                    text: error,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });

    }

    function updateEmployer() {
        alert('Hello, this is an alert dialog!');
    }

    function revokeEmployer() {
        alert('Hello, this is an alert dialog! for revoke');
    }

    function openModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = "block";

        // Close the modal when the user clicks on <span> (x) or outside of it
        var modals = document.querySelectorAll(".custom-modal");
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
    }

    // Get the button element
    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById("add-employer-btn");
        if (btn) {
            btn.addEventListener("click", function() {
                openModal("myModalEmployerTab1");
            });
        } else {
            console.log("Button not found!");
        }
    });
</script>

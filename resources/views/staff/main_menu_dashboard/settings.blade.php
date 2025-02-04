<div id="settings" style="display: none;">
    <h2>Administrator Settings</h2>
    <div class="table-container">
        <div class="tab-menu">
            <button class="tab-button active"
                onclick="openTab(event, 'settings-tab1', 'settings')">Administrator Staffs</button>
            <button class="tab-button"
                onclick="openTab(event, 'settings-tab2', 'settings')">Pending</button>
            <button class="tab-button" onclick="openTab(event, 'settings-tab3', 'settings')">Deactivated
                accounts</button>

        </div>
        <div id="settings-tab1" class="tab-content active">
            <table id="dashboardjobs" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Administrator ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Position</th>
                        <th>User Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AM104</td>
                        <td>Dela Cruz</td>
                        <td>Cardo</td>
                        <td>Dalisay</td>
                        <td>Supervising Administrative Officer</td>
                        <td>SuperAdmin</td>
                        <td>
                            <button class="view-button" data-modal="changeRoleAdmin"><i
                                    class="fas fa-pen"></i></button>
                            <button class="view-user" data-modal="myModalAdmin" title="View Profile"><i
                                    class="fas fa-user"></i></button>
                            <button class="cancel-button" data-modal="myModalAdmin" title="View Profile"
                                onclick="confirmCancel()"><i class="fas fa-ban"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>AM105</td>
                        <td>Cruz Dela</td>
                        <td>Dalisay</td>
                        <td>Cardo</td>
                        <td>Supervising Administrative Officer</td>
                        <td>Administrator</td>
                        <td>
                            <button class="view-button" data-modal="changeRoleAdmin"><i
                                    class="fas fa-pen"></i></button>
                            <button class="view-user" data-modal="myModalAdmin" title="View Profile"><i
                                    class="fas fa-user"></i></button>
                            <button class="cancel-button" data-modal="myModalAdmin" title="View Profile"
                                onclick="confirmCancel()"><i class="fas fa-ban"></i></button>
                        </td>

                        <script>
                            // Function to show SweetAlert confirmation
                            function confirmCancel() {
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't be able to revert this!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Yes, disable this account!',
                                    cancelButtonText: 'No, keep it'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // If user clicks "Yes", perform the desired action
                                        Swal.fire(
                                            'Account Successfully Deactivated!!',
                                            'Your action has been confirmed.',
                                            'success'
                                        );
                                        // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                                    }
                                });
                            }
                        </script>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="settings-tab2" class="tab-content">
            <table id="dashboardjobs" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Administrator ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Position</th>
                        <th>User Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AM104</td>
                        <td>Dela Cruz</td>
                        <td>Cardo</td>
                        <td>Dalisay</td>
                        <td>Supervising Administrative Officer</td>
                        <td>SuperAdmin</td>
                        <td>
                            <button class="view-user" onclick="confirmApproveAdmin()"><i
                                    class="fas fa-check"></i></button>
                            <button class="cancel-button" onclick="confirmRejectAdmin()"><i
                                    class="fas fa-times"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="settings-tab3" class="tab-content">
            <table id="dashboardjobs" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Administrator ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Position</th>
                        <th>User Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AM104</td>
                        <td>Dela Cruz</td>
                        <td>Cardo</td>
                        <td>Dalisay</td>
                        <td>Supervising Administrative Officer</td>
                        <td>Encoder</td>
                        <td>
                            <button class="view-button" id="enable_account"
                                onclick="confirmEnableAccount()"><i class="fas fa-gear"></i></button>
                            <script>
                                function confirmEnableAccount() {
                                    Swal.fire({
                                        title: "Enable Account",
                                        text: "Are you sure you want to enable this account?",
                                        icon: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: '#d33',
                                        cancelButtonColor: '#3085d6',
                                        confirmButtonText: 'Yes, disable this account!',
                                        cancelButtonText: 'No, keep it'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // If user clicks "Yes", perform the desired action
                                            Swal.fire(
                                                'Account Successfully Enabled!',
                                                'Your action has been confirmed.',
                                                'success'
                                            );
                                            // You can add your action here, e.g., redirecting to another page or performing an AJAX request
                                        } else {
                                            Swal.fire(
                                                'Account enabling cancelled.',
                                                '',
                                                'error'
                                            )
                                        }
                                    });
                                }
                            </script>

                            <button id="myButtonprofile" class="view-user" data-modal="myModal"
                                title="View Profile"><i class="fas fa-user"></i></button>
                            <script>
                                // Disable the button
                                document.getElementById("myButtonprofile").classList.add("disabled");
                            </script>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ====================== END SETTINGS =======================-->
<div id="myModalAdmin" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="logoProfile">
            <img src="../../images/admin/profile.png" alt="Profile Image">
        </div>
        <div class="modal-text">
            <h2>Juan Dela Cruz Sample Sample</h2>
            <p>Position: Supervising Administrative Officer</p>
            <p>User Role: Super Administrator</p>
        </div>
        <div class="button-row">
            <a href="admin_view_profile.html"><button class="view-button1"><i class="fas fa-user"></i>
                    View Profile</button></a>

        </div>
    </div>
</div>
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


<div id="changeRoleAdmin" class="custom-modal">
    <div class="custom-modal-content">
        <span class="close">&times;</span>
        <form action="#" class="login">
            <div>
                <h2>Change User's Role</h2>
                <p></p>
            </div>
            <div class="field">
                <label for="userAccountType">User Role:</label>
                <select id="userAccountType">
                    <option value="Encoder">Encoder</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Manager">Super Administrator</option>
                    <!-- Add more options as needed -->
                </select>
            </div>



            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Update" id="updateButton">
            </div>


        </form>
    </div>
</div>

<script></script>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== ICONS ===============-->

      <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

            <!--=============== CSS ===============-->
            <link rel="stylesheet" href="{{asset('import/css/adminstaff/styles.css')}}">
            <link rel="stylesheet" href="{{asset('import/css/adminstaff/account.css')}}">
            <link rel="stylesheet" href="{{asset('import/css/adminstaff/dashboard.css')}}">
            <link rel="stylesheet" href="{{asset('import/css/adminstaff/admin_dashboard.css')}}">
            <link rel="stylesheet" href="{{asset('import/css/adminstaff/cards.css')}}">

      <!--=============== DATA TABLES PLUGINS ===============-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="{{ asset('import/images/pesologo.png') }}">
   </head>
<style>

</style>
   <body>


  <!--=============== HEADER ===============-->
        @include('extensions.staff_header')


       <!-- ====================== JOB POSTS =======================-->
  <div id="jobseeker" style="display: none;">
    <h2>Job Seeker</h2>
    <div class="table-container">

      <div class="tab-menu">
        <button class="tab-button active" onclick="openTab(event, 'jobseeker-tab1', 'jobseeker')">Approved</button>
        <button class="tab-button" onclick="openTab(event, 'jobseeker-tab2', 'jobseeker')">Pending</button>
    </div>
    <div id="jobseeker-tab1" class="tab-content active" style="max-height: 380px;">
      <table id="dashboardjobs" class="display" style="width:100%">
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
      <table id="dashboardjobs" class="display" style="width:100%">
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

  <div id="myModal" class="modal">
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
        <a href="admin_jobseeker_view_profile.html"><button class="view-button1"><i class="fas fa-user"></i> View Profile</button></a>
        <a href="admin_jobseeker_NSRPForm1.html"><button class="view-button1"><i class="fas fa-file"></i> NSRP Form 1</button></a>
      </div>
    </div>
  </div>
  <script>
    // Get all elements with class "view-user"
    var viewUserButtons = document.querySelectorAll(".view-button, .view-user");

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


   </body>
</html>

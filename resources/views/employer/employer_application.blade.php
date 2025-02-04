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

      <link rel="stylesheet" href="{{asset('import/css/employer/styles.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/employer/dashboard.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/employer/cards.css')}}">   <!-- STATISTICS CARDS -->
      <link rel="stylesheet" href="{{asset('import/css/employer/admin_dashboard.css')}}"> <!-- -->

   
      
      <!--=============== DATA TABLES PLUGINS ===============-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->

      <script src="../../controller/js/sweetalert.js"></script>

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/PESO LOGO NEW.png">
   </head>
<style>
 
</style>
   <body>
    
      <!-- Header and navigation content -->
      <!--=============== HEADER ===============-->
      @include('header.header')
      <!-- ====================== START DASHBOARD =======================-->
      <div class="container1">
        @include('header.sidebar')
        <div class="content">
          
          <!-- ====================== APPLICATIONS =======================-->
          <div id="applications">
            <h2>Applications</h2>
            <div class="table-container">

      
              <div class="tab-menu">
                <button class="tab-button active" onclick="openTab(event, 'applications-tab1', 'applications')">Approved</button>
                <button class="tab-button" onclick="openTab(event, 'applications-tab2', 'applications')">Pending</button>
                
            </div>
            <div id="applications-tab1" class="tab-content active">
                <table id="dashboardjobs" class="display" style="width:100%">
                  <thead>
                    <tr> 
                      <th>ID</th>
                      <th>Applicants</th>
                      <th>Job Title/Position</th>
                      <th>Date Applied</th>
                      <th>Actions</th>
                    </tr>
                    <!----
                    <tr>
                      <th>Applicants</th>
                      <th>Job Title/Position</th>
                      <th>Date Applied</th>
                      <th>Application Status</th>
                      <th>Actions</th>
                    </tr>
                    -->
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>Juan Dela Cruz</td>
                      <td>Software Engineer</td>
                      <td>February 05, 2024</td>
                      <td>Applied</td>
                      <td>
                        <button class="view-user" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button>
                        
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
               

            </div>
            <div id="applications-tab2" class="tab-content">
                <table id="dashboardjobs" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>Applicant ID</th>
                      <th>Applicants</th>
                      <th>Job Title/Position</th>
                      <th>Date Applied</th>
                      <th>Application Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0101001</td>
                      <td>Paul Santos</td>
                      <td>Software Engineer</td>
                      <td>February 06, 2024</td>
                      <td>For review</td>
                      <td>
                        <button class="view-user" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button>
                        <button class="check-button" onclick="confirmApproveEmployer()"><i class="fas fa-check"></i></button>
                        <button class="cancel-button" onclick = "confirmRejectEmployer()"><i class="fas fa-times"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>


           </div>
          </div>
          <!-- ====================== APPLICATIONS =======================-->
          <!-- The Modal -->
          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <div class="logo">
                <i class="fas fa-user fa-5x"></i>
              </div>
              <div class="modal-text">
                <h2>Juan Dela Cruz</h2>
                <p>Job Position Applied: Software Engineer</p>
                
              </div>
              <div class="button-row">
                <a href="../../view/employer/employer_view_profile.html" target = "_blank"><button class="view-button1"><i class="fas fa-user"></i> View Profile</button></a>
                <a href="../../view/admin/admin_jobseeker_NSRPForm1.html"  target = "_blank"><button class="view-button1"><i class="fas fa-info-circle"></i> NSRP Form</button></a>
                <a href="../../view/employer/resume.pdf"><button class="view-button1"  target = "_blank"><i class="fas fa-user"></i> Resume</button></a>
                <a href="../../view/employer/employer_searchjob.html" target = "_blank"><button class="view-button1"><i class="fas fa-info-circle"></i> Job Information</button></a>
              </div>
            </div>
          </div>
          

          {{-- <script>
            // JavaScript to handle page navigation
                document.querySelectorAll('.sidebar ul li a').forEach(link => {
                  link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    document.querySelectorAll('.content > div').forEach(page => {
                      page.style.display = 'none';
                    });
                    document.getElementById(targetId).style.display = 'block';
                    // Store the active section in local storage
                    localStorage.setItem("activeSection", targetId);
              });
            });
        </script> --}}

        <script>
            // Get all elements with class "view-user"
            var viewUserButtons = document.querySelectorAll(".view-user");

            // Loop through each button to attach modal functionality
            viewUserButtons.forEach(function(button) {
              // Get the modal ID from the button's data-modal attribute
              var modalId = button.dataset.modal;
              // Get the modal corresponding to the button
              var modal = document.getElementById(modalId);
              // Get the <span> element that closes the modal
              var span = modal.querySelector(".close");

              // When the user clicks the button, open the modal
              button.onclick = function() {
                modal.style.display = "block";
              }

              // When the user clicks on <span> (x), close the modal
              span.onclick = function() {
                modal.style.display = "none";
              }

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
            });
          </script>

         
        </div>
      </div>
      <!-- ====================== END DASHBOARD =======================-->
      <script src="../../controller/js/chart.js"></script>
      <script src="../../controller/js/scripts.js"></script>

    @include('header.footer')
      
  <script>
    
  </script>
  
      <!--=============== MAIN JS ===============-->
      <!--=============== MAIN JS ===============-->
      <script src="{{asset('import/js/employer/main.js')}}"></script>
      <script src = "{{asset('import/js/employer/dashboard_changetab.js')}}"></script>
      <script src="../../controller/js/employer/fakelist.js"></script>

   </body>
</html>
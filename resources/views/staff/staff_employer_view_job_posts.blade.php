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



      <!-- ====================== START DASHBOARD =======================-->
      <div class="container1">
        <div class="content">

          <!-- ====================== VIEW APPLICATIONS =======================-->
          <div id="applications" style="display: block;">
            <h2>View Employer Job Posts</h2>
            <table>
              <tr>
                <td>Employer ID</td>
                <td>Business Name</td>
                <td>Trade Name</td>
                <td>Owner Name</td>
                <td>Employer</td>
                <td>Actions</td>
              </tr>
              <tr>
                <td class="bold"><p>EM103</td>
                <td class="bold"><p>VXI Global Solutions</p></td>
                <td class="bold"><p>Tulay sa pag-unlad Inc.</p></td>
                <td class="bold"><p>Ricardo Soyti</p></td>
                <td class="bold"><p>Public</p></td>
                <td>
                  <button class="view-user" data-modal="myModalEmployerTab1" title="View Profile">
                    <i class="fas fa-user"></i>
                  </button>
                </td>
              </tr>
            </table>

              <div class="table-container" style="margin-top: 20px;">
                <table id="dashboardjobposts" class="display" style="width:100%">
                  <thead>
                      <tr>
                          <th>Job ID</th>
                          <th>Job Title/Position</th>
                          <th>Vacancies</th>
                          <th>Applicants</th>
                          <th>Hired</th>
                          <th>Status</th>
                      </tr>

                  </thead>
                  <tbody>

                     <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                       <tr>
                        <td>SE2424</td>
                        <td>Software Engineer</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>

                      </tr>
                      <tr>
                        <td>SE2425</td>
                        <td>IT Specialist</td>
                        <td>4</td>
                        <td>--</td>
                        <td>0</td>
                        <td>Posted</td>
                        <!--<td>
                            <button class="view-button" title="View Job Seeker Applications"><i class="fas fa-eye"></i></button>
                            <button class="cancel-button"><i class="fas fa-times"></i></button>-->
                        </td>
                      </tr>
                  </tbody>
              </table>
                </div>
              </div>

            <!-- ====================== END VIEW APPLICATIONS =======================-->

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
                      <a href="{{url('/admin-employer-company-details')}}"><button class="view-button1"><i class="fas fa-eye"></i> View Company</button></a>
                      <a href="#"><button class="view-button1"><i class="fas fa-info-circle"></i> More Information</button></a>
                  </div>
              </div>
          </div>

          <!-- ====================== END VIEW APPLICATIONS =======================-->

        </div>
      </div>
      <!-- ====================== END DASHBOARD =======================-->


    <footer class="footer">
        <div class="row">
        <div class="column">
            <h4>Job Seekers</h4>
            <p><a href="#">Job Search</a></p>
            <p><a href="#">Profile</a></p>
            <p><a href="#">Recommended jobs</a></p>
            <p><a href="#">Job Applications</a></p>
        </div>
        <div class="column">
            <h4>Employers</h4>
            <p><a href="#">Register for free</a></p>
            <p><a href="#">Post a Job ad</a></p>
            <p><a href="#">Customer Service</a></p>
        </div>
        <div class="column">
            <h4>About PESO Gensan</h4>
            <p><a href="#">About Us</a></p>
            <p><a href="#">Partner Services</a></p>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <p><a href="#">Help Centre</a></p>
            <p><a href="#">Contact Us</a></p>
        </div>
        </div>
        <div class="line"></div>
        <div class="row">
            <!-- Footer links and copyright text -->
            <div class="footer-links">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Safe Job Search Guide</a>
            </div>
            <div class="copyright">
              <p>Copyright &copy; 2024 PESO JobPortal</p>
            </div>
          </div>
      </footer>




      <!--=============== MAIN JS ===============-->
      <script src="../../controller/js/main.js"></script>
   </body>
</html>

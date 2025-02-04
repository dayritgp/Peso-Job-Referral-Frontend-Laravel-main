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
      <!-- <link rel="stylesheet" href="{{asset('import/css/employer/admin_dashboard.css')}}"> -->



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
      <link rel="icon" href="images/pesologo.png">
   </head>
<style>

</style>
   <body>

      <!-- Header and navigation content -->
      <!--=============== HEADER ===============-->
      @include('extensions.employer_header')
      <!-- ====================== START DASHBOARD =======================-->
      <div class="container1">
        @include('employer/sidebar')
        <div class="content">
          <div >

            <h2 style="margin-bottom: 7px;">Dashboard</h2>
            <h4 style="color:rgb(111, 111, 111)";>Hello {{Session::get('user')}}</h4>


            <div class="home-content">
              <div id="dashboard">
                <div class="overview-boxes">
                  <div class="box">
                    <div class="right-side">
                      <div class="box-topic">No. of Referred Applicants</div>
                      <div class="number" id = "numbers"> </div>
                      <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Up from yesterday</span>
                      </div>
                    </div>
                    <i class="bx bx-file cart"></i>
                  </div>
                  <div class="box">
                    <div class="right-side">
                      <div class="box-topic">No. of Posted Vacancies</div>
                      <div class="number" id = "numbers1"> </div>
                      <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Up from yesterday</span>
                      </div>
                    </div>
                    <i class="bx bxs-file cart two"></i>
                  </div>
                  <div class="box">
                    <div class="right-side">
                      <div class="box-topic">No. of Jobs Posted &nbsp;</div>

                      <br>

                      <div class="number" id = "numbers"> </div>
                      <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Up from yesterday</span>
                      </div>
                    </div>
                    <i class="bx bx-file cart three"></i>
                  </div>
                  <div class="box">
                    <div class="right-side">
                      <div class="box-topic">No. of Applicants Available</div>
                      <div class="number" id = "numbers"> </div>
                      <div class="indicator">
                        <i class="bx bx-up-arrow-alt"></i>
                        <span class="text">Up from yesterday</span>
                      </div>
                    </div>
                    <i class="bx bx-file cart four"></i>
                  </div>
                </div>
              </div>


              <div class="sales-boxes">
                <div class="recent-sales box">
                  <div class="title">Recent Referred</div>
                  <div class="sales-details">
                    <div class="details-table-wrapper">
                      <table class="details-table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Jobseeker</th>
                            <th>Position</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="#">02 Jan 2021</a></td>
                            <td><a href="#">Alex Doe</a></td>
                            <td><a href="#">Delivered</a></td>
                            <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                          </tr>
                          <!-- Add more rows as needed -->
                        </tbody>
                      </table>
                    </div>

                  </div>

                </div>
                <div class="top-sales box">
                  <div class="title">Recent Job Posts</div>
                  <div class="details-table-wrapper">
                  <table class="details-table">
                    <thead>
                      <tr>
                        <th>Position</th>
                        <th>No. of Vacancy</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a href="#">
                            <span class="position">Software Engineer</span>
                          </a>
                        </td>
                        <td class="vacancy">5</td>
                      </tr>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
           </div>
          </div>
          <!-- ====================== END DASHBOARD =======================-->

        </div>
      </div>
      <!-- ====================== END DASHBOARD =======================-->
      <script src="../../controller/js/chart.js"></script>
      <script src="../../controller/js/scripts.js"></script>
      @include('extensions.session_timeout_guard')

      <footer class="footer">
      @include('extensions.footer')
      </footer>

      <!--=============== MAIN JS ===============-->
      <!--=============== MAIN JS ===============-->
      <script src="{{asset('import/js/employer/main.js')}}"></script>
      <script src = "../../controller/js/employer/dashboard_changetab.js"></script>
      <script src="../../controller/js/employer/fakelist.js"></script>
   </body>
</html>

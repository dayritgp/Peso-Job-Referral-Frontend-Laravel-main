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
      <header class="header">
        @include('header.header')
     </header>
 
      <!-- ====================== START DASHBOARD =======================-->
      <div class="container1">
        @include('header.sidebar')

        <div class="content">
           <!-- ====================== HIRED =======================-->
           <div id="statistics">
            <h2>Statistics</h2>
            <h4 style="margin-bottom: 17px;">Performance Report</h4>
            <div class="table-container">
              <div class = "dt-container">
                <label>From</label>
                <input type = date name = "from-date" class = "dt-from">
                <label>To</label>
                <input type = date name = "until-date" class = "dt-to">
              </div>
              <br>
              <div class="charts">
               
                
                <div class="charts-card">
                  <p class="chart-title">Applicant's Age</p>
                  <div class="bar-chart"></div>
                </div>
                
                <div class="charts-card">
                  <p class="chart-title">Monthly Data Monitoring</p>
                  <div class="area-chart"></div>
                </div>

                <div class="charts-card">
                  <p class="chart-title">Demographics</p>
                  <div class="bar-chart"></div>
                </div>
      
              </div>
           </div>
          </div>
         
        </div>
      </div>
      <!-- ====================== END DASHBOARD =======================-->
      <script src="{{asset('import/js/employer/chart.js')}}"></script>
      <script src="{{asset('import/js/employer/scripts.js')}}"></script>

    @include('header.footer')
      
  <script>
    
  </script>
  
      <!--=============== MAIN JS ===============-->
      <!--=============== MAIN JS ===============-->
      <script src="{{asset('import/js/employer/main.js')}}"></script>
      <script src = "{{asset('import/js/employer/dashboard_changetab.js')}}"></script>
      <script src="../../controller/js/employer/fakelist.js"></script>
     
      <script>
        $(document).ready(function() {
        $('#dashboardjobs, #dashboardjobposts, #dashboardrefer, #dashboardhired').DataTable({
          fixedColumns: {
            start: 1,
            end: 1
          },
          dom: 'Bfrtip',
          buttons: [{
            extend: 'copyHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
          {
            extend: 'excelHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },
          {
            extend: 'pdfHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
            'colvis',
            {
              extend: 'pageLength',
            }
          ]
        });
      });
      </script>

   </body>
</html>
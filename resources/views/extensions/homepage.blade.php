<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== ICONS ===============-->

  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="{{ asset('import/css/jobseeker/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('import/css/jobseeker/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('import/css/jobseeker/format.css') }}">
  <link rel="stylesheet" href="{{ asset('import/css/jobseeker/profile.css') }}">
  <link rel="stylesheet" href="{{ asset('import/css/jobseeker/jobseeker_dashboard.css') }}">


  <!--=============== DATA TABLES PLUGINS ===============-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css  ">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>

  <title>Public Employment Service Office | PESO-Gensan</title>
  <link rel="icon" href="{{ asset('import/images/PESO LOGO NEW.png') }}">
</head>


<body>


 <!--=============== HEADER ===============-->

    <header class="header" id="header" >

        @include('extensions/jobseeker_header')

    </header>

  <!-- ====================== START DASHBOARD =======================-->
    <div class="container1">
                @yield('content')
    </div>

 <!--=============== MAIN JS ===============-->
<script src="{{ asset('import/js/main.js') }}"></script>
<script src="{{ asset('import/js/chart.js') }}"></script>
<script src="{{ asset('import/js/scripts.js') }}"></script>
<script src="{{ asset('import/js/jobseeker/fakelist.js') }}"></script>

</body>
<!--=============== FOOTER ===============-->
    <footer class="footer">

            @include('extensions.footer')
    
    </footer>

</html>
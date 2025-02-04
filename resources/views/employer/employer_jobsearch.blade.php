<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('import/css/styles.css')}}"> 
      <link rel="stylesheet" href="{{asset('import/css/employerjob.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/dashboard.css')}}">
   
      <link rel="stylesheet" href="../../assets/css/profile.css">

      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->
      
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/PESO LOGO NEW.png">
   </head>

   <body>
    
    
    <!-- Header and navigation content -->
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
           <div class="nav__data">
               <a href="../../view/jobseeker/jobseeker.html" class="nav__logo">
               <img src="../../images/PESO LOGO NEW.png" width="50px;"><h3>PESO JobPortal</h3>
              </a>
              
              <div class="nav__toggle" id="nav-toggle">
                 <i class="ri-menu-line nav__burger"></i>
                 <i class="ri-close-line nav__close"></i>
              </div>
           </div>
  
           <!--=============== NAV MENU ===============-->
           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
               <li><a href="../../view/employer/employer.html" class="nav__link">Home</a></li>
  
               <li><a href="../../view/employer/employer_jobsearch.html" class="nav__link">Job Posts</a></li>

               <li><a href="../../view/employer/employer_search_jobseeker.html" class="nav__link">Find JobSeeker</a></li>
  
               <li><a href="../../view/employer/employer_dashboard.html" class="nav__link">Dashboard</a></li>
  
              
              
                 <!--=============== DROPDOWN 2 ===============-->
                 <li class="dropdown__item">
                  <div class="nav__link">
                     User's Guide<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                  </div>
  
                  <ul class="dropdown__menu">
                   
                     <li>
                        <a href="#" class="dropdown__link">
                          <i class="ri-briefcase-line"></i> Employer
                        </a>
                     </li>
                  </ul>
               </li> 
  
                 <li><a href="#" class="nav__link">About</a></li>
                   
                 <div class="profile-box">
                  <div class="profile-info">
                    <a href="#" class="nav__link"><img src="../../images/profile.png" alt="Profile Image" class="profile-image">
                    Nurhasan<i class="ri-arrow-down-s-line dropdown__arrow"></i>   </a> 
                  </div>
                  <div class="dropdown-content">
                    <a href="../../view/employer/employer_account.html">Manage Account</a>
                    <a href="#">Change Password</a>
                    <a href="../../view/index.html">Logout</a>
                  </div>
                </div>
                
                
              </ul>
           </div>
        </nav>
     </header>
  
     
         <!-- Category Start -->
         <div id="jobs" class="container" style="padding-top: 40px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">List of Jobs you've posted</h1>
            <h3><center>Search by Position Title, Employer Name, Work Location, Education Level, or Course, etc.</center></h3><br>
            <p id = "demo"></p>
        </div>
        
        
        <div class="tablemax">
        <table class="job-table" id="job-table">
         <thead>
             <tr>
                 <th>Company Logo</th>
                 <th>Job Details</th>
             </tr>
         </thead>
         <tbody>
            
         </tbody>
     </table>
     
   </div>
   <div class="spacing"></div>
     
   
     
        
        
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
      
      <script src="{{asset('import/js/main.js')}}"></script>
      <script src="../../controller/js/employer/fakelist - jobposted.js"></script>
      
     
      <script>
         // JavaScript to handle page navigation
         document.querySelectorAll('.sidebar ul li a').forEach(link => {
             link.addEventListener('click', function(event) {
                 event.preventDefault();
                 const targetId = this.getAttribute('href').substring(1);
                 document.querySelectorAll('.content > div').forEach(page => {
                     page.style.display = 'none';
                 });
                 document.getElementById(targetId).style.display = 'block';
             });
         });
     </script>
   <script>
    $(document).ready(function() {
      $('#dashboardjobs' &&'#job-table').DataTable({
        fixedColumns: {
        start: 1,
        end: 1
    },
    
        dom: 'Bfrtip',
        buttons: [
          
         
          {
            extend: 'pageLength',
          },


        ]
      });
    });
  </script>
   </body>
</html>
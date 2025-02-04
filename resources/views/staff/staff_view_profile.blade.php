<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('import/css/admin/styles.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/admin/profile.css')}}">


      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="images/pesologo.png">
   </head>

   <body>


      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="#" class="nav__logo">
                    <img src="../../images/pesologo.png"  width="50px;"><h3>PESO JobPortal</h3>
               </a>

               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
               <li><a href="{{url('/admin')}}" class="nav__link">Home</a></li>

               <li class="dropdown__item">
                 <div class="nav__link">
                    View <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                 </div>

                 <ul class="dropdown__menu">
                    <li>
                       <a href="{{url('/admin-jobseeker-jobsearch')}}" class="dropdown__link">
                          <i class="ri-briefcase-line"></i> Jobs
                       </a>
                    </li>

                    <li>
                       <a href="{{url('/admin-jobseeker-company')}}" class="dropdown__link">
                          <i class="ri-building-4-fill"></i> Company
                       </a>
                     </li>
                 </ul>
              </li>

               <li><a href="{{url('/admin-dashboard')}}" class="nav__link">Dashboard</a></li>

               <li><a href="#" class="nav__link">About</a></li>

               <li class="dropdown__item">
                  <div class="nav__link">
                     <div class="profile-info">
                        <img src="images/profile.png" alt="Profile Image" class="profile-image">


                     Nurhasan <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                  </div>

                  <ul class="dropdown__menu">
                     <li>
                        <a href="{{url('/admin-view-profile')}}" class="dropdown__link">
                         <i class="ri-account-circle-line"></i> View Profile
                        </a>
                     </li>

                      <li>
                        <a href="{{url('/admin-account')}}" class="dropdown__link">
                         <i class="ri-lock-2-line"></i> Manage&nbsp;Account
                        </a>
                      </li>
                      <li>
                        <a href="{{url('/index')}}" class="dropdown__link">
                           <i class="ri-logout-box-r-line"></i> Logout
                        </a>
                      </li>
                  </ul>
               </li>
               </ul>
            </div>
         </nav>
      </header>

      <div style="max-width: 1200px; margin: 0 auto;">
         <h2>Administrator Profile Details</h2>
      <div class="prof-container">
         <div class="box box1">
           <div class="profile-details">
             <img src="images/profile.png" alt="Profile Image">
             <h2>Juan Dela Cruz</h2>
             <h3>Supervising Administrative Officer</h3>
             <p class="email">Email: <a href="mailto:administrator@gmail.com" class="link">administrator@gmail.com</a></p>
             <p class="phone">Phone: <a href="tel:+639274427375" class="link">(+63) 927 442 7375</a></p>
            </div>
         </div>
         <div class="box2-container">
           <div class="box box2">
               <h3>Personal Information</h3>
               <table class="custom-table">
                  <tr>
                     <td>Last Name:</td>
                     <td>Dela Cruz</td>
                  </tr>
                  <tr>
                  <td>First Name:</td>
                  <td>Juan</td>
                  </tr>
                  <tr>
                     <td>Middle Name:</td>
                     <td>Cardo</td>
                  </tr>
                  <tr>
                  <td>Suffix:</td>
                  <td>--</td>
                  </tr>
                  <tr>
                  <td>Civil Status:</td>
                  <td>Single</td>
                  </tr>

               </table>


           </div>

         </div>
       </div>
      </div>




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
      <script src="../../controller/admin/admin_view_profile.js"></script>
   </body>
</html>

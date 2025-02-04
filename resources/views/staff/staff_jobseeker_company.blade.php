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
      <link rel="stylesheet" href="{{asset('import/css/jobseeker_dashboard.css')}}">
      
      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/admin/PESO LOGO NEW.png">
   </head>

   <body>
    
      <!--=============== HEADER ===============-->
      <header class="header">
        <nav class="nav container">
           <div class="nav__data">
              <a href="#" class="nav__logo">
                   <img src="../../images/admin/PESO LOGO NEW.png"  width="50px;"><h3>PESO JobPortal</h3>
              </a>
              
              <div class="nav__toggle" id="nav-toggle">
                 <i class="ri-menu-line nav__burger"></i>
                 <i class="ri-close-line nav__close"></i>
              </div>
           </div>

           <!--=============== NAV MENU ===============-->
           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
              <li><a href="admin.html" class="nav__link">Home</a></li>

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
                       <img src="../../images/admin/profile.png" alt="Profile Image" class="profile-image">
                      
                     
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
     
      
         <!-- Category Start -->
         <div id="jobs" class="container" style="padding-top: 40px;max-width: 850px;">
          <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="text-align: left;">Find great places to work</h1>
          <h3 style="text-align: left; line-height: 50px;font-size: 20px;  font-weight: 100;">Discover Your Next Career Journey</h3>
          <br>
      </div>
      <div class="jobsearch_container">
          <div class="search_container">
              <input type="text" placeholder="Company name or job title...">
              <button type="submit">Find Companies</button>
          </div>
          <div class="title">
            <h2>Popular Companies</h2>
          </div>

          
          <div class="container_company" id="company_container">
            <!-- Job boxes will be generated dynamically here -->
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
   </body>
</html>
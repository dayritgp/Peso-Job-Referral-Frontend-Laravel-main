<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
 
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
     
      
    
     <div class="search-background">
        <div class="search-container">
          <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Job title or keywords...">
        </div>
        <div class="search-box">
          <i class='fas fa-map-marker-alt'></i>
            <input type="text" placeholder="City, state, zip code,or remote ">
        </div>
        <div class="searchbtn" style="margin-left: 5px;">
          <button type="button">SEARCH</button>
        </div>
        </div>
      </div>

      <div class="dropdown-container">
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown1')">Date posted  <i class="fas fa-caret-down"></i></button>
        <div id="dropdown1" class="dropdown-sort">
          <a href="#">Today</a>
          <a href="#">Yesterday</a>
          <a href="#">Last 7 days</a>
        </div>
      </div>
    
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown2')">Remote  <i class="fas fa-caret-down"></i></button>
        <div id="dropdown2" class="dropdown-sort">
          <a href="#">Yes</a>
          <a href="#">No</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown3')">
          Job type <i class="fas fa-caret-down icon"></i>
        </button>
        <div id="dropdown3" class="dropdown-sort">
          <a href="#">Full-time</a>
          <a href="#">Part-time</a>
          <a href="#">Contract</a>
          <a href="#">Internship</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown4')">
          Location <i class="fas fa-caret-down icon"></i>
        </button>
        <div id="dropdown4" class="dropdown-sort">
          <a href="#">Manila</a>
          <a href="#">Cebu</a>
          <a href="#">Davao</a>
          <!-- Add more locations as needed -->
        </div>
      </div>
    
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown5')">
          Company <i class="fas fa-caret-down icon"></i>
        </button>
        <div id="dropdown5" class="dropdown-sort">
          <a href="#">ABC Tech Inc.</a>
          <a href="#">XYZ Corporation</a>
          <!-- Add more company names as needed -->
        </div>
      </div>
    
      <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown6')">
          Job language <i class="fas fa-caret-down icon"></i>
        </button>
        <div id="dropdown6" class="dropdown-sort">
          <a href="#">English</a>
          <a href="#">Spanish</a>
          <a href="#">French</a>
          <!-- Add more job languages as needed -->
        </div>
      </div>
      </div>

         <!-- Category Start -->
         <div id="jobs" class="container" style="padding-top: 40px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Find Jobs Here</h1>
            <h3><center>You may search by position title, employer name, work location, education level or course, etc.</center></h3><br>
        </div>
        <div class="jobsearch_container">
          <table id="dashboardjobs" class="display" style="width:100%">
            <thead>
                <tr> 
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake list entries will be generated dynamically here -->
            </tbody>
        </table>
            
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
      <script src="../../controller/js/admin/fakejoblist.js"></script>
   </body>
</html>
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
      <link rel="icon" href="images/PESO LOGO NEW.png"> 
   </head>
   
   <body>
    
      <!--=============== HEADER ===============-->
      <header class="header">
        <nav class="nav container">
           <div class="nav__data">
              <a href="#" class="nav__logo">
                   <img src="resources/views/images/PESO LOGO NEW.png"  width="50px;"><h3>PESO JobPortal</h3>
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
                      <a href="{{ url('/admin-jobseeker-jobsearch') }}" class="dropdown__link">
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
      
    
         <!-- Category Start -->
            <div class="container" style="padding-top: 30px;">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Special job categories</h1>
                <h3><center>We have job vacancies for various types of jobseekers</center></h3>
            </div>
        <!-- Category End -->

            <div class="containercard">
            <div class="card">
                <img src="images/pwd.jpg" alt="Image 1">
                <div class="card-content">
                    <h3>Differently abled/PWD</h3>
                    <p>Description of card 1.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/displaced.png" alt="Image 2">
                <div class="card-content">
                    <h3>Displaced Workers</h3>
                     <p>Description of card 2.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/highschool.png" alt="Image 3">
                <div class="card-content">
                    <h3>High School Graduates</h3>
                    <p>Description of card 3.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/government.png" alt="Image 4">
                <div class="card-content">
                    <h3>Government Jobs</h3>
                    <p>Description of card 4.</p>
                </div>
            </div>
            </div>


            
                
        
         <!-- Category Start -->
         <div id="jobs" class="container" style="padding-top: 40px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
            <h3><center>We have job vacancies for various types of jobseekers</h3><br>
        </div>
        
        <table id="dashboardjobs" class="display" style="width:100%">
            <thead>
                <tr> 
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="jobPosting">
                <!-- Fake list entries will be generated dynamically here -->
            </tbody>
        </table>
        
        

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
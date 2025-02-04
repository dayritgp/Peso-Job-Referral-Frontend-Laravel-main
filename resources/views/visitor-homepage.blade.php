<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('import/css/employer/styles.css') }}">

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="{{ asset('import/images/PESO LO NEW.png') }}">
   </head>

   <body>
    

    <!-- Header and navigation content -->
      <!--=============== HEADER ===============-->
      <header class="header" id="header">
        <nav class="nav container">
           <div class="nav__data">
               <a href="index.html" class="nav__logo">

                <img src="{{ asset('import/images/Referral_Logo.png') }}"  width="200px;">

              </a>
              
              <div class="nav__toggle" id="nav-toggle">
                 <i class="ri-menu-line nav__burger"></i>
                 <i class="ri-close-line nav__close"></i>
              </div>
           </div>

           <!--=============== NAV MENU ===============-->
           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                 <li><a href="view/jobseeker/visitor_searchjobs.html" class="nav__link">Job Search</a></li>

                 

                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                 <div class="nav__link">
                    User's Guide<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                 </div>

                 <ul class="dropdown__menu">
                    <li>
                       <a href="#" class="dropdown__link">
                          <i class="ri-user-line"></i> Job&nbsp;Seekers
                       </a>                          
                    </li>

                    <li>
                       <a href="#" class="dropdown__link">
                         <i class="ri-briefcase-line"></i> Employers
                       </a>
                    </li>
                 </ul>
              </li> 

              <li><a href="login.html" class="nav__link">Accounts</a></li>
                 
                
                 <li><a href="#" class="nav__link">About</a></li>
                   <!-- Buttons added here -->
               <li><a href="login.html" target="_blank"><button class="nav__button">LOGIN</button></a></li>
              </ul>
           </div>
        </nav>
     </header>
 
      <div class="search-background">
      <div class="search-container">
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Job title, keywords, or company...">
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
                <img src="{{ asset('import/images/pwd.jpg')}}" alt="Image 1">
                <div class="card-content">
                    <h3>Differently abled/PWD</h3>
                    <p>Description of card 1.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('import/images/displaced.png') }}" alt="Image 2">
                <div class="card-content">
                    <h3>Displaced Workers</h3>
                    <p>Description of card 2.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('import/images/highschool.png') }}" alt="Image 3">
                <div class="card-content">
                    <h3>High School Graduates</h3>
                    <p>Description of card 3.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('import/images/government.png') }}" alt="Image 4">
                <div class="card-content">
                    <h3>Government Jobs</h3>
                    <p>Description of card 4.</p>
                </div>
            </div>
            </div>
        
             <!-- Category Start -->
             <div class="container" style="padding-top: 30px;">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Quick Stats</h1>
                <h3><center>PESO-Gensan is FREE for all and accessible 24/7</center></h3>
            </div>
        <!-- Category End -->
        <div class="quick-stats">
            <div class="stat">
                <i class="fas fa-user"></i>
                <div class="stat-value" data-count="5331">0</div>
                <div class="stat-label">Jobseekers</div>
            </div>
            <div class="stat">
                <i class="fas fa-building"></i>
                <div class="stat-value" data-count="2034">0</div>
                <div class="stat-label">Employers</div>
            </div>
            <div class="stat">
                <i class="fas fa-briefcase"></i>
                <div class="stat-value" data-count="4321">0</div>
                <div class="stat-label">Job Vacancies</div>
            </div>
            <div class="stat">
                <i class="fas fa-user-check"></i>
                <div class="stat-value" data-count="3291">0</div>
                <div class="stat-label">Jobseekers Hired</div>
            </div>
        </div>
        
        
        <!-- Category Start -->
        <div id="jobs" class="container" style="padding-top: 60px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
            <h3><center>We have job vacancies for various types of jobseekers</h3><br>
        </div>
    <!-- Category End -->
    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                
            </tr>
            
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="job-row">
                    <div class="job-box">
                        <div class="job-cell job-details">
                            <a href="#"><div class="job-title">Website Builder</div></a>
                            <div class="company">ABC Tech Inc.</div>
                            <div class="location"> <i class="fas fa-map-marker-alt"></i> Manila, Philippines</div>
                            <div class="salary"><i class="fas fa-money-bill-alt"></i> ₱80,000 - ₱100,000 per year</div>
                            <div class="description">Expert Web Developer Needed for Swiss Interior Design Company Website Description: We are a prestigious Swiss interior design company…</div>
                            <div class="buttons-container">
                                <a href="#"><button class="job-button">HTML</button></a>
                                <a href="#"><button class="job-button">HTML5</button></a>
                                <a href="#"><button class="job-button">Adobe Photoshop</button></a>
                                <a href="#"><button class="job-button">PHP</button></a>
                                <a href="#"><button class="job-button">Web Development</button></a>
                            </div>
                            
                        </div>
                        <div class="job-cell job-apply">
                            <a href="#"><button class="apply-button">See More</button></a>
                        </div>
                    </div>
                
                    <div class="job-box">
                        <div class="job-cell job-details">
                            <a href="../../view/jobseeker/visitor_searchjobs.html" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
                            <div class="company">ABC Tech Inc.</div>
                            <div class="location"> <i class="fas fa-map-marker-alt"></i> Cavite, Philippines</div>
                            <div class="salary"><i class="fas fa-money-bill-alt"></i> ₱80,000 - ₱100,000 per year</div>
                            <div class="description">Statement of Work: I am looking to build a fully integrated website solution that will allow users to shop for consulting services.  The site will allow the user to create an LLC amongst other services.…</div>
                            <div class="buttons-container">
                                <a href="#"><button class="job-button">HTML</button></a>
                                <a href="#"><button class="job-button">HTML5</button></a>
                                <a href="#"><button class="job-button">Adobe Photoshop</button></a>
                               
                            </div>
                        </div>
                        <div class="job-cell job-apply">
                            <a href="../../view/visitor_searchjobs.html" target="_blank"><button class="apply-button">See More</button></a>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <!-- Repeat the same structure for the second column -->
            </td>
        </tr>
        
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
              <p>Copyright &copy; 2025 PESO JobPortal</p>
            </div>
          </div>
      </footer>
      
  
  
      <!--=============== MAIN JS ===============-->
      <script src="../../controller/js/main.js"></script>
   </body>
</html>
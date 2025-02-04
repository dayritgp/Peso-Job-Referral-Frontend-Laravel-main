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


    <div class="padding-container">
        <h2>Job Details</h2>
        <div class="padding-content">
            <a href="{{url('/admin-employer-company-details')}}"><div class="image-container">
                <img src="../../images/admin/PESO LOGO NEW.png" alt="Image" class="left-image">
            </div></a>
            <div class="job-info">
               <a href="{{url('/admin-employer-company-details')}}"><h3>Build responsive Wix site with AI integrations
               <button class="btn">4 Slots Left</button></h3></a>
               <div class="company">TULAY SA PAG-UNLAD INC. (A MICROFINANCE NGO) FORMERLY: TSPI DEVELOPMENT CORP.</div>
               <div class="location-salary">
                   <div class="location"><i class="fas fa-map-marker-alt"></i> Manila, Philippines</div>
                   <div class="salary1"><i class="fas fa-money-bill-alt"></i> ₱80,000 - ₱100,000 per year</div>
                   <div class="attainment"><i class="fas fa-graduation-cap"></i> College Graduate</div>
               </div>
           </div>
            <div class="button-container">
                <a href="{{url('/admin-employer-company-details')}}"><button class="apply-button">View</button></a>
            </div>
        </div>
        <div class="row-padding">
            <div class="column-padding">
               <h3>Job Position</h3>
               <div class="bullet-list">
                  <ul>
                    <li>Software Engineer</li>
                    
                  </ul>
                </div>

                <h3>Job Description</h3>
                <p>Statement of Work: I am looking to build a fully integrated website solution that will allow users to shop for consulting services. The site will allow the user to create an LLC amongst other services. I am looking for a mentor in the best options to use. The site must include AI technology that is seamless to the end-user. The site must… </p>
                <div class="bullet-list">
                    <ul>
                      <li>Allow user to purchase our service to create their business entity (LLC, S Corp, C Corp)</li>
                      <li>Create an operating agreement for the user</li>
                      <li>Create a custom AI logo with custom colors</li>
                      <li>Create an e-business card with the ability to connect with print vendors to print business cards</li>
                      <li>Allow user to search virtual mail center services in their local area</li>
                    </ul>
                  </div>
                  <p>
                    Must be fully integratable with a CRM back office solution. Possible vendors:
                  </p>
                  <div class="bullet-list">
                    <ul>
                      <li>ClaritySoft</li>
                      <li>Netsuite</li>
                      <li> SalesForce</li>
                    </ul>
                  </div>

                  <h3>Qualifications/Requirements</h3>
                  <div class="bullet-list">
                    <ul>
                      <li>Graduate of bachelor's degree in Computer Science, Computer Programming, Computer Engineering or equivalent.</li>
                      <li>With atleast 2-year experience in programming or equivalent</li>
                      <li>Must be results and controls-oriented, keen to details</li>
                      <li>With good analytical and problem-solving skills</li>
                      <li>Excellent in communication skills both verbal and written</li>
                      <li>Knowledgeable in software algorithm design, software performance tuning, software debugging, software development fundamentals, software documentation, software testing.</li>
                      <li>With advance competence in any of the following programming languages (i.e., Clanguage and Fox Pro OR Visual Basic.Net, Visual</li>
                      <li>Basic 6, SQL Server 2000 Database Design, Crystal Report, ASP, .Net framework, etc.)</li>
                      <li>With good customer service orientation</li>
                    </ul>
                  </div>

                  <h3>Work location</h3>
                  <p>CITY OF MAKATI, NCR, FOURTH DISTRICT</p><br>

                  <h3>Remarks</h3>
                  <p>No additional remarks</p><br>

                  <div class="button-container" style="text-align: center;">
                     <a href="{{url('/admin-employer-company-details')}}"><button class="apply-button">View</button></a>
                </div>
                
            </div>
            
            <div class="column-padding2">
                <a href="{{url('/admin-employer-company-details')}}"><h3>About the Company</h3></a>
                <p>A Christian Microfinance NGO registered in SEC last October 26, 1981. We are offering different financial programs for small and medium enterprises. We currently have 121 branches covering Luzon's Northern and Southern parts.</p><br>
                <h3>Industry</h3>
                <p>FINANCIAL INTERMEDIATION</p><br>
                <h3>Employment size</h3>
                <p>200 and over (Large)</p><br>
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
   </body>
</html>
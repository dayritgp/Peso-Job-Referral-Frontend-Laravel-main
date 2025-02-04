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
      <link rel="stylesheet" href="{{asset('import/css/account.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/jobseeker_dashboard.css')}}">
      
      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/PESO LOGO NEW.png">
   </head>

   <body>

      
      <!--=============== HEADER ===============-->
      <header class="header">
        <nav class="nav container">
           <div class="nav__data">
              <a href="#" class="nav__logo">
                   <img src="../../images/PESO LOGO NEW.png"  width="50px;"><h3>PESO JobPortal</h3> 
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
                      <a href="admin_jobseeker_jobsearch.html" class="dropdown__link">
                         <i class="ri-briefcase-line"></i> Jobs
                      </a>                          
                   </li>

                   <li>
                      <a href="admin_jobseeker_company.html" class="dropdown__link">
                         <i class="ri-building-4-fill"></i> Company
                      </a>
                    </li>
                </ul>
             </li>

              <li><a href="admin_dashboard.html" class="nav__link">Dashboard</a></li>
            
              <li><a href="#" class="nav__link">About</a></li>

              <li class="dropdown__item">
                 <div class="nav__link">
                    <div class="profile-info">
                       <img src="../../images/profile.png" alt="Profile Image" class="profile-image">
                      
                     
                    Nurhasan <i class="ri-arrow-down-s-line dropdown__arrow"></i></div>
                 </div>
 
                 <ul class="dropdown__menu">
                    <li>
                       <a href="admin_view_profile.html" class="dropdown__link">
                        <i class="ri-account-circle-line"></i> View Profile
                       </a>                          
                    </li>
  
                     <li>
                       <a href="admin_account.html" class="dropdown__link">
                        <i class="ri-lock-2-line"></i> Manage&nbsp;Account
                       </a>
                     </li>
                     <li>
                       <a href="index.html" class="dropdown__link">
                          <i class="ri-logout-box-r-line"></i> Logout
                       </a>
                     </li>
                 </ul>
              </li>
              </ul>
           </div>
        </nav>
     </header>
    
    <div class="wrapper">
        <div class="title-text">

        </div>
        <div class="form-container">
          <div class="form-inner">
            <form action="#" class="login">
              <div>
                <h2>Manage your account</h2>
                <p></p>
              </div>
              <div class="field">
                <label for="userAccountType">User Account Type:</label>
                <input type="text" id="userAccountType" value="Administrator">
            </div>
            
            <div class="field">
                <label for="emailAddress">Email Address:</label>
                <input type="text" id="emailAddress" value="administrator@gmail.com" readonly>
            </div>
            
            <div class="field password-field">
                <label for="passwordField1">Password:</label>
                <input type="password" id="passwordField1" placeholder="Password" required>
            </div>
            
            
            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Update">
              </div>
              <a href="#modal" class="modal-text">Change your account password</a>
              <div id="modal" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <div>
                    <h2>Change your account password</h2>
                    <p></p>
                  </div><br>
                  <div class="field password-field">
                    <input type="password" id="passwordField1" placeholder="Old Password" required>
                  </div>
                  <div class="field password-field">
                    <input type="password" id="passwordField1" placeholder="New Password" required>
                  </div>
                  <div class="field">
                    <div class="btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Save">
                    </div>
                </div>
                <div class="field">
                    <div class="btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Cancel">
                    </div>
                </div>
                
                </div>
              </div>
              
            </form>

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
      <script src="../../controller/js/admin_account.js"></script>
   </body>
</html>
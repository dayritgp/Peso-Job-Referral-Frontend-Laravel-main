<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
      <!--=============== CSS ===============-->
      
      <link rel="stylesheet" href="{{asset('import/css/account.css')}}">
      

      <link rel="stylesheet" href="{{asset('import/css/styles.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/dashboard.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/profile.css')}}">
   
      
      
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
                    <a href="../../view/employer/employer_register.html" target = "_blank">Company Profile</a>
                    <a href="../../view/employer/employer_account.html">Manage Account</a>
                    <a href="#">Change Password</a>
                    <a href="../../view/index.html">Logout</a>
                  </div>
                </div>
                
                
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
                <input type="text" id="userAccountType" placeholder="User Account Type" required>
            </div>
            
            <div class="field">
                <label for="emailAddress">Email Address:</label>
                <input type="text" id="emailAddress" placeholder="Email Address" required>
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
      <script>
        document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('modal');
        var link = document.querySelector('.modal-text');
        var closeBtn = document.querySelector('.close');

      // Open modal when the link is clicked
        link.addEventListener('click', function() {
          modal.style.display = 'block';
          document.body.classList.add('modal-open'); // Add class to body to disable scrolling
        });

        // Close modal when the close button is clicked
        closeBtn.addEventListener('click', function() {
          modal.style.display = 'none';
          document.body.classList.remove('modal-open'); // Remove class to enable scrolling
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function(event) {
          if (event.target == modal) {
            modal.style.display = 'none';
            document.body.classList.remove('modal-open'); // Remove class to enable scrolling
          }
        });
    });

      </script>
   </body>
</html>
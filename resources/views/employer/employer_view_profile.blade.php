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
      <link rel="stylesheet" href="{{asset('import/css/dashboard.css')}}">

      <link rel="stylesheet" href="{{asset('import/css/profile.css')}}">

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href='image/pesologo.png'>
   </head>

   <body>



    <!-- Header and navigation content -->
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
         <div class="nav__data">
             <a href="jobseeker.html" class="nav__logo">
             <img src="images/pesologo.png" width="50px;"><h3>PESO JobPortal</h3>
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

             <li><a href="{{url('employer/employer_jobsearch')}}" class="nav__link">Job Posts</a></li>

             <li><a href="{{url('employer/employer_jobseeker')}}" class="nav__link">Find JobSeeker</a></li>

             <li><a href="{{url('employer/employer_dashboard')}}" class="nav__link">Dashboard</a></li>



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
                  <a href="#" class="nav__link"><img src="images/profile.png" alt="Profile Image" class="profile-image">
                  Nurhasan<i class="ri-arrow-down-s-line dropdown__arrow"></i>   </a>
                </div>
                <div class="dropdown-content">
                  <a href="../../view/employer/employer_account.html">Manage Account</a>
                  <a href="#">Change Password</a>
                  <a href="{{url('init_logout')}}">Logout</a>
                </div>
              </div>


            </ul>
         </div>
      </nav>
   </header>

      <div style="max-width: 1200px; margin: 0 auto;">
         <h2>Profile Details</h2>
      <div class="prof-container">
         <div class="box box1">
           <div class="profile-details">
             <img src="../../images/profile.png" alt="Profile Image">
             <h2>Juan Dela Cruz</h2>
             <h3>Full Stack Web Developer</h3>
             <p class="email">Email: <a href="mailto:juandelacruz@gmail.com" class="link">juandelacruz@gmail.com</a></p>
             <p class="phone">Phone: <a href="tel:+639274427375" class="link">(+63) 927 442 7375</a></p>
           </div>
           <div class="nsrp-container">
           <a href="../../view/jobseeker/NSRPForm1.html"> <button class="nsrp-button">View NSRP Form</button></a>
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
                     <td>Dela Cruz</td>
                  </tr>
                  <tr>
                  <td>Suffix:</td>
                  <td>--</td>
                  </tr>
                  <tr>
                  <td>Sex:</td>
                  <td>Male</td>
                  </tr>
                  <tr>
                     <td>Religion</td>
                     <td>Roman Catholic</td>
                  </tr>
                  <tr>
                  <td>Date of Birth:</td>
                  <td>12/12/2003</td>
                  </tr>
                  <tr>
                     <td>Place of Birth:</td>
                     <td>General Santos City</td>
                  </tr>
                  <tr>
                     <td>Present Address:</td>
                     <td>Eusebio Bulaong Ave., General Santos</td>
                  </tr>
                  <tr>
                     <td>Civil Status:</td>
                     <td>Single</td>
                  </tr>
               </table>

             <button class="view-more-btn" onclick="toggleDetails()">View More <i class="fas fa-chevron-down"></i></button>
             <div class="additional-details" style="display: none;">
                 <h3>Additional Details</h3>
                 <table class="custom-table">
                    <tr>
                       <td>TIN #:</td>
                       <td>124-4353-453</td>
                    </tr>
                    <tr>
                    <td>GSIS/SSS ID No.:</td>
                    <td>3543-5433-32443</td>
                    </tr>
                    <tr>
                       <td>PAG-IBIG No.:</td>
                       <td>325-542-6547-4</td>
                    </tr>
                    <tr>
                    <td>PhilHealth No.:</td>
                    <td>214-456-354-345</td>
                    </tr>
                    <tr>
                    <td>Height:</td>
                    <td>173cm</td>
                    </tr>
                    <tr>
                       <td>Weight:</td>
                       <td>65kg.</td>
                    </tr>
                    <tr>
                    <td>Disability:</td>
                    <td>--</td>
                    </tr>
                    <tr>
                       <td>Employment Status Type:</td>
                       <td>Unemployed</td>
                    </tr>
                    <tr>
                       <td>Preferred Occupation:</td>
                       <td>
                          <ul class="bullet-list">
                             <li>Programmer</li>
                             <li>Web Developer</li>
                          </ul>
                       </td>
                    </tr>
                    <tr>
                       <td>Preferred Work Location:</td>
                       <td>
                          <ul class="bullet-list">
                             <li>General Santos</li>
                             <li>Sarangani</li>
                          </ul>
                       </td>
                    </tr>
                 </table>
             </div>
           </div>
           <div class="box box2">
            <h3>Skills</h3>
            <div class="button-container">
               <button class="unclickable-button">Html</button>
               <button class="unclickable-button">Css</button>
               <button class="unclickable-button">JavaScript</button>
               <button class="unclickable-button">PHP Laravel</button>
               <button class="unclickable-button">Python</button>
           </div>
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
      <script src="{{asset('import/js/main.js')}}"></script>
      <script>
         document.addEventListener("DOMContentLoaded", function() {
               var viewMoreBtn = document.querySelector(".view-more-btn");
               var additionalDetails = document.querySelector(".additional-details");

               viewMoreBtn.addEventListener("click", function() {
                  if (additionalDetails.style.display === "none") {
                        additionalDetails.style.display = "block";
                        viewMoreBtn.textContent = "View Less";
                  } else {
                        additionalDetails.style.display = "none";
                        viewMoreBtn.textContent = "View More";
                  }
               });
         });
      </script>

   </body>
</html>

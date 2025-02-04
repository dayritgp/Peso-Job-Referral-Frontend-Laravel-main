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
      <link rel="icon" href="../../images/admin/pesologo.png">
   </head>

   <body>


      <!--=============== HEADER ===============-->
      <header class="header">
        <nav class="nav container">
           <div class="nav__data">
              <a href="#" class="nav__logo">
                   <img src="../../images/admin/pesologo.png"  width="50px;"><h3>PESO JobPortal</h3>
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

    <div class="padding-container">
        <h2>Company Details</h2>
        <div class="padding-content">
            <div class="image-container">
                <img src="../../images/admin/apple.png" alt="Image" class="left-image">
            </div>
            <div class="job-info">
               <h3>VXI Global Solutions</h3>
               <div class="company">TULAY SA PAG-UNLAD INC. (A MICROFINANCE NGO) FORMERLY: TSPI DEVELOPMENT CORP.</div>
              <div class="location-salary">
                   <div class="location"><i class="fas fa-map-marker-alt"></i> Manila, Philippines</div>
               </div>
           </div>
            <!--<div class="button-container">
                <button class="apply-button" style="width: 120px;">Follow</button>
            </div>-->
        </div>
        <div class="row-padding">
            <div class="column-padding">
                <p>VXI Global Solutions is a BPO leader in customer service, customer experience, and digital solutions. Founded in 1998, the company has over 42,000 employees in more than 40+ locations in North America, Asia, Europe, the Middle East and Africa, and the Caribbean. We deliver omni-channel and multilingual support, software development, quality assurance, CX advisory, and automation & process excellence to the world’s most-respected brands.</p>

                <p>We are a trusted customer experience and contact center partner for the world’s leading brands. At VXI, we pride ourselves in helping our partners develop technologies and customer care services that enable them to engage with their customers in new ways that keep them at the forefront of their markets and ahead of the competition. We leverage our deep understanding of our clients’ challenges and opportunities, and we use our integrated technology to design and tailor connections between brands and customers, resulting in custom solutions that empower our clients to respond with agility to swiftly changing market trends and ever-increasing customer demands. Headquartered in Los Angeles and with over 40,000 employees worldwide, our integrated service centers support all customer engagements in multiple languages in the United States, Philippines, Guatemala, Jamaica, and China. Our innovative solutions and professional teams, along with our passion for operational execution, enable our clients to produce the business outcomes that matter most – increased revenue, profitability, and satisfied customers. </p>
            </div>

            <div class="column-padding2">
              <h3>CEO</h3>
              <p>David Zhou</p><br>
              <h3>Industry</h3>
              <p>Information Technology Support Services</p><br>
              <h3>Revenue</h3>
              <p>P100 million to P500 million</p><br>
            </div>
        </div>
            <!-- Category Start -->
            <div id="jobs" class="container" style="padding-top: 40px;">
              <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">List of Jobs Available</h1>
          </div>
        <div class="jobsearch_container">
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
                                  </div>

                              </div>
                              <div class="job-cell job-apply">
                                  <a href="#"><button class="apply-button">See More</button></a>
                              </div>
                          </div>

                          <div class="job-box">
                              <div class="job-cell job-details">
                                  <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                  <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                              </div>
                          </div>
                      </div>
                  </td>
                  <td>
                      <!-- Repeat the same structure for the second column -->
                  </td>
              </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Repeat the same structure for the second column -->
                </td>
            </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Repeat the same structure for the second column -->
                </td>
            </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Repeat the same structure for the second column -->
                </td>
            </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Repeat the same structure for the second column -->
                </td>
            </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <!-- Repeat the same structure for the second column -->
                </td>
            </tr>
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
                                </div>

                            </div>
                            <div class="job-cell job-apply">
                                <a href="#"><button class="apply-button">See More</button></a>
                            </div>
                        </div>

                        <div class="job-box">
                            <div class="job-cell job-details">
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><div class="job-title">Build responsive Wix site with AI integrations</div></a>
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
                                <a href="{{url('/admin-jobseeker-jobsearch')}}" target="_blank"><button class="apply-button">See More</button></a>
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

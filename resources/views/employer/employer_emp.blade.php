<html lang="en"><head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== ICONS ===============-->
    
      <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
     
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('import/css/styles.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/dashboard.css')}}">
      
      <!--=============== DATA TABLES PLUGINS ===============-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    
      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/PESO LOGO NEW.png">
   <style>
 
</style></head>

<body>
    
    
    <!-- Header and navigation content -->
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
         <div class="nav__data">
             <a href="../../view/jobseeker/jobseeker.html" class="nav__logo">
             <img src="../../images/PESO LOGO NEW.png" width="50px;"><h3>PESO JobPortal</h3>
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
                  <a href="../../view/employer/employer_account.html">Manage Account</a>
                  <a href="#">Change Password</a>
                  <a href="../../view/index.html">Logout</a>
                </div>
              </div>
              
              
            </ul>
         </div>
      </nav>
   </header>

    <!-- ====================== START DASHBOARD =======================-->
    <div class="container1">
      <div class="sidebar">
        <h2>Employer</h2>
        <ul>
          <li><a href="#dashboard"><i class='bx bx-grid-alt'></i>&nbsp;Dashboard</a></li>
           
          <li><a href="#applications"><i class='bx bx-user-plus'></i>&nbsp;Applications</a></li>
          <li><a href="#jobposts"><i class='bx bx-plus-circle'></i>&nbsp;Job Posts</a></li>
            <!-- <li><a href="#referrals">Referrals</a></li>-->
          
          <li><a href="#notifications"><i class='bx bx-bell'></i>&nbsp;Notifications<span class="notification-badge">2</span></a></li>
          <li><a href="#statistics"><i class='bx bx-stats'></i>&nbsp;Statistics</a></li>
        </ul>
      </div>
      <div class="content">
        <div id="dashboard" style="display: none;">
          <h2>Dashboard</h2>
          <div class="home-content">
            <div id="dashboard">
              <div class="overview-boxes">
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">No. of Referred Applicants</div>
                    <div class="number">42</div>
                    <div class="indicator">
                      <i class="bx bx-up-arrow-alt"></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class="bx bx-file cart"></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">No. of Posted Vacancies</div>
                    <div class="number">531</div>
                    <div class="indicator">
                      <i class="bx bx-up-arrow-alt"></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class="bx bxs-file cart two"></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">No. of Jobs Posted <br> &nbsp;</div>
                    <div class="number">340</div>
                    <div class="indicator">
                      <i class="bx bx-up-arrow-alt"></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class="bx bx-file cart three"></i>
                </div>
                <div class="box">
                  <div class="right-side">
                    <div class="box-topic">No. of Applicants Available</div>
                    <div class="number">100</div>
                    <div class="indicator">
                      <i class="bx bx-up-arrow-alt"></i>
                      <span class="text">Up from yesterday</span>
                    </div>
                  </div>
                  <i class="bx bx-file cart four"></i>
                </div>
              </div>
            </div>
         
        
            <div class="sales-boxes">
              <div class="recent-sales box">
                <div class="title">Recent Referred</div>
                <div class="sales-details">
                  <div class="details-table-wrapper">
                    <table class="details-table">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Jobseeker</th>
                          <th>Position</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>
                        <tr>
                          <td><a href="#">02 Jan 2021</a></td>
                          <td><a href="#">Alex Doe</a></td>
                          <td><a href="#">Delivered</a></td>
                          <td><button type="button"> <i class="bx bx-user"></i></button></td> <!-- Changed from <a> to <button> -->
                        </tr>

                      
                        <!-- Add more rows as needed -->
                      </tbody>
                    </table>
                  </div>
                  
                </div>
                
              </div>
              <div class="top-sales box">
                <div class="title">Recen Job Posts</div>
                <div class="details-table-wrapper">
                <table class="details-table">
                  <thead>
                    <tr>
                      <th>Position</th>
                      <th>No. of Vacancy</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <span class="position">Software Engineer</span>
                        </a>
                      </td>
                      <td class="vacancy">5</td>
                    </tr>

                  </tbody>
                </table>
                
              </div>
            </div>
          </div>
         </div>
        </div>
        <!-- ====================== END DASHBOARD =======================-->

        <!-- ====================== VIEW APPLICATIONS =======================-->
        <div id="applications" style="display: none;">
          <h2>View Applications</h2>
          <div class="table-container">
            <table id="dashboardjobs" class="display" style="width:100%">
                <thead>
                    <tr>
                      <th>Applicants</th>
                      <th>Job Title/Position</th>
                      <th>Date Applied</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Juan Dela Cruz</td>
                      <td>Software Engineer</td>
                      <td>04-20-24</td>
                      <td>Applied</td>
                      <td>
                        <button class="view-user" data-modal="myModal"><i class="fas fa-user"></i></button>
                        <button class="cancel-button"><i class="fas fa-times"></i></button>
                      </td>
                    </tr>
                  </tbody>
            </table>
            </div>  
          </div>
       
        <!-- ====================== END VIEW APPLICATIONS =======================-->

        <!-- The Modal -->
        <div id="myModal" class="modal" style="display: none;">
          <div class="modal-content">
            <span class="close">×</span>
            <div class="logo">
              <i class="fas fa-user fa-5x"></i>
            </div>
            <div class="modal-text">
              <h2>Juan Dela Cruz Sample Sample</h2>
              <p>Education: Bachelor of Science in Information Technology</p>
              <p>Last Work/Job: Computer Programmer</p>
            </div>
            <div class="button-row">
              <a href="../../view/employer/employer_view_profile.html"><button class="view-button1"><i class="fas fa-user"></i> View Profile</button></a>
              <a href="#"><button class="view-button1"><i class="fas fa-info-circle"></i> More Information</button></a>
            </div>
          </div>
        </div>

        <script>
          // Get all elements with class "view-user"
          var viewUserButtons = document.querySelectorAll(".view-user");

          // Loop through each button to attach modal functionality
          viewUserButtons.forEach(function(button) {
            // Get the modal ID from the button's data-modal attribute
            var modalId = button.dataset.modal;
            // Get the modal corresponding to the button
            var modal = document.getElementById(modalId);
            // Get the <span> element that closes the modal
            var span = modal.querySelector(".close");

            // When the user clicks the button, open the modal
            button.onclick = function() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          });
        </script>


        <!-- ====================== JOB POSTS =======================-->
        <div id="jobposts" style="display: block;">
          <h1> SE2424: ABC Hotel Company</h1>
          <h2>Add Job Lists <button class="add-button" id="openModalBtnjob"><i class="fas fa-plus"></i></button></h2>
          <div class="table-container">
            <table id="dashboardjobposts" class="display" style="width:100%">
               <thead>
                   <tr>
                       <th>Job ID</th>
                       <th>Job Posting ID/th>
                       <th>Position</th>
                       <th>Vacancies</th>
                       <th>Applicants</th>
                       <th>Status</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>    
                    <tr>
                        <td>JB0124</td>
                        <td>SE2424</td>
                        <td>Hotel Receptionist</td>
                        <td>3</td>
                        <td>--</td>
                        <td>Vacant</td>
                        <td>
                            <button class="view-button" id="openModalBtnView"><i class="fas fa-eye"></i> </button>
                            <button class="cancel-button"><i class="fas fa-times"></i> </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
         </div>
        </div>
        <!-- ====================== END JOB POSTS =======================-->
          <!-- The Modal for view-button -->
          <div id="myModalView" class="modal" style="display: none;">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">×</span>
              <!-- Add your content for the new modal here -->
              <div class="custom-logo">
                <select class="custom-dropdown" id="industryDropdown">
                    <option value="Juan Dela Cruz">Business</option>
                    <option value="Another Option">Another Option</option>
                    <option value="Yet Another Option">Yet Another Option</option>
                </select>
            </div>
              
            <div class="custom-modal-text">
              <input type="text" class="custom-text-field" placeholder="Job Title/Name" value="Software Engineer" readonly="">
              <div class="custom-input-group">
                  <input type="number" class="custom-text-row" placeholder="Salary Range Min" value="10000" readonly="">
                  <input type="number" class="custom-text-row" placeholder="Salary Range Max" value="10000" readonly="">
                  <input type="number" class="custom-text-row" placeholder="No. of Vacancies" value="4" readonly="">
              </div>
              <div class="expandable-text-field">
                  <textarea class="custom-text-area" placeholder="Job Description" readonly="">Statement of Work: I am looking to build a fully integrated website solution that will allow users to shop for consulting services. The site will allow the user to create an LLC amongst other services. I am looking for a mentor in the best options to use. The site must include AI technology that is seamless to the end-user. The site must…

                    Allow user to purchase our service to create their business entity (LLC, S Corp, C Corp)
                    Create an operating agreement for the user
                    Create a custom AI logo with custom colors
                    Create an e-business card with the ability to connect with print vendors to print business cards
                    Allow user to search virtual mail center services in their local area
                    Must be fully integratable with a CRM back office solution. Possible vendors:
                
                    - ClaritySoft
                    - Netsuite
                    - SalesForce</textarea>
              </div>
          </div>

          <div class="custom-logo">
              <select class="custom-dropdown">
                  <option value="Juan Dela Cruz">Select Status</option>
                  <option value="Another Option">Another Option</option>
                  <option value="Yet Another Option">Yet Another Option</option>
              </select>
          </div>
          <div class="button-row">
            <a href="#"><button class="save-button"><i class="fas fa-check"></i> Save</button></a>
            <a href="#"><button class="close-button"><i class="fas fa-times"></i> Close</button></a>
          </div>
            </div>
          </div>
          <!-- End Modal -->
          <script>
            // JavaScript to handle page navigation
            document.querySelectorAll('.sidebar ul li a').forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    document.querySelectorAll('.content > div').forEach(page => {
                        page.style.display = 'none';
                    });
                    document.getElementById(targetId).style.display = 'block';
                });
            });
        
            // Display #applications content by default and hide others
            document.querySelectorAll('.content > div').forEach(page => {
                page.style.display = 'none';
            });
            document.getElementById('jobposts').style.display = 'block';
            </script>
              <!-- JavaScript code for view-button modal -->
              <script>
                // Get the modal for view-button
                var modalView = document.getElementById("myModalView");
            
            // Get the button that opens the modal
            var btnView = document.getElementById("openModalBtnView");

            // Get the <span> element that closes the modal
            var spanView = modalView.querySelector(".close");

            // When the user clicks the button, open the modal
            btnView.onclick = function() {
              modalView.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            spanView.onclick = function() {
              modalView.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modalView) {
                modalView.style.display = "none";
              }
            }
          </script>


       
        <div id="myModaljob" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
              <span class="closejob">×</span>
            <form autocomplete ="on">

            
              <div class="custom-logo">
                  <input type="text" class="custom-text-field" placeholder="Job Position" maxlength = "70"  required>
                  <textarea class="custom-text-area" placeholder="Job Description" maxlength = "500" required ></textarea>
                  <textarea class="custom-text-area" placeholder="Minimum education requirement" maxlength = "30" required></textarea>
                  <textarea class="custom-text-area" placeholder="Specialization requirement" required></textarea>
                  
                  
                  <div class="custom-input-group">
                    <select class="custom-dropdown" id = "years-exp" onchange = "years_experience()" required>
                      <option value="">Select years of experience</option>
                      <option value="with">With years of experience</option>
                      <option value="none">None</option>
                    </select>
                    <input type="number" class="custom-text-row" id = "num-exp" placeholder="Years experience" 
                    min = "1" maxlength="2" disabled>
                  </div>

                  
                
                  <div class="custom-input-group">
                    <input type="number" class="custom-text-row" placeholder="Salary" maxlength = "10" min = "1" required>
                    <input type="number" class="custom-text-row" placeholder="Vacancy Count" required>
                  </div> 
              </div>
                
              <div class="custom-modal-text">
                <div class="custom-input-group">
                  <select class="custom-dropdown" required="">
                    <option value="">Nature of Work</option>
                    <option value="contractual">Contractual</option>
                    <option value="ojt">Internship/OJT</option>
                    <option value="part-time">Part-time</option>
                    <option value="permanent">Permanent</option>
                    <option value="project-based">Project-based</option>
                    <option value="online-job">Work from home/Online job</option>
                  </select>
                    <input type="text" class="custom-text-row" placeholder="Place of work" required="">
                    <select class="custom-dropdown" required="">
                      <option value="">Job Status</option>
                      <option value="Permanent">Permanent</option>
                      <option value="Temporary">Temporary</option>
                      <option value="Contractual">Contractual/option&gt;
                    </option></select>
                </div>
            </div>
            
            <input type="number" class="custom-text-row" placeholder="Work experience" min = "1">
            <textarea class="custom-text-area" placeholder="Other qualifications" maxlength="10"></textarea>

            <div class="custom-input-group">
              <h4>Accepts persons with disabilities</h4>
              <input type="radio" name="radio-pwd" id="Yes" value="Yes" onclick="pwd_yes()">
              <label>Yes</label><br>
              <input type="radio" name="radio-pwd" id="No" value="No" onclick="pwd_yes()">
              <label>No</label><br>
            </div>
            
            <div class="custom-input-group" id="div-pwd">
              <input type="checkbox" id="Visual" name="Visual" value="Visual">
              <label for="Visual"> Visual</label><br>
              <input type="checkbox" id="Physical" name="Physical" value="Physical">
              <label for="Physical"> Physical</label><br>
              <input type="checkbox" id="Hearing" name="Hearing" value="Hearing"> 
              <label for="Hearing"> Hearing</label><br>
              <input type="checkbox" id="Mental" name="Mental" value="Mental">
              <label for="Mental"> Mental</label><br>
              <input type="checkbox" id="Speech" name="Speech" value="Speech">
              <label for="Speech"> Speech</label><br>
              <input type="checkbox" id="other-disability" name="Others" value="Others" onclick="otherDisability()">
              <label for="Others"> Others:</label><br>
              <input type = "text" id = "other-disability-txtbox" disabled>
            </div>

            <div class="custom-input-group">
              <h4>Accepts returning OFWs</h4>
              <input type="radio" name="radio-ofw" id="ofw-Yes" value="Yes">
              <label>Yes</label><br>
              <input type="radio" name="radio-ofw" id="ofw-No" value="No">
              <label>No</label><br>
            </div>
             
            <div class="custom-input-group">
                <select class="custom-dropdown" required="">
                  <option value="">Select Education Level</option>
                  <option value="elem-grad">Elementary School Graduate</option>
                  <option value="hs-grad">High School Graduate</option>
                  <option value="shs-grad">Senior High School Graduate</option>
                  <option value="bach-grad">Bachelor's Degree</option>
                  <option value="mas-grad">Masteral Degree</option>
                  <option value="doc-grad">Doctorate Degree</option>
                  <!-- Add more options as needed -->
                </select>
                <input type="number" class="custom-text-row" placeholder="Course/SHS Strand:" required="">
            </div>

            <div class="custom-input-group">
              <input type="number" class="custom-text-row" placeholder="License" required="">
              <input type="number" class="custom-text-row" placeholder="Eligibility" required="">
            </div>
            <div class="custom-input-group">
              <input type="number" class="custom-text-row" placeholder="Certification" required="">
              <input type="number" class="custom-text-row" placeholder="Language/Dialect Spoken" required="">
            </div>
            
              
              <div class="button-row">
                <input type="submit" value="Submit" class="save-button">
                <a href="#"><button class="save-button"><i class="fas fa-check"></i> Save</button></a>
                <a href="#"><button class="close-button"><i class="fas fa-times"></i> Close</button></a>
              </div>
            </form>
          </div>
        </div>
        <!-- End Modal -->
        <!-- JavaScript code for adding a vacant job -->
        <script>
          function pwd_yes(){
            if(document.getElementById("Yes").checked == true){
              document.getElementById("div-pwd").style.display = 'flex'; 
              //var val = document.getElementById("Yes").value;   
              //document.getElementById("Visual").disabled = false;
              //document.getElementById("demo").innerHTML = val;
            }
            else{
              document.getElementById("div-pwd").style.display = 'none'; 
             // document.getElementById("Visual").disabled = true; 
             // document.getElementById("demo").innerHTML = "";
            }
          }
          function otherDisability(){
            var check_other =  document.getElementById("other-disability");
            var txtbox_other =  document.getElementById("other-disability-txtbox");
            
            if(check_other.checked == true){
              txtbox_other.disabled = false;
            }else{
              txtbox_other.disabled = true;
            }
          }
          function years_experience(){
            var selected = document.getElementById("years-exp").value;
            var num_exp = document.getElementById("num-exp");
            var num_exp_val = document.getElementById("num-exp").value;

            if(selected == "none"){ //no experience
              num_exp.disabled = true;
              num_exp.style.borderColor = "#9a9a9a";
              num_exp.style.border = "1px solid";
             
            }else{ //color the txtbox
              num_exp.disabled = false;
              num_exp.style.border = "2px solid";
              num_exp.style.borderColor = "#0089c4";
              
              if(num_exp_val != ""){
                num_exp.style.borderColor = "#9a9a9a";
                num_exp.style.border = "1px solid";
              }
            }
          }
        
          // Get the modal
          var modal = document.getElementById("myModaljob");

          // Get the button that opens the modal
          var btn = document.getElementById("openModalBtnjob");

          // Get the <span> element that closes the modal
          var span = document.getElementsByClassName("closejob")[0];

          // When the user clicks the button, open the modal
          btn.onclick = function() {
              modal.style.display = "block";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
              modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
        </script>



        <!-- ====================== REFERRALS =======================-->
        <div id="referrals" style="display: none;">
          <h2>Referrals</h2>
          <div class="table-container">
            <div id="dashboardrefer_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons"> <button class="dt-button buttons-collection buttons-colvis" tabindex="0" aria-controls="dashboardrefer" type="button" aria-haspopup="dialog"><span>Column visibility</span><span class="dt-button-down-arrow">▼</span></button> <button class="dt-button buttons-collection buttons-page-length" tabindex="0" aria-controls="dashboardrefer" type="button" aria-haspopup="dialog"><span>Show 10 rows</span><span class="dt-button-down-arrow">▼</span></button> </div><div id="dashboardrefer_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dashboardrefer"></label></div><table id="dashboardrefer" class="display dataTable no-footer" style="width: 100%;" aria-describedby="dashboardrefer_info">
             <thead>
                 <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Job ID: activate to sort column descending" style="width: 0px;">Job ID</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Job Title/Position: activate to sort column ascending" style="width: 0px;">Job Title/Position</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Vacancies: activate to sort column ascending" style="width: 0px;">Vacancies</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Applicants: activate to sort column ascending" style="width: 0px;">Applicants</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Hired: activate to sort column ascending" style="width: 0px;">Hired</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="dashboardrefer" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
                 
             </thead>
             <tbody>
              
                
               
             <tr class="odd">
                   <td class="sorting_1">SE2424</td>
                   <td>Software Engineer</td>
                   <td>4</td>
                   <td>--</td>
                   <td>0</td>
                   <td>Posted</td>
                   <td>
                       <button class="view-button" data-modal="myModal"><i class="fas fa-eye"></i> View</button>
                       <button class="cancel-button"><i class="fas fa-times"></i> Cancel</button>
                   </td>
                 </tr></tbody>
         </table><div class="dataTables_info" id="dashboardrefer_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dashboardrefer_paginate"><a class="paginate_button previous disabled" aria-controls="dashboardrefer" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="dashboardrefer_previous">Previous</a><span><a class="paginate_button current" aria-controls="dashboardrefer" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dashboardrefer" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="dashboardrefer_next">Next</a></div></div>
         </div>
        </div>
        <!-- ====================== END REFERRALS =======================-->
      
        <!-- ====================== HIRED =======================-->
        <div id="hired" style="display: none;">
          <h2>Approved</h2>
          <div class="table-container">
            <table id="dashboardhired" class="display" style="width:100%">
             <thead>
                 <tr>
                     <th>Applicants</th>
                     <th>Job Title/Position</th>
                     <th>Date Applied</th>
                     <th>Status</th>
                     <th>Actions</th>
                 </tr>
                 
             </thead>
             <tbody>
              
                <tr>
                   <td>Juan Dela Cruz</td>
                   <td>Software Engineer</td>
                   <td>04-20-24</td>
                   <td>Hired</td>
                   <td>
                      <button class="view-user"><i class="fas fa-user"></i></button>
                       <!--  <button class="view-button" id="openModalBtn"><i class="fas fa-eye"></i></button>-->
                       <button class="cancel-button"><i class="fas fa-times"></i></button>
                   </td>
                 </tr>
                 
                 
             </tbody>
         </table>
         </div>
        </div>
        <!-- ====================== END HIRED =======================-->

         <!-- ====================== NOTIFICATIONS =======================-->
         <div id="notifications" style="display: none;">
          <h2>Notifications</h2>
          <div class="notificationtbl">
            <table>
              <thead>
                <tr>
                    <th colspan="2">Recent</th>
                </tr>
            </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="notification">
                      <div class="logo">
                        <img src="../../images/PESO LOGO NEW.png" alt="Logo">
                      </div>
                      <div class="notificationcontent">
                        <div class="header1">
                          <div>
                            <h3>PESO - Admin</h3>
                            <h4>Referral Slip</h4>
                          </div>
                          <span class="time">21m ago</span>
                        </div>
                        <p class="message">PESO-Gensan released your Referral Slip for the job "Website Builder"</p>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="notification">
                      <div class="logo">
                        <img src="../../images/PESO LOGO NEW.png" alt="Logo">
                      </div>
                      <div class="notificationcontent">
                        <div class="header1">
                          <div>
                            <h3>PESO - Admin</h3>
                            <h4>Referral Slip</h4>
                          </div>
                          <span class="time">21m ago</span>
                        </div>
                        <p class="message">PESO-Gensan released your Referral Slip for the job "Website Builder"</p>
                      </div>
                    </div>
                  </td>
                </tr>
                </tbody><thead>
                  <tr>
                      <th colspan="2">Old</th>
                  </tr>
              </thead>
                <tbody><tr>
                  <td colspan="2">
                    <div class="notification">
                      <div class="logo">
                        <img src="../../images/PESO LOGO NEW.png" alt="Logo">
                      </div>
                      <div class="notificationcontent">
                        <div class="header1">
                          <div>
                            <h3>PESO - Admin</h3>
                            <h4>NSRP Form</h4>
                          </div>
                          <span class="time">2 days ago</span>
                        </div>
                        <p class="message">Paki fill-out sa imong form. Salamat</p>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <div class="notification">
                      <div class="logo">
                        <img src="../../images/PESO LOGO NEW.png" alt="Logo">
                      </div>
                      <div class="notificationcontent">
                        <div class="header1">
                          <div>
                            <h3>PESO - Admin</h3>
                            <h4>NSRP Form</h4>
                          </div>
                          <span class="time">2 days ago</span>
                        </div>
                        <p class="message">Paki fill-out sa imong form. Salamat</p>
                      </div>
                    </div>
                  </td>
                </tr>  
              </tbody>
            </table>
          </div>
        </div>
        <!-- ====================== END NOTIFICATIONS =======================-->

       
      </div>
    </div>
    <!-- ====================== END DASHBOARD =======================-->


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
            <a href="#">Terms &amp; Conditions</a>
            <a href="#">Safe Job Search Guide</a>
          </div>
          <div class="copyright">
            <p>Copyright © 2024 PESO JobPortal</p>
          </div>
        </div>
    </footer>
    


    <!--=============== MAIN JS ===============-->
    <!--=============== MAIN JS ===============-->
    <script src="{{asset('import/js/main.js')}}"></script>
  
    <script>
       // JavaScript to handle page navigation
       document.querySelectorAll('.sidebar ul li a').forEach(link => {
           link.addEventListener('click', function(event) {
               event.preventDefault();
               const targetId = this.getAttribute('href').substring(1);
               document.querySelectorAll('.content > div').forEach(page => {
                   page.style.display = 'none';
               });
               document.getElementById(targetId).style.display = 'block';
           });
       });
   </script>
    <script>
      $(document).ready(function() {
      $('#dashboardjobs, #dashboardjobposts, #dashboardrefer, #dashboardhired').DataTable({
        fixedColumns: {
          start: 1,
          end: 1
        },
        dom: 'Bfrtip',
        buttons: [
          'colvis',
          {
            extend: 'pageLength',
          }
        ]
      });
    });
    </script>

 
</body>
</html>
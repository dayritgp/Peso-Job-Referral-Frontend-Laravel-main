<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== ICONS ===============-->
    
      <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
     
      <!--=============== CSS ===============-->

      <link rel="stylesheet" href="{{asset('import/css/employer/styles.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/employer/dashboard.css')}}">
      <link rel="stylesheet" href="{{asset('import/css/employer/cards.css')}}">   <!-- STATISTICS CARDS -->
      <link rel="stylesheet" href="{{asset('import/css/employer/admin_dashboard.css')}}"> <!-- -->

   
      
      <!--=============== DATA TABLES PLUGINS ===============-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src=" https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->

      <script src="../../controller/js/sweetalert.js"></script>

      <title>Public Employment Service Office | PESO-Gensan</title>
      <link rel="icon" href="../../images/PESO LOGO NEW.png">
   </head>
<style>
 
</style>
   <body>
    
      <!-- Header and navigation content -->
      <!--=============== HEADER ===============-->
      <header class="header" id="header">
      @include('header.header')
     </header>
      <!-- ====================== START DASHBOARD =======================-->
      <div class="container1">
        @include('header.sidebar')
        <div class="content">

          <!-- ====================== JOB POSTS =======================-->
          <div id="jobposts">
            <h2>Job Posts  <button class="add-button" id="openModalBtnjob"><i class="fas fa-plus"></i></button></h2>
            <div class="table-container">
              <table id="dashboardjobposts" class="display" style="width:100%">
               <thead>
                   <tr>
                       <th>Job ID</th>
                       <th>Industry</th>
                       <th>Vacancies</th>
                       <th>Applicants</th>
                       <th>Posting Start</th>
                       <th>Posting End</th>
                       <th>Actions</th>
                   </tr>
                   
               </thead>
               <tbody>
                <tr>
                <td>adfdsf</td>
                <td>adfdsf</td>
                <td>adfdsf</td>
                <td>adfdsf</td>
                <td>adfdsf</td>
                <td>adfdsf</td>  
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


            <div id="myModalView" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <!-- Add your content for the new modal here -->
                <div class="custom-logo">
                  <select class="custom-dropdown" id="industryDropdown">
                      <option value="Juan Dela Cruz">Business</option>
                      <option value="Another Option">Another Option</option>
                      <option value="Yet Another Option">Yet Another Option</option>
                  </select>
              </div>
                
              <div class="custom-modal-text">
                <input type="text" class="custom-text-field" placeholder="Job Title/Name" value="Software Engineer" readonly>
                <div class="custom-input-group">
                    <input type="number" class="custom-text-row" placeholder="Salary Range Min" value="10000" readonly>
                    <input type="number" class="custom-text-row" placeholder="Salary Range Max" value="10000" readonly>
                    <input type="number" class="custom-text-row" placeholder="No. of Vacancies" value="4" readonly>
                </div>
                <div class="expandable-text-field">
                    <textarea class="custom-text-area" placeholder="Job Description" readonly>Statement of Work: I am looking to build a fully integrated website solution that will allow users to shop for consulting services. The site will allow the user to create an LLC amongst other services. I am looking for a mentor in the best options to use. The site must include AI technology that is seamless to the end-user. The site must…

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


          <!-- The Modal -->
          <div id="myModaljob" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="closejob">&times;</span>
                <div class="custom-logo">
                <form action = "../../view/employer/employer_emp.html">
                  <input type="text" class="custom-text-field" placeholder="Job Title/Name" value = "ABC COMPANY" required readonly>
                    <select class="custom-dropdown"required>
                        <option value=""  disabled selected hidden>Select Industy</option>
                        <option value="01">Agriculture</option>
                        <option value="02">Fishing</option>
                        <option value="03">Mining and Quarrying</option>
                        <option value="04">Manufacturing</option>
                        <option value="05">Electrical, Gas, and Water</option>
                        <option value="06">Construction</option>
                        <option value="07">Wholesale and Retail Trade</option>
                        <option value="08">Hotels and Restaurant</option>
                        <option value="09">Transport, Storage, and Communication</option>
                        <option value="10">Financial Intermediation</option>
                        <option value="11">Real Estate, Renting, and Business Activities</option>
                        <option value="12">Public Administration and Defense</option>
                        <option value="13">Education</option>
                        <option value="14">Health and Social Work</option>
                        <option value="15">Other Community, Social and Personal Service Activities</option>
                        <option value="16">Activities of Private Households as Employers and Undifferentiated</option>
                        <option value="17">Extra-Terrotorial Organizations, and Bodies</option>
                    </select>
                </div>

                <div class="custom-modal-text">
                  <h4  style="color:rgb(0, 0, 0);text-align:left;">Address</h4>
                    <div class="custom-input-group">
                      <input type="text" class="custom-text-field" placeholder="Barangay"  required>
                      <input type="text" class="custom-text-field" placeholder="Municipality/City"  required>
                      <input type="text" class="custom-text-field" placeholder="Province"  required>
                    </div>
                </div>

                <div class="custom-modal-text">
                  <h4 style="color:rgb(0, 0, 0);text-align:left;">Posting Validity</h4>
                   <div class = "custom-input-group-two-rows">
                    
                    <div class="custom-input-group">
                      <!--   <label>Start:</label>-->
                      <input type="date" class="custom-text-field"  required>
                    </div>
                    <div class="custom-input-group">
                       <!--   <label>Until:</label>-->
                      <input type="date" class="custom-text-field"  required>
                    </div>
                   </div>
                </div>
               
             
                <div class="custom-modal-text">
                  <h4 style="color:rgb(0, 0, 0);text-align:left;" >Note</h4>
                    <div class="custom-input-group">
                      <input type="text" class="custom-text-field" placeholder = "Prepared by" maxlength = "30" autocomplete = "on" required>
                      <input type="text" class="custom-text-field" placeholder = "Date Accomplished" maxlength = "20" autocomplete = "on" required>
                    </div>
                    <div class="custom-input-group">
                      <input type="text" class="custom-text-field" placeholder = "Designation" maxlength = "30" autocomplete = "on" required>
                      <input type="text" class="custom-text-field" placeholder = "Contact Number"  maxlength = "20" autocomplete = "on" required>
                    </div>
                </div>
               
                <div class="button-row">
                  <input type="submit" value="Submit" class="save-button" onclick = "abc()">
                  <a href="#"><button class="save-button"><i class="fas fa-check"></i> Save</button></a>
                  <a href="#"><button class="close-button"><i class="fas fa-times"></i> Close</button></a>
                </div>
              </form>
            </div>
          </div>
          <!-- End Modal -->
          <!-- JavaScript code for adding a vacant job -->
          <script>

            document.addEventListener("DOMContentLoaded", function() {
              var activeSection = localStorage.getItem("activeSection");
              if (activeSection) {
                var section = document.getElementById(activeSection);
                if (section) {
                  section.style.display = 'block';
                }
                // Hide the dashboard section if it's not the active section
                if (activeSection !== 'dashboard') {
                  var dashboardSection = document.getElementById('dashboard');
                  if (dashboardSection) {
                    dashboardSection.style.display = 'none';
                  }
                }
              } else {
                // If no active section is stored, show the default section
                var defaultSection = document.getElementById('referrals');
                if (defaultSection) {
                  defaultSection.style.display = 'block';
                }
              }
            });
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
         
        </div>
      </div>
      <!-- ====================== END DASHBOARD =======================-->
      <script src="../../controller/js/chart.js"></script>
      <script src="../../controller/js/scripts.js"></script>

    @include('header.footer')
  
      <!--=============== MAIN JS ===============-->
      <!--=============== MAIN JS ===============-->
      <script src="{{asset('import/js/employer/main.js')}}"></script>
      <script src = "{{asset('import/js/employer/dashboard_changetab.js')}}"></script>
      <script src="{{asset('import/js/employer/fakelist.js')}}"></script>
     
      <script>
        $(document).ready(function() {
        $('#dashboardjobs, #dashboardjobposts, #dashboardrefer, #dashboardhired').DataTable({
          fixedColumns: {
            start: 1,
            end: 1
          },
          dom: 'Bfrtip',
          buttons: [{
            extend: 'copyHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
          {
            extend: 'excelHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },
          {
            extend: 'pdfHtml5',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
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
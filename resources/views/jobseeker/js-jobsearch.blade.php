
  @extends('extensions.homepage')
  
  @section('content')

      <div class="content">
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
              <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown1')">Date posted <i
                  class="fas fa-caret-down"></i></button>
              <div id="dropdown1" class="dropdown-sort">
                <a href="#">Today</a>
                <a href="#">Yesterday</a>
                <a href="#">Last 7 days</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="dropdown-btn" onclick="toggleDropdown(event, 'dropdown2')">Work Environment <i
                  class="fas fa-caret-down"></i></button>
              <div id="dropdown2" class="dropdown-sort">
                <a href="#">Offline</a>
                <a href="#">Online</a>
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
            <h3>
              <center>You may search by position title, employer name, work location, education level or course, etc.</center>
            </h3><br>
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

        </body>

        <script>
            function toggleDropdown(event, dropdownId) {
              event.stopPropagation();
              var dropdown = document.getElementById(dropdownId);
              var isDisplayed = dropdown.style.display === 'block';
              closeAllDropdowns();
              dropdown.style.display = isDisplayed ? 'none' : 'block';
            }

            function closeAllDropdowns() {
              var dropdowns = document.getElementsByClassName('dropdown-sort');
              for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].style.display = 'none';
              }
            }

            document.body.addEventListener('click', function () {
              closeAllDropdowns();
            });
          </script>

      </div>
  @endsection`
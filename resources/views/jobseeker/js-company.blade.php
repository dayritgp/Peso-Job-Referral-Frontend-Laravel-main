
@extends('extensions.homepage')
  
@section('content')

    <!-- Category Start -->
    <div class="content">
        <div id="jobs" class="container" style="padding-top: 40px;max-width: 850px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="text-align: left;">Find great places to work
            </h1>
            <h3 style="text-align: left; line-height: 50px;font-size: 20px;  font-weight: 100;">Discover Your Next Career
            Journey</h3>
            <br>
        </div>
        <div class="jobsearch_container">
            <div class="search_container">
            <input type="text" placeholder="Company name or job title...">
            <button type="submit">Find Companies</button>
            </div>
            <div class="title">
            <h2>Popular Companies</h2>
            </div>
            <table class="container_company" id="companyTable">
            <tbody id="companyBody">
                <!-- This tbody will be populated dynamically -->
            </tbody>
            </table>
        </div>
    </div>

  <!--=============== MAIN JS ===============-->
  <script src="{{ asset('import/js/jobseeker/main.js')}}"></script>
  <script>
    // Generate fake company names and numbers
    const fakeCompanies = Array.from({ length: 13 }, () => faker.company.companyName());
    const fakeNumbers = Array.from({ length: 10 }, () => faker.random.number({ min: 10, max: 100 }));

    // Get the table body element
    const tbody = document.getElementById("companyBody");

    // Populate table with dynamically generated data
    let currentRow;
    fakeCompanies.forEach((company, index) => {
      // Create a new row every 4 iterations
      if (index % 4 === 0) {
        currentRow = document.createElement("tr");
        tbody.appendChild(currentRow);
      }

      // Create a new td element
      const td = document.createElement("td");
      td.classList.add("box");

      // Create elements inside the td
      const anchor = document.createElement("a");
      anchor.href = "jobseeker_company_details.html";

      const img = document.createElement("img");
      img.src = "{{ asset('import/images/jobseeker/apple.png') }}";

      const h3 = document.createElement("h3");
      h3.textContent = company;

      const divRating = document.createElement("div");
      divRating.classList.add("rating");

      const pJobsAvailable = document.createElement("p");
      pJobsAvailable.textContent = fakeNumbers[index] + " Jobs Available";

      divRating.appendChild(pJobsAvailable);
      anchor.appendChild(img);
      anchor.appendChild(h3);
      anchor.appendChild(divRating);
      td.appendChild(anchor);

      // Append td to the current row
      currentRow.appendChild(td);
    });
  </script>
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
</body>

@endsection
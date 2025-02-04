<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script> <!-- Faker.js -->
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/jobseeker_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/dashboard.css') }}">
    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/PESO LOGO NEW.png') }}">
</head>

<body>

    <!--=============== HEADER ===============-->
    <header class="header">

        @include('extensions.jobseeker_header')

    </header>

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


    <!-- Category Start -->
    <div class="container" style="padding-top: 30px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Special job categories</h1>
        <h3>
            <center>We have job vacancies for various types of jobseekers</center>
        </h3>
    </div>
    <!-- Category End -->

    <div class="containercard">
        <div class="card">
            <img src="{{ asset('import/images/pwd.jpg') }}" alt="Image 1">
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
        <h3>
            <center>PESO-Gensan is FREE for all and accessible 24/7</center>
        </h3>
    </div>
    <!-- Category End -->
    <div class="quick-stats">
        <div class="stat">
            <i class="fas fa-user"></i>
            <div class="stat-value">0</div>
            <div class="stat-label">Jobseekers</div>
        </div>
        <div class="stat">
            <i class="fas fa-building"></i>
            <div class="stat-value">0</div>
            <div class="stat-label">Employers</div>
        </div>
        <div class="stat">
            <i class="fas fa-briefcase"></i>
            <div class="stat-value">0</div>
            <div class="stat-label">Job Vacancies</div>
        </div>
        <div class="stat">
            <i class="fas fa-user-check"></i>
            <div class="stat-value">0</div>
            <div class="stat-label">Jobseekers Hired</div>
        </div>
    </div>


    <!-- Category Start -->
    <div id="jobs" class="container" style="padding-top: 40px;">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <h3>
            <center>We have job vacancies for various types of jobseekers
        </h3><br>
    </div>

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






    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('import/js/jobseeker/fakelist.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.stat-value');
            const speed = 200; // Speed of the counting animation (in milliseconds)

            counters.forEach(counter => {
                const target = faker.random.number(); // Generate a fake number
                const updateCount = () => {
                    const count = +counter.innerText;
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        });
    </script>
</body>
 <!--=============== FOOTER ===============-->
<div id="footer-placeholder"></div>
<script>
    // Fetch and insert the footer content
    fetch('/import/extended-layouts/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
</script>

<!-- <script>
    // Fetch and insert the footer content
    fetch('/import/extended-layouts/footer.html') // Use the correct URL path relative to the domain root
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching or inserting footer:', error);
        });
</script> -->

</html>


@extends('extensions.homepage')
  
  @section('content')

      <div class="content">
            <div style="max-width: 1200px; margin: 0 auto;">
                <h2>Profile Details</h2>
                <div class="prof-container">
                    <div class="box box1">
                        <div class="profile-details">
                        <img src="{{ asset('import/images/profile.png') }}" alt="Profile Image">
                        <h2 id="fullName"></h2>
                        <h3 id="jobTitle"></h3>
                        <p class="email" id="email">Email: <a href="#" class="link" id="emailLink"></a></p>
                        <p class="phone" id="phone">Phone: <a href="#" class="link" id="phoneLink"></a></p>
                        </div>
                        <div class="nsrp-container">
                        <a href="NSRPForm1.html"> <button class="nsrp-button">View NSRP Form</button></a>
                        </div>
                    </div>
                    <div class="box2-container">
                        <div class="box box2">
                        <h3>Personal Information</h3>
                        <table class="custom-table" id="personalInfoTable">
                            <tr>
                                <td>Last Name:</td>
                                <td id="lastName"></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td id="firstName"></td>
                            </tr>
                            <tr>
                                <td>Middle Name:</td>
                                <td id="middleName"></td>
                            </tr>
                            <tr>
                                <td>Suffix:</td>
                                <td id="suffix"></td>
                            </tr>
                            <tr>
                                <td>Sex:</td>
                                <td id="sex"></td>
                            </tr>
                            <tr>
                                <td>Religion:</td>
                                <td id="religion"></td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td id="dateOfBirth"></td>
                            </tr>
                            <tr>
                                <td>Place of Birth:</td>
                                <td id="placeOfBirth"></td>
                            </tr>
                            <tr>
                                <td>Present Address:</td>
                                <td id="presentAddress"></td>
                            </tr>
                            <tr>
                                <td>Civil Status:</td>
                                <td id="civilStatus"></td>
                            </tr>
                        </table>

                        <button class="view-more-btn" onclick="toggleDetails()">View More <i
                                class="fas fa-chevron-down"></i></button>
                        <div class="additional-details" style="display: none;">
                            <h3>Additional Details</h3>
                            <table class="custom-table">
                                <tr>
                                    <td>TIN #:</td>
                                    <td id="tin"></td>
                                </tr>
                                <tr>
                                    <td>GSIS/SSS ID No.:</td>
                                    <td id="gsis_sss"></td>
                                </tr>
                                <tr>
                                    <td>PAG-IBIG No.:</td>
                                    <td id="pag_ibig"></td>
                                </tr>
                                <tr>
                                    <td>PhilHealth No.:</td>
                                    <td id="philhealth"></td>
                                </tr>
                                <tr>
                                    <td>Height:</td>
                                    <td id="height"></td>
                                </tr>
                                <tr>
                                    <td>Weight:</td>
                                    <td id="weight"></td>
                                </tr>
                                <tr>
                                    <td>Disability:</td>
                                    <td id="disability"></td>
                                </tr>
                                <tr>
                                    <td>Employment Status Type:</td>
                                    <td id="employmentStatusType"></td>
                                </tr>
                                <tr>
                                    <td>Preferred Occupation:</td>
                                    <td id="preferredOccupation"></td>
                                </tr>
                                <tr>
                                    <td>Preferred Work Location:</td>
                                    <td id="preferredWorkLocation"></td>
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
        </div>
    </body>








   <!--=============== MAIN JS ===============-->
   <script src="../../controller/jobseeker/main.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         var viewMoreBtn = document.querySelector(".view-more-btn");
         var additionalDetails = document.querySelector(".additional-details");

         viewMoreBtn.addEventListener("click", function () {
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
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const fullName = faker.name.findName(); // Generate a fake name
         const jobTitle = faker.name.jobTitle(); // Generate a fake job title
         const email = faker.internet.email(); // Generate a fake email
         const phoneNumber = faker.phone.phoneNumberFormat(); // Generate a fake phone number

         document.getElementById("fullName").textContent = fullName;
         document.getElementById("jobTitle").textContent = jobTitle;
         document.getElementById("emailLink").textContent = email;
         document.getElementById("emailLink").href = "mailto:" + email;
         document.getElementById("phoneLink").textContent = phoneNumber;
         document.getElementById("phoneLink").href = "tel:" + phoneNumber.replace(/\D/g, ""); // Remove non-numeric characters from the phone number
      });
   </script>
   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const lastName = faker.name.lastName(); // Generate a fake last name
         const firstName = faker.name.firstName(); // Generate a fake first name
         const middleName = faker.name.firstName(); // Generate a fake middle name
         const suffix = faker.name.suffix(); // Generate a fake suffix
         const sex = faker.random.arrayElement(["Male", "Female"]); // Generate a fake sex
         const religion = faker.random.arrayElement(["Roman Catholic", "Protestant", "Muslim", "Buddhist", "Hindu"]); // Generate a fake religion
         const dateOfBirth = faker.date.between('1950-01-01', '2003-12-31').toLocaleDateString(); // Generate a fake date of birth
         const placeOfBirth = faker.address.city(); // Generate a fake place of birth
         const presentAddress = faker.address.streetAddress(); // Generate a fake present address
         const civilStatus = faker.random.arrayElement(["Single", "Married", "Divorced", "Widowed"]); // Generate a fake civil status

         // Additional Details
         const tin = faker.random.number({ min: 100, max: 999 }) + '-' + faker.random.number({ min: 100, max: 999 }) + '-' + faker.random.number({ min: 100, max: 999 });
         const gsis_sss = faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 10000, max: 99999 });
         const pag_ibig = faker.random.number({ min: 100, max: 999 }) + '-' + faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 1, max: 9 });
         const philhealth = faker.random.number({ min: 100, max: 999 }) + '-' + faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 1000, max: 9999 }) + '-' + faker.random.number({ min: 10, max: 99 });
         const height = faker.random.number({ min: 140, max: 200 }) + 'cm';
         const weight = faker.random.number({ min: 40, max: 120 }) + 'kg';
         const disability = faker.random.arrayElement(["None", "Visual", "Speech", "Hearing", "Physical"]);
         const employmentStatusType = faker.random.arrayElement(["Employed", "Unemployed"]);
         const preferredOccupation = faker.name.jobTitle();
         const preferredWorkLocation = faker.address.country();

         // Update table cells with generated fake data
         document.getElementById("lastName").textContent = lastName;
         document.getElementById("firstName").textContent = firstName;
         document.getElementById("middleName").textContent = middleName;
         document.getElementById("suffix").textContent = suffix;
         document.getElementById("sex").textContent = sex;
         document.getElementById("religion").textContent = religion;
         document.getElementById("dateOfBirth").textContent = dateOfBirth;
         document.getElementById("placeOfBirth").textContent = placeOfBirth;
         document.getElementById("presentAddress").textContent = presentAddress;
         document.getElementById("civilStatus").textContent = civilStatus;

         // Update additional details
         document.getElementById("tin").textContent = tin;
         document.getElementById("gsis_sss").textContent = gsis_sss;
         document.getElementById("pag_ibig").textContent = pag_ibig;
         document.getElementById("philhealth").textContent = philhealth;
         document.getElementById("height").textContent = height;
         document.getElementById("weight").textContent = weight;
         document.getElementById("disability").textContent = disability;
         document.getElementById("employmentStatusType").textContent = employmentStatusType;
         document.getElementById("preferredOccupation").innerHTML = preferredOccupation;
         document.getElementById("preferredWorkLocation").innerHTML = preferredWorkLocation;
      });
   </script>

@endsection
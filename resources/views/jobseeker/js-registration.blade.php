<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js">
    </script>



    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/jobseeker/jobrequirement.css') }}">

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="{{ asset('import/images/jobseeker/PESO LOGO NEW.png') }}">
</head>
<style>

</style>

<body>
    <!--=============== HEADER ===============-->
    <div>
        @if (session('roleid') == 1)
            @include('extensions/staff_header')
        @elseif (session('roleid') == 2)
            @include('extensions/staff_header')
        @elseif (session('roleid') == 3)
            @include('extensions/employer_header')
        @elseif (session('roleid') == 4)
            @include('extensions/jobseeker_header')
        @else
            @include('extensions/visitor_header')
        @endif
    </div>
    <!-- ====================== START REQUIREMENTS =======================-->
    <div class="requirementstitle">
        <h2>Register Jobseeker profile</h2>
              @if (session()->has('message'))
            <div class="alert alert-info text-center" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class = "message-container">

            <div class = "message-icon">
                <i class='bx bx-info-circle'></i>
            </div>
            <div class = "message-info">
                <h4>INFO</h4>
                <p>To proceed with job hunting, please complete first your jobseeker profile.</p>
            </div>

        </div>
    </div>


    <div class="containerrequirements">
        <div class="sidebar">
            <a href="#personal-info" class="sidebar-item">Personal Information</a>
            <a href="#employment-status" class="sidebar-item">Employment Status</a>
            <a href="#job-pref" class="sidebar-item">Job Preferences</a>
            <a href="#language" class="sidebar-item">Language/Dialects</a>
            <a href="#educ-background" class="sidebar-item">Educational Background</a>
            <a href="#training" class="sidebar-item">Certification/Training</a>
            <a href="#eligibility" class="sidebar-item">Eligibility/License</a>
            <a href="#work-exp" class="sidebar-item">Work Experience</a>
            <a href="#other-skills" class="sidebar-item">Other Skills</a>
            <a href="#authorization" class="sidebar-item">Certification/Authorization</a>
        </div>
        <div class="content" id="content">
            <div class="content-item">
                <form id="jsRegistrationForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h2 id="personal-info">PERSONAL INFORMATION</h2>


                    <!-- Applicant Name Fields -->
                    <div class="form-field">
                        <label for="last-name">LAST NAME</label>
                        <input type="text" class="required-field" id="last-name" name="surname"
                            placeholder="Enter your last name" required>
                        <span class="error-message" id="last-name-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="first-name">FIRST NAME</label>
                        <input type="text" class="required-field" id="first-name" name="firstname"
                            placeholder="Enter your first name" required>
                        <span class="error-message" id="first-name-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="middle-name">MIDDLE NAME</label>
                        <input type="text" class="required-field" id="middle-name" name="middlename"
                            placeholder="Enter your middle name" required>
                        <span class="error-message" id="middle-name-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="suffix">SUFFIX</label>
                        <select id="suffix" class="required-field" name="suffix">
                            <option value="None">None</option>
                            <option value="Jr">Jr.</option>
                            <option value="Sr">Sr</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                        </select>
                        <span class="error-message" id="suffix-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="date-birth">DATE OF BIRTH</label>
                        <div class="input-with-icon">
                            <input type="text" id="date-birth" name="birthdate" class="required-field"
                                placeholder="Select date" required>
                            <i class="far fa-calendar-alt icon"></i>
                        </div>
                        <span class="error-message" id="date-birth-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="birth-place">PLACE OF BIRTH</label>
                        <input type="text" id="birth-place" name="birthplace"class="required-field"
                            placeholder="Enter your birth place" required>
                        <span class="error-message" id="birth-place-error">Please fill in this field.</span>
                    </div>

                    <div class="form-field">
                        <label for="sex">SEX</label>
                        <select id="sex" name='sex' class="required-field" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <span class="error-message" id="sex-error">Please fill in this field.</span>
                    </div>


            </div>
            <div class="form-field">
                <label for="abbreviation">Height(cm)</label>
                <input type="number" id="height" name="height" placeholder="In centimeter" required>
            </div>

            <div class="form-field">
                <label for="tel-num">Contact Number</label>
                <input type="number" id="cell-num" name="contact" pattern="[0-9]{11}"
                    placeholder="eg. 09112233445" required>
            </div>

            <!-- Personal Information Fields -->
            <div class="form-field">
                <label for="civil-status">CIVIL STATUS</label>
                <select id="civil-status" name="civilstatus" class="required-field" required>
                    <option value="">Select</option>
                    <option name="civilstatus" value="Single">Single</option>
                    <option name="civilstatus" value="Married">Married</option>
                    <option name="civilstatus" value="Widowed">Widowed</option>
                    <option name="civilstatus" value="Legally Separated">Legally Separated</option>
                    <option name="civilstatus" value="Live-in">Live-in</option>
                </select>
                <span class="error-message" id="civil-status-error" style="display: none;">This field is
                    required.</span>
            </div>

            <div class="form-field">
                <label for="present-address">PRESENT ADDRESS</label>
                <select id="province" name="province" onchange="unlockDropdown('municipalCity')"
                    class="required-field" required>
                    <option value="" selected disabled>Select Province</option>
                    <option value="davao_del_sur">Davao del Sur</option>
                    <option value="davao_del_norte">Davao del Norte</option>
                    <option value="davao_oriental">Davao Oriental</option>
                    <option value="compostela_valley">Compostela Valley</option>
                    <option value="bukidnon">Bukidnon</option>
                    <option value="misamis_oriental">Misamis Oriental</option>
                    <option value="misamis_occidental">Misamis Occidental</option>
                    <option value="lanao_del_norte">Lanao del Norte</option>
                    <option value="lanao_del_sur">Lanao del Sur</option>
                    <option value="maguindanao">Maguindanao</option>
                    <option value="sultan_kudarat">Sultan Kudarat</option>
                    <option value="north_cotabato">North Cotabato</option>
                    <option value="south_cotabato">South Cotabato</option>
                    <option value="sarangani">Sarangani</option>
                    <option value="zamboanga_del_norte">Zamboanga del Norte</option>
                    <option value="zamboanga_del_sur">Zamboanga del Sur</option>
                    <option value="zamboanga_sibugay">Zamboanga Sibugay</option>
                    <option value="surigao_del_norte">Surigao del Norte</option>
                    <option value="surigao_del_sur">Surigao del Sur</option>
                    <option value="agusan_del_norte">Agusan del Norte</option>
                    <option value="agusan_del_sur">Agusan del Sur</option>
                    <option value="dinagat_islands">Dinagat Islands</option>
                    <option value="basilan">Basilan</option>
                    <option value="sulu">Sulu</option>
                    <option value="tawi-tawi">Tawi-Tawi</option>
                </select><br>
                <span class="error-message" id="province-error" style="display: none;">This field is
                    required.</span><br>

                <select id="municipalCity" name="municipalCity" onchange="unlockDropdown('barangay')" disabled
                    class="required-field" required>
                    <option value="" selected disabled>Select Municipal/City</option>
                    <option value="davao_city">Davao City</option>
                    <option value="cagayan_de_oro_city">Cagayan de Oro City</option>
                    <option value="zamboanga_city">Zamboanga City</option>
                    <option value="general_santos_city">General Santos City</option>
                    <option value="iligan_city">Iligan City</option>
                    <option value="cotabato_city">Cotabato City</option>
                    <option value="tagum_city">Tagum City</option>
                    <option value="digos_city">Digos City</option>
                    <option value="mati_city">Mati City</option>
                    <option value="panabo_city">Panabo City</option>
                    <option value="samal_island_city">Samal Island City</option>
                    <option value="kidapawan_city">Kidapawan City</option>
                    <option value="koronadal_city">Koronadal City</option>
                    <option value="bansalan">Bansalan</option>
                    <option value="magsaysay">Magsaysay</option>
                    <option value="malalag">Malalag</option>
                    <option value="santa_cruz">Santa Cruz</option>
                    <option value="padada">Padada</option>
                    <option value="hagonoy">Hagonoy</option>
                    <option value="malita">Malita</option>
                </select><br>
                <span class="error-message" id="municipalCity-error" style="display: none;">This field is
                    required.</span><br>

                <select id="barangay" name="barangay" disabled class="required-field" required>
                    <option value="" selected disabled>Select Barangay</option>
                    <option value="barangay1">Barangay 1</option>
                    <option value="barangay2">Barangay 2</option>
                    <option value="barangay3">Barangay 3</option>
                    <option value="barangay4">Barangay 4</option>
                    <option value="barangay5">Barangay 5</option>
                </select><br>
                <span class="error-message" id="barangay-error" style="display: none;">This field is
                    required.</span><br>

                <input type="text" name="street" id="street" placeholder="Street/Village" required>
            </div>

            <div class="form-field">
                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" class="required-field"
                    placeholder="Enter your email address" required>
                <span class="error-message" id="email-error">Please enter a valid email address.</span>
            </div>


            <div class="form-field">
                <label for="abbreviation">TIN NUMBER</label>
                <input type="number" id="tin" name="tin" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}"
                    placeholder="xxx-xxx-xxx-xxx" required>
            </div>
            <div class= "form-field">
                <label for="office">Disability</label>
                <div id = "div-public">
                    <div class="label-radio2">
                        <label><input type="radio" name="disability_type" id="disability_1"
                                value=" Deaf/Hard of Hearing">
                            Deaf/Hard of Hearing </label>

                        <label><input type="radio" name="disability_type" id="disability_2"
                                value="Intellectual Disability">
                            Intellectual Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_3"
                                value="Learning Disability">
                            Learning Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_4"
                                value="Mental Disability">
                            Mental Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_5"
                                value="Physical Disability">
                            Physical Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_6"
                                value="Orthopedic Disability">
                            Orthopedic Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_7"
                                value="Psychosocial Disability">
                            Psychosocial Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_8"
                                value="Speech and Language Impairment">
                            Speech and Language Impairment</label>

                        <label><input type="radio" name="disability_type" id="disability_9"
                                value="Visual Disability">
                            Visual Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_10"
                                value="Cancer Disability">
                            Cancer Disability</label>

                        <label><input type="radio" name="disability_type" id="disability_11" value="Rare Disease">
                            Rare Disease</label>

                        <label>Other, specify: <input type="text" name="disability_type" id="disability_12">
                        </label>
                    </div>
                </div>


                <h2 id="employment-status">EMPLOYMENT STATUS</h2>

                <div class="form-field required-field">
                    <label for="">Employment Status</label>
                    <input type="radio" id="employedCheckbox1" onclick="toggleEmployed(true) "> Employed
                    <input type="radio" id="unemployedCheckbox1" onclick="toggleEmployed(false)">
                    Unemployed
                    <span class="error-message" style="display: none;">This field is required.</span>
                </div>
                <div class="sub-field" id="employedCheckboxes1" style="display: none;">
                    <label><input type="radio" name="employedType" value="Wage Employed"> Wage
                        Employed</label><br>
                    <label><input type="radio" name="employedType" value="Self Employed"> Self
                        Employed</label>
                    <span class="error-message" style="display: none;">This field is required.</span>
                </div>

                <div class="sub-field" id="unemployedCheckboxes1" style="display: none;">
                    <label><input type="radio" name="unemployedReason"
                            value="New
                            Entrant/Fresh Graduate" onclick="hideTextboxes()">
                        New
                        Entrant/Fresh Graduate</label><br>
                    <label><input type="radio" name="unemployedReason"
                            value="New
                            Entrant/Fresh Graduate" onclick="hideTextboxes()">
                        Finished
                        Contract</label><br>
                    <label><input type="radio" name="unemployedReason"
                            value="New
                            Entrant/Fresh Graduate" onclick="hideTextboxes()">
                        Resigned</label><br>
                    <label><input type="radio" name="unemployedReason"
                            value="New
                            Entrant/Fresh Graduate" onclick="hideTextboxes()">
                        Retired</label><br>
                    <label><input type="radio" name="unemployedReason"
                            onclick="toggleUnemployed(false, 'textbox1')" value="Terminated/Laid off (Local)">
                        Terminated/Laid off (Local)</label><br>
                    <label><input type="radio" name="unemployedReason" onclick="toggleUnemployed(true, 'textbox1')"
                            value="Terminated/Laid off (Abroad)">
                        Terminated/Laid off (abroad)</label>
                    <input type="text" id="textbox1" name="terminatedAbroad_country" style="display: none;"><br>
                    <label><input type="radio" name="unemployedReason"
                            onclick="toggleUnemployed(true, 'textbox2')"> Others, specify</label>
                    <input type="text" id="textbox2" name="otherEmployment"style="display: none;">
                </div>
                <div class="form-field">
                    Are you actively looking for work?
                    <input type="radio" name="activelyLooking" value="yes" required> Yes
                    <input type="radio" name="activelyLooking" value="no"> No




                </div>
                <div class="form-field">
                    Willing to work immediately?
                    <input type="radio" name="willingToWorkYes" value="yes"
                        onclick="lockTextBox('willingTextbox')"> Yes
                    <input type="radio" name="willingToWorkNo" value="no"
                        onclick="unlockTextBox('willingTextbox')"> No<br>
                    <label for="willingTextbox">If no, when?</label>
                    <input type="text" id="willingTextbox" class="hidden">
                    <span class="error-message" style="display: none;">This field is required.</span>
                </div>
                <div class="form-field">
                    How long have you been looking for work?
                    <input type="text" name="lookingDuration" placeholder="in months" required>
                    <span class="error-message" style="display: none;">This field is required.</span>
                </div>
                <div class="form-field">
                    Are you a 4Ps beneficiary?
                    <input type="radio" name="fpsBeneficiary" value="yes" onclick="unlockTextBox('4psTextbox')"
                        required> Yes
                    <input type="radio" name="fpsBeneficiary" value="no" onclick="lockTextBox('4psTextbox')">
                    No<br>
                    <label for="4psTextbox">Household ID No.</label>
                    <input type="text" id="householdid" name="householdid" class="hidden">
                    <span class="error-message" style="display: none;">This field is required.</span>
                </div>

                <h2 id="job-pref">JOB PREFERENCES</h2>
                <div class="form-field">
                    PREFERRED OCCUPATION<br>
                    1. <input type="text" id="prefOcc1" name="prefOcc1"><br>
                    2.<input type="text" id="prefOcc2" name="prefOcc2"><br>
                    3.<input type="text" id="prefOcc3" name="prefOcc3"><br>
                    4.<input type="text" id="prefOcc4" name="prefOcc4">
                </div>
                <div class="form-field">
                    <label for="">PREFERRED WORK LOCATION</label>
                    <input type="radio" name="prefWork" id="localCheckbox2" onclick="toggleLocation(true)">Local
                    <input type="radio" name="prefWork" id="overseasCheckbox2"
                        onclick="toggleLocation(false)">Overseas
                </div>
                <div class="form-field">
                    <div id="localCheckboxes2" style="display: none;">
                        <label>1.<input type="text" name="local1"></label>
                        <label>2.<input type="text" name="local2"></label>
                        <label>3.<input type="text" name="local3"></label>
                    </div>
                </div>
                <div class="form-field">
                    <div id="overseasCheckboxes2" style="display: none;">
                        <label>1.<input type="text" name="overseas1"></label>
                        <label>2.<input type="text" name="overseas2"></label>
                        <label>3.<input type="text" name="overseas3"></label>
                    </div>
                </div>
                <div class="form-field">
                    Expected Salary (Range):<input type="text" name="salary">
                </div>
                <div class="form-field">
                    Passport No.:<br><input type="text" name="passport">
                </div>
                <div class="form-field">
                    Expiry Date:<br><input type="text" name="expiry">
                </div>

                <h2 id="language">LANGUAGE/DIALECT PROFICIENCY</h2>

                <div class="form-field">
                    <table id="languageTable">
                        <tr>
                            <th>Language</th>
                            <th>Read</th>
                            <th>Write</th>
                            <th>Speak</th>
                            <th>Understand</th>
                        </tr>
                        <tr>
                            <td>
                                English:
                            </td>
                            <td align="center">
                                <input type="checkbox" name="readEN" value="Read">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="writeEN" value="Write">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="speakEN" value="Speak">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="understandEN" value="Understand">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Filipino:
                            </td>

                            <td align="center">
                                <input type="checkbox" name="readFil" value="Read">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="writeFil" value="Write">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="speakFil" value="Speak">
                            </td>
                            <td align="center">
                                <input type="checkbox" name="understandFil" value="Understand">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Others:<input type="text" id="otherLanguage" name="otherLanguage" />
                            <td align="center">
                                <input type="checkbox" id="readOther" name="readOther" value="Read" disabled>
                            </td>
                            <td align="center">
                                <input type="checkbox" id="writeOther" name="writeOther" value="Write" disabled>
                            </td>
                            <td align="center">
                                <input type="checkbox" id="speakOther" name="speakOther" value="Speak" disabled>
                            </td>
                            <td align="center">
                                <input type="checkbox" id="understandOther" name="understandOther"
                                    value="Understand" disabled>
                            </td>
                            </td>

                        </tr>
                    </table>
                </div>

                <h2 id="educ-background">EDUCATIONAL BACKGROUND</h2>

                <div class="form-field">
                    ELEMENTARY
                </div>
                <div class="form-field">
                    School<br><input type="text" name="elemSchool"><br>
                    <!-- Course<br><input type="text" name="elemSec" ><br>-->
                    Year graduated<br><input type="text" name="elemGradYear"><br>
                </div>
                <div class="form-field">
                    Are you an undergraduate?
                    <input type="radio" name="elemUndergrad"
                        onclick="unlockTextBox('elemLevel'); unlockTextBox('elemYear');">Yes
                    <input type="radio" name="elemUndergrad"
                        onclick="lockTextBox('elemLevel'); lockTextBox('elemYear');">No
                    <br>
                    What Level?<br><input type="text" id="elemLevel" class="hidden"><br>
                    Year Last Attended<br><input type="text" id="elemYear" class="hidden"><br>
                </div>
                <div class="form-field">
                    Awards Received<br><input type="text" name="award_elem" id="elemAward"><br>
                </div>

                <div class="form-field">
                    SECONDARY
                </div>
                <div class="form-field">
                    School<br><input type="text" id="secondSchool" name="secondSchool" required><br>
                    <!--  Course<br><input type="text" name="secondSec" required><br>-->
                    Year graduated<br><input type="text" id="secondGradYear" name="secondGradYear" required><br>
                </div>
                <div class="form-field">
                    Are you an undergraduate?
                    <input type="radio" name="secondUndergrad"
                        onclick="unlockTextBox('secondLevel'); unlockTextBox('secondYear');">Yes
                    <input type="radio" name="secondUndergrad"
                        onclick="lockTextBox('secondLevel'); lockTextBox('secondYear');">No
                    <br>
                    What Level?<br><input type="text" id="secondLevel" class="hidden"><br>
                    Year Last Attended<br><input type="text" id="secondYear" class="hidden"><br>
                </div>
                <div class="form-field">
                    Awards Received<br><input type="text" name="award_high" id="secondAward"><br>
                </div>

                <div class="form-field">
                    TERTIARY
                </div>
                <div class="form-field">
                    School<br><input type="text" id="terSchool" name="terSchool" required><br>
                    Course<br><input type="text"  id="terSec" required><br>
                    Year graduated<br><input type="text" name="terGradYear" required><br>
                </div>
                <div class="form-field">
                    Are you an undergraduate?
                    <input type="radio" name="terUndergrad"
                        onclick="unlockTextBox('terLevel'); unlockTextBox('terYear');">Yes
                    <input type="radio" name="terUndergrad"
                        onclick="lockTextBox('terLevel'); lockTextBox('terYear');">No
                    <br>
                    What Level?<br><input type="text" id="terLevel" class="hidden"><br>
                    Year Last Attended<br><input type="text" name="terYear" id="terYear" class="hidden"><br>
                </div>
                <div class="form-field">
                    Awards Received<br><input type="text" name="award_ter" id="terAward"><br>
                </div>

                <div class="form-field">
                    GRADUATE STUDIES
                </div>
                <div class="form-field">
                    School<br><input type="text" name="gradSchool"><br>
                    Course<br><input type="text" name="gradSec"><br>
                    Year graduated<br><input type="text" name="gradYear"><br>
                </div>
                <div class="form-field">
                    Are you an undergraduate?
                    <input type="radio" name="gradUndergrad"
                        onclick="unlockTextBox('gradLevel'); unlockTextBox('gradYear');">Yes
                    <input type="radio" name="gradUndergrad"
                        onclick="lockTextBox('gradLevel'); lockTextBox('gradYear');">No
                    <br>
                    What Level?<br><input type="text" id="undergradLevel" name="undergradLevel" class="hidden"><br>
                    Year Last Attended<br><input type="text" id="undergradYear" name="undergradYear" class="hidden"><br>
                </div>
                <div class="form-field">
                    Awards Received<br><input type="text" name="award_grad" id="gradAward"><br>
                </div>

                <h2 id="training">CERTIFICATION/TRAINING</h2>
                <div class="form-field">
                    Training/Vocational Course<br><input type="text" id="training1" name="training1"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-from1" name="date-from1" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-to1" name="date-to1" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    Training Institution<br><input type="text" id="trainingIns" name="trainingIns"><br>
                </div>
                <div class="form-field">
                    Certificates Received<br><input type="text" id="certificates" name="certificates"><br>
                </div>
                <br>
                <div class="form-field">
                    Training/Vocational Course<br><input type="text" id="training1" name="training1"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-from2" name="date-from2" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-to2" name="date-to2" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    Training Institution<br><input type="text" id="trainingIns"><br>
                </div>
                <div class="form-field">
                    Certificates Received<br><input type="text" id="certificates"><br>
                </div>
                <br>
                <div class="form-field">
                    Training/Vocational Course<br><input type="text" id="training1"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-from3" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-to3" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    Training Institution<br><input type="text" id="trainingIns"><br>
                </div>
                <div class="form-field">
                    Certificates Received<br><input type="text" id="certificates"><br>
                </div>

                <h2 id="eligibility">ELIGIBILITY/LICENSE</h2>

                <div class="form-field">
                    <label for="suffix">ELIGIBILITY(Civil Service)</label>
                    <select id="suffix">
                        <option value="">Select</option>
                        <option value="CEOE" name="eligibility">Career Executive Officer Eligibility</option>
                        <option value="CESO" name="eligibility">Career Executive Service Offer</option>
                        <option value="CESE" name="eligibility">Career Executive Service Eligibility</option>
                        <option value="CSP" name="eligibility">Career Service Professional</option>
                        <option value="CSSP" name="eligibility">Career Service Sub-Professional</option>
                        <option value="DE" name="eligibility">Data Encoder</option>
                        <option value="FO" name="eligibility">Fire Officer 2</option>
                        <option value="FES" name="eligibility">Forestry Extension Service</option>
                        <option value="PO" name="eligibility">Police Officer I</option>
                        <option value="RA" name="eligibility">R.A 1080</option>
                        <option value="ST" name="eligibility">Soil Technologist</option>
                        <option value="SG" name="eligibility">Stenographer</option>
                        <!-- Add more options as needed -->
                    </select>
                    <label for="date-birth">Date of Examination</label>
                    <div class="input-with-icon">
                        <input type="text" name="eligibilityExamDate" id="date-exam" placeholder="Select date and time">
                        <i class="far fa-calendar-alt icon"></i>
                    </div>
                </div>
                <div class="form-field">
                    <label for="suffix">PROFESSIONAL LICENSE(PRC)</label>
                    <select id="suffix">
                        <option value="">Select</option>
                        <option value="CEOE">Aeronautical Engineer</option>
                        <option value="CESO">Agricultural Engineer</option>
                        <option value="CESE">Agriculturist</option>
                        <option value="CSP">Air Traffic Control License</option>
                        <option value="CSSP">Air Transport Rating/Filght</option>
                        <option value="DE">Air-Conditioning Refrigeration</option>
                        <option value="FO">Aircraft Mechanic License</option>
                        <option value="FES">Aircraft Specialist</option>
                        <option value="PO">Airframe and Powerplant Mechanic License</option>
                        <option value="RA">Airline Transport Pilot</option>
                        <option value="ST">Airways Communicator License</option>
                        <option value="SG">Architect</option>
                        <!-- Add more options as needed -->
                    </select>
                    <label for="date-birth">Valid Until</label>
                    <div class="input-with-icon">
                        <input type="text" id="date-valid" placeholder="Select date and time">
                        <i class="far fa-calendar-alt icon"></i>
                    </div>
                </div>

                <h2 id="work-exp">WORK EXPERIENCE</h2>
                <div class="form-field">
                    Company Name<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Address<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Position<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-from" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-to" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    <label for="suffix">STATUS</label>
                    <select id="job1Status">
                        <option value="">Select</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Probationary">Probationary</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <br>
                <div class="form-field">
                    Company Name<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Address<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Position<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-from" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-to" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    <label for="suffix">STATUS</label>
                    <select id="job2Status">
                        <option value="">Select</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Contractual">Contractual</option>
                        <option value="Part-timeC">Part-time</option>
                        <option value="Probationary">Probationary</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <br>
                <div class="form-field">
                    Company Name<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Address<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    Position<br><input type="text" id="company"><br>
                </div>
                <div class="form-field">
                    <table>
                        <tr>
                            <td>
                                <label for="date-from1">Date From</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-from" placeholder="Select date">
                            </td>
                            <td>
                                <label for="date-to1">Date To</label>
                                <i class="far fa-calendar-alt icon"></i>
                                <input type="text" id="date-work-to" placeholder="Select date">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form-field">
                    <label for="suffix">STATUS</label>
                    <select id="job3Status">
                        <option value="">Select</option>
                        <option value="Permanent">Permanent</option>
                        <option value="CEContractualSO">Contractual</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Probationary">Probationary</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <br>

                <h2 id="other-skills">OTHER SKILLS</h2>
                <div class="form-field">
                    <table id="otherSkillsTable">
                        <tr>
                            <td><input type="checkbox"  value="Auto Mechanic">Auto Mechanic
                            </td>
                            <td><input type="checkbox"  value="Beautician">Beautician</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"  value="Carpentry Work">Carpentry
                                Work</td>
                            <td><input type="checkbox"  value="Computer Literate">Computer
                                Literate</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"  value="Domestic Chores">Domestic
                                Chores</td>
                            <td><input type="checkbox"  value="Driver">Driver</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" value="Electrician">Electrician
                            </td>
                            <td> <input type="checkbox"  value="Embroidery">Embroidery</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox"  value="Gardening">Gardening</td>
                            <td> <input type="checkbox"  value="Masonry">Masonry</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" value="Painter/Artist">Painter/Artist</td>
                            <td> <input type="checkbox" value="Painting jobs">Painting
                                jobs</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" value="Photography">Photography
                            </td>
                            <td> <input type="checkbox" value="Plumbing">Plumbing</td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" value="Sewing Dresses">Sewing
                                Dresses</td>
                            <td> <input type="checkbox" value="Stenography">Stenography
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="checkbox" value="Tailoring">Tailoring</td>
                        </tr>

                    </table>
                </div>
                <div class="form-field">
                    Others:<br><input type="text" name='otherSkillsInput' id="otherSkills"><br>
                </div>

                <h2 id="authorization">CERTIFICATION/AUTHORIZATION</h2>
                <div class="tacbox">

                    <input id="checkbox" type="checkbox" required>

                    <label for="checkbox"> This is to certify that all data/information
                        that I have
                        provided in this form are true to the best of my knowledge.This
                        Is also to authorized the DOLE to include my profile in the PESO Employment Information
                        System ,
                        which is a subsystem of the
                        PhilJobNet. It is understood that my name shall be made available to employers who have
                        access
                        to
                        the Registry. I am also aware
                        that DOLE is not obliged to seek employment on my behalf.
                    </label>
                </div>
                <button type="submit" value="Submit" class="register_submit"
                    id="submit-btn">Submit</button><br><br>

                </form>
            </div>
        </div>
    </div>
    <!-- ====================== END REQUIREMENTS =======================-->



    <!--=============== MAIN JS ===========-->
    <script src="{{ asset('import/js/jobseeker/main.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/unlock_dropdown.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/date_picker.js') }}"></script>
    <!-- <script src="{{ asset('import/js/jobseeker/image_pdf_upload.js') }}"></script>-->
    <script src="{{ asset('import/js/jobseeker/sidebar.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/toggle_employment.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/toggle_location.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/hide_textbox.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/format_number.js') }}"></script>
    <script src="{{ asset('import/js/jobseeker/toggle_textbox.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--<script src="{{ asset('import/js/jobseeker/redirecttonextpart.js') }}"></script>-->
    <script>
        const checkbox = document.getElementById('checkbox');
        const submitBtn = document.getElementById('submit-btn');


        const otherLanguageInput = document.getElementById('otherLanguage');
        const readOtherCheckbox = document.getElementById('readOther');
        const writeOtherCheckbox = document.getElementById('writeOther');
        const speakOtherCheckbox = document.getElementById('speakOther');
        const understandOtherCheckbox = document.getElementById('understandOther');

        otherLanguageInput.addEventListener('input', () => {
            if (otherLanguageInput.value.trim() !== '') {
                readOtherCheckbox.disabled = false;
                writeOtherCheckbox.disabled = false;
                speakOtherCheckbox.disabled = false;
                understandOtherCheckbox.disabled = false;

                readOtherCheckbox.checked = false;
                writeOtherCheckbox.checked = false;
                speakOtherCheckbox.checked = false;
                understandOtherCheckbox.checked = false;
            } else {
                readOtherCheckbox.disabled = true;
                writeOtherCheckbox.disabled = true;
                speakOtherCheckbox.disabled = true;
                understandOtherCheckbox.disabled = true;
            }
        });

        const enLang = [];
        const filLang = [];
        const otherLang = [];
        const otherLanguage = document.getElementById('otherLanguage').value;

        // Disable submit button on first load
        submitBtn.disabled = true;
        submitBtn.style.backgroundColor = '#ccc'; // Change button color to gray when disabled
        submitBtn.style.color = '#666'; // Change button text color to dark gray when disabled
        submitBtn.style.cursor = 'not-allowed'; // Change cursor to not-allowed when disabled

        function checkRequiredFields() {
            var form = document.getElementById('jsRegistrationForm');
            var requiredFields = form.querySelectorAll('[required]');
            var isValid = true;

            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('invalid');
                } else {
                    field.classList.remove('invalid');
                }
            });

            return isValid;
        }

        function checkOtherLanguage(value) {
            const checkboxes = document.querySelectorAll('input[name^="other"]');
            if (value.trim() === '') {
                checkboxes.forEach((checkbox) => {
                    checkbox.disabled = true;
                });
            } else {
                checkboxes.forEach((checkbox) => {
                    checkbox.disabled = false;
                });
            }
        }

        function getLanguageArrays() {
            //CLEAR array
            enLang.length = 0;
            filLang.length = 0;
            otherLang.length = 0;


            // English
            enLang.push(document.querySelector('input[name="readEN"]').checked ? 1 : 0);
            enLang.push(document.querySelector('input[name="writeEN"]').checked ? 1 : 0);
            enLang.push(document.querySelector('input[name="speakEN"]').checked ? 1 : 0);
            enLang.push(document.querySelector('input[name="understandEN"]').checked ? 1 : 0);

            // Filipino
            filLang.push(document.querySelector('input[name="readFil"]').checked ? 1 : 0);
            filLang.push(document.querySelector('input[name="writeFil"]').checked ? 1 : 0);
            filLang.push(document.querySelector('input[name="speakFil"]').checked ? 1 : 0);
            filLang.push(document.querySelector('input[name="understandFil"]').checked ? 1 : 0);

            // Other
            otherLang.push(document.querySelector('input[name="readOther"]').checked ? 1 : 0);
            otherLang.push(document.querySelector('input[name="writeOther"]').checked ? 1 : 0);
            otherLang.push(document.querySelector('input[name="speakOther"]').checked ? 1 : 0);
            otherLang.push(document.querySelector('input[name="understandOther"]').checked ? 1 : 0);

            return {
                enLang,
                filLang,
                otherLang,
                otherLanguage
            };
        }



        $(document).ready(function(e) {

            $("#jsRegistrationForm").on('submit', (function(e) {
                e.preventDefault();


                const form = document.getElementById('jsRegistrationForm');

                const otherSkillsTable = document.getElementById("otherSkillsTable");
                const checkboxesOtherSkills = otherSkillsTable.querySelectorAll(
                    "input[type='checkbox']:checked");
                const skills = [];

                checkboxesOtherSkills.forEach((checkbox) => {
                    skills.push(checkbox.value);
                });

                const skillsString = skills.join(", ");

                getLanguageArrays();


                var checker = checkRequiredFields();
                // Custom validation logic
                // Example: Check if a file is uploaded (assuming you have an upload field)
                //  var fileUploaded = document.getElementById('choose-file').files.length > 0;

                if (!checker) {
                    //LET the required to its magic
                } else {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Jobseeker Registration, ",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Proceed",
                    }).then((result) => {
                        if (result.value) {

                            //form id employerRegistration
                            var formData = new FormData(this);

                            formData.append('enlanguage', enLang);
                            formData.append('fillanguage', filLang);
                            formData.append('otherlanguage', otherLang);

                            formData.append('otherLanguageName', otherLanguage);

                            // Append the checkbox values of Other Skills
                            formData.append('otherSkills', skillsString);

                            $.ajax({
                                url: "<?php echo config('app.url_local') . '/register_jobseeker'; ?>",
                                type: "POST",
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute(
                                        'content'),
                                },
                                success: function(value) {

                                    if (value) {
                                        Swal.fire({
                                            title: "Success!",
                                            text: "Registration successfully.",
                                            icon: "success",
                                            showCancelButton: false,
                                            showConfirmButton: true
                                        }).then((result) => {
                                            location.reload();
                                        });
                                    }
                                },
                                error: function(e) {

                                    Swal.fire({
                                        title: "Error!",
                                        text: "Some problem occurred, please try again.",
                                        icon: "error",
                                        showCancelButton: false,
                                        showConfirmButton: true,
                                        cancelButtonText: "Back"
                                    });
                                }
                            });


                        }
                    });
                }




            }));
        })

        checkbox.addEventListener('click', () => {
            if (checkbox.checked) {
                submitBtn.disabled = false;
                submitBtn.style.backgroundColor = '#4CAF50'; // Change button color to green when enabled
                submitBtn.style.color = '#fff'; // Change button text color to white when enabled
                submitBtn.style.cursor = 'pointer'; // Change cursor to pointer when enabled
            } else {
                submitBtn.disabled = true;
                submitBtn.style.backgroundColor = '#ccc'; // Change button color to gray when disabled
                submitBtn.style.color = '#666'; // Change button text color to dark gray when disabled
                submitBtn.style.cursor = 'not-allowed'; // Change cursor to not-allowed when disabled
            }
        });
    </script>


</body>
<!--=============== FOOTER ===============-->


</html>

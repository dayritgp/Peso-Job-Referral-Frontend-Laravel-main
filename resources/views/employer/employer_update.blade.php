<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js">
    </script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/employer/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/employer/jobrequirement.css') }}">

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="../images/pesologo.png">
</head>

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
        <h2>Register company profile</h2>
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
                <p>To proceed with job postings, please complete first your company profile.</p>
            </div>

        </div>
    </div>
    <div class="containerrequirements">
        <div class="sidebar">
            <a href="#employerAccount" class="sidebar-item">Employer User Account</a>
            <a href="#establishmentDetails" class="sidebar-item">Establishment Details</a>
            <a href="#establishmentContactDetails" class="sidebar-item">Establishment Contact Details</a>
            <a href="#employerLegalDocus" class="sidebar-item">Employment Legal Documents</a>
            <a href="#employerAuthorization" class="sidebar-item">Authorization</a>

        </div>
        <div class="content" id="content">
            <div class="content-item">
                <h2>EMPLOYER USER ACCOUNT</h2>
                <form id="employerRegistration" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-field">
                        <label>EMAIL ADDRESS</label>
                        <input type="email" name="email" placeholder="EMAIL ADDRESS" required>
                    </div>

                    <div class="form-field">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" id="password" placeholder="PASSWORD" required>
                    </div>

                    <h2 id="establishmentDetails">ESTABLISHMENT DETAILS</h2>
                    <div class="form-field">
                        <label for="business-name">BUSINESS NAME</label>
                        <input type="text" id="business-name" name="business_name" placeholder="Enter business name"
                            maxlength = "100" required>
                    </div>

                    <div class="form-field">
                        <label for="trade-name">TRADE NAME</label>
                        <input type="text" id="trade-name" name="trade_name" placeholder="Enter trade name"
                            maxlength = "100" required>
                    </div>


                    <div class="form-field">
                        <label for="abbreviation">ACRONYM/ABBREVIATION</label>
                        <input type="text" id="acronym" name="acronym"
                            placeholder="Enter your acronym/abbreviation" maxlength = "30">
                    </div>

                    <div class="form-field">
                        <label for="office">OFFICE</label>
                        <div class = "label-radio">
                            <label for="office"> <input type="radio" id="office" name ="business_office"
                                    value = "Main Office">
                                Main Office</label>

                            <label for="office"> <input type="radio" id="branch" name ="business_office"
                                    value = "Branch">
                                Branch</label>
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="abbreviation">TIN NUMBER</label>
                        <input type="number" id="tin" name="tin"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="xxx-xxx-xxx-xxx" required>
                    </div>

                    <div class="form-field">
                        <label for="office">EMPLOYER TYPE</label>
                        <div class="label-radio">
                            <label> <input type="radio" name="emp_type" id="public" value="public"
                                    onclick="employer_type()">
                                Public</label>

                            <label> <input type="radio" name="emp_type" id="private" value="private"
                                    onclick="employer_type()">
                                Private</label>
                        </div>


                        <div id = "div-public">
                            <div class="label-radio2">
                                <label><input type="radio" name="employer_type_desc" id="public-nga"
                                        value="public-nga">
                                    National Government Agency</label>

                                <label><input type="radio" name="employer_type_desc" id="public-lgu"
                                        value="public-lgu">
                                    Local Government Unit</label>

                                <label><input type="radio" name="employer_type_desc" id="public-gocc"
                                        value="public-gocc">
                                    Government-owned and Controlled Corporation</label>

                                <label><input type="radio" name="employer_type_desc" id="public-sluc"
                                        value="public-sluc">
                                    State/Local University or College</label>
                            </div>
                        </div>

                        <div id = "div-private">
                            <div class="label-radio2">
                                <label><input type="radio" name="employer_type_desc" id="priv-dh"
                                        value="priv-dh">
                                    Direct Hire</label>

                                <label><input type="radio" name="employer_type_desc" id="priv-lra"
                                        value="priv-lra">
                                    Local Recruitment Agency</label>

                                <label><input type="radio" name="employer_type_desc" id="prive-ora"
                                        value="priv-ora">
                                    Overseas Recruitment Agency</label>

                                <label><input type="radio" name="employer_type_desc" id="priv-174"
                                        value="priv-174">
                                    D.O 174</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-field">
                        <label for="work-force">TOTAL WORK FORCE</label>
                        <select name="total_work_force" id="work-force" required>
                            <option value="">Select employer type</option>
                            <option value="micro"> Micro(1-9) </option>
                            </option>
                            <option value="small"> Small(10-99) </option>
                            <option value="medium">Medium(100-199)</option>
                            <option value="large">Large(200 and up)</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="line-business">LINE OF BUSINESS/INDUSTRY (check BIR 2303)</label>
                        <input type="text" id="line-business" name="business_line"
                            placeholder="Enter line of business/industry eg. Legal Activities" maxlength = "100"
                            required>
                    </div>

                    <div class="form-field">
                        <label for="address">ADDRESS</label>
                        <input type="text" name="street" id="street" placeholder="Street/Village" required>
                        <input type="text" name="barangay" id="brgy" placeholder="Barangay" required>
                        <input type="text" name="municipal_city" id="city" placeholder="Municipal/City"
                            required>
                        <input type="text" name="province" id="province" placeholder="Province" required>
                        <input type="hidden" name="account_stats" value="pending">
                    </div>

                    <div class="form-field">
                        <label for="upload-logo" class="upload-label">UPLOAD COMPANY LOGO</label>
                        <div class="input-with-icon" id="icon">
                            <i class="far fa-image"></i>
                        </div>
                        <img id="uploaded-logo" src="#" alt="Uploaded Image"
                            style="display: none; max-width: 100%; margin-top: 10px;">
                    </div>

                    <div class="form-field">
                        <label for="choose-logo" class="file-button">
                            Choose file
                        </label>
                        <input type="file" id="choose-logo" name="company_logo" accept="image/*"
                            style="display: none;">
                    </div>

                    <h2 id="establishmentContactDetails">ESTABLISHMENT CONTACT DETAILS</h2>
                    <div class="form-field">
                        <label for="owner">NAME OF OWNER/PRESIDENT (FULL NAME)</label>
                        <i><input type="text" id="owner" name="owner_name"
                                placeholder="FIRST NAME + MIDDLE NAME + LAST NAME" maxlength = "150" required></i>
                    </div>

                    <div class="form-field">
                        <label for="contact-person">NAME OF CONTACT PERSON</label>
                        <input type="text" id="contact_person" name="contact_person"
                            placeholder="Enter name of contact person" maxlength = "150" required>
                    </div>

                    <div class="form-field">
                        <label for="position">POSITION</label>
                        <input type="text" id="position" name="position"
                            placeholder="Enter name of contact person" maxlength = "70" required>
                    </div>

                    <div class="form-field">
                        <label for="tel-num">TELEPHONE NUMBER</label>
                        <input type="number" id="tel-num" name="telephone" pattern="[0-9]{3}-[0-9]{4}"
                            placeholder="xxx-xxxx" required>
                    </div>

                    <div class="form-field">
                        <label for="mob-num">MOBILE NUMBER</label>
                        <input type="tel" id="mob-num" name="mobile" pattern="[0-9]{11}"
                            placeholder="eg. 09112233445" required>
                    </div>

                    <div class="form-field">
                        <label for="fax-num">FAX NUMBER</label>
                        <input type="number" id="fax-num" name="fax"
                            placeholder="eg. 122-331-001"{{-- required --}}>
                    </div>

                    <div class="form-field">
                        <label for="email-add">EMAIL ADDRESS</label>
                        <input type="email" id="email-add" name="contact_email"
                            placeholder="Enter your valid email" maxlength = "100" required>
                    </div>

                    <h2 id="employerLegalDocus">LEGAL DOCUMENTS</h2>
                    <!--==============================-->
                    <div class="form-field">
                        <label for="upload-permit" class="upload-label">Latest Business Permit</label>
                        <div class="input-with-icon" id="icon">
                            <i class="far fa-image"></i>
                        </div>
                        <img id="uploaded-permit" src="#" alt="Uploaded Image"
                            style="display: none; max-width: 100%; margin-top: 10px;">
                    </div>

                    <div class="form-field">
                        <label for="choose-permit" class="file-button">
                            Choose file
                        </label>
                        <input type="file" id="choose-permit" name="business_permit_image" accept="image/*"
                            style="display: none;">
                    </div>

                    <!--==============================-->
                    <div class="form-field">
                        {{-- <input type="file" id="upload-image" accept="image/*" style="display: none;"> --}}
                        <label for="upload-bir" class="upload-bir">BIR Form #2303 (Photocopy)</label>
                        <div class="input-with-icon" id="icon">
                            <i class="far fa-image"></i>
                        </div>
                        <img id="uploaded-bir" src="#" alt="Uploaded Image"
                            style="display: none; max-width: 100%; margin-top: 10px;">
                    </div>

                    <div class="form-field">
                        <label for="choose-bir" class="file-button">
                            Choose file
                        </label>
                        <input type="file" id="choose-bir" name="BIR_form" accept="image/*" required
                            style="display: none;">
                    </div>
                    <!--==============================-->

                    <div class="form-field">
                        <label for="upload-profile" class="upload-label">Company Profile</label>
                        <div class="input-with-icon" id="icon">
                            <i class="far fa-image"></i>
                        </div>
                        <img id="uploaded-profile" src="#" alt="Uploaded Image"
                            style="display: none; max-width: 100%; margin-top: 10px;">
                    </div>



                    <div class="form-field">
                        <label for="choose-profile" class="file-button">
                            Choose file
                        </label>
                        <input type="file" id="choose-profile" name="company_profile" accept="image/*" required
                            style="display: none;">
                    </div>

                    <h2 id="employerAuthorization">Certification/Authorization</h2>
                    <!--==============================-->

                    <div class="tacbox">
                        <input id="checkbox" type="checkbox" required>
                        <label for="checkbox"> This is to certify that all data/information provided in this form are
                            true
                            to the best of my knowledge. This is also to authorized the DOLE to include
                            our profile in the PESO Employment Information System (PEIS). It is understood
                            that relevant information provided shall be made available to those who have
                            access to PEIS. I am also aware that DOLE is not obliged to seek applicants on
                            our behalf.</label>
                    </div>
                    <button type="submit" value="Submit" class="register_submit" id="submit-btn">Submit</button>

                </form>

            </div>

        </div>
    </div>
    </div>
    <!-- ====================== END REQUIREMENTS =======================-->


    <footer class="footer">
        @include('extensions/footer')
    </footer>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('import/js/employer/main.js') }}"></script>
    <script src="{{ asset('import/js/employer/register.js') }}"></script>
    <script src="{{ asset('import/js/employer/register_sidebar.js') }}"></script>
    <script src="{{ asset('import/js/employer/register_forms.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function checkRequiredFields() {
            var form = document.getElementById('employerRegistration');
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


        const dynamicKey = 'age';
        const dynamicValue = 30;
        const dynamicObject = {
            name: 'Aman',
        };
        const checkbox = document.getElementById('checkbox');
        const submitBtn = document.getElementById('submit-btn');

        // Disable submit button on first load
        submitBtn.disabled = true;
        submitBtn.style.backgroundColor = '#ccc'; // Change button color to gray when disabled
        submitBtn.style.color = '#666'; // Change button text color to dark gray when disabled
        submitBtn.style.cursor = 'not-allowed'; // Change cursor to not-allowed when disabled


        // Using bracket notation to
        //set properties dynamically
        dynamicObject[dynamicKey] = dynamicValue;
        dynamicObject['city'] = 'Noida';

        document.write(dynamicObject);

        $(document).ready(function(e) {
            $("#employerRegistration").on('submit', (function(e) {
                e.preventDefault();

                var checker = checkRequiredFields();
                // Custom validation logic
                // Example: Check if a file is uploaded (assuming you have an upload field)
                //  var fileUploaded = document.getElementById('choose-file').files.length > 0;

                if (!checker) {
                    //LET the required to its magic
                } else {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Employer Registration, ",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Proceed",
                    }).then((result) => {
                        if (result.value) {

                            //form id employerRegistration
                            var formData = new FormData(this);

                            $.ajax({
                                url: "<?php echo config('app.url_local') . '/register_employer'; ?>",
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

</html>

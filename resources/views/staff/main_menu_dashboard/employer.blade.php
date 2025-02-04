<!-- ====================== HIRED =======================-->

<div id="employer" style="display: none;">
    <h2>Employers</h2>
    <div class="table-container">

        <div class="button-container">
            <div class="tab-menu">
                <button class="tab-button active" onclick="openTab(event, 'employer-tab3', 'employer')">Approved</button>
                <button class="tab-button" onclick="openTab(event, 'employer-tab4', 'employer')">Pending</button>
            </div>
            <div style="text-align: right;">
                <button class="btn btn-primary"
                    onclick="window.location.href = '{{ route('employer.registration') }}'">Add Employer</button>
            </div>
        </div>
        <div id="employer-tab3" class="tab-content active" style="max-height: 380px;">
            <table id="dashboardEmployerActive" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Employer ID</th>
                        <th>Business Name</th>
                        <th>Trade Name</th>
                        <th>Owner Name</th>
                        <th>Employer Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="employerApproved">
                    <!-- Job data will be populated here dynamically -->
                </tbody>
            </table>
        </div>
        <div id="employer-tab4" class="tab-content" style="max-height: 380px;">
            <table id="dashboardEmployerPending" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Employer ID</th>
                        <th>Business Name</th>
                        <th>Trade Name</th>
                        <th>Owner Name</th>
                        <th>Employer Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="employerPending">
                    <!-- Job data will be populated here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>


<div id="myModalEmployerTab1" class="custom-modal">
    <div class="custom-modal-content">
        <span class="close">&times;</span>
        <div class="modal-header">
            <h2>EMPLOYER USER ACCOUNT</h2>
        </div>
        <div class="modal-body">
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
                    <input type="text" id="acronym" name="acronym" placeholder="Enter your acronym/abbreviation"
                        maxlength = "30">
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
                    <input type="number" id="tin" name="tin" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}"
                        placeholder="xxx-xxx-xxx-xxx" required>
                </div>


                <div class= "form-field">
                    <label for="office">EMPLOYER TYPE</label>
                    <label> <input type="radio" name="emp_type" id="public" value="public"
                            onclick="employer_type()">
                        Public</label>
                    <label> <input type="radio" name="emp_type" id="private" value="private"
                            onclick="employer_type()">
                        Private</label>

                    <div class="modal-body">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                        </label>
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
                            <label><input type="radio" name="employer_type_desc" id="priv-dh" value="priv-dh">
                                Direct Hire</label>

                            <label><input type="radio" name="employer_type_desc" id="priv-lra" value="priv-lra">
                                Local Recruitment Agency</label>

                            <label><input type="radio" name="employer_type_desc" id="prive-ora" value="priv-ora">
                                Overseas Recruitment Agency</label>

                            <label><input type="radio" name="employer_type_desc" id="priv-174" value="priv-174">
                                D.O 174</label>
                        </div>
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
                placeholder="Enter line of business/industry eg. Legal Activities" maxlength = "100" required>
        </div>

        <div class="form-field">
            <label for="address">ADDRESS</label>
            <input type="text" name="street" id="street" placeholder="Street/Village" required>
            <input type="text" name="barangay" id="brgy" placeholder="Barangay" required>
            <input type="text" name="municipal_city" id="city" placeholder="Municipal/City" required>
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
            <input type="file" id="choose-logo" name="company_logo" accept="image/*" style="display: none;">
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
            <input type="text" id="position" name="position" placeholder="Enter name of contact person"
                maxlength = "70" required>
        </div>

        <div class="form-field">
            <label for="tel-num">TELEPHONE NUMBER</label>
            <input type="number" id="tel-num" name="telephone" pattern="[0-9]{3}-[0-9]{4}"
                placeholder="xxx-xxxx" required>
        </div>

        <div class="form-field">
            <label for="mob-num">MOBILE NUMBER</label>
            <input type="tel" id="mob-num" name="mobile" pattern="[0-9]{11}" placeholder="eg. 09112233445"
                required>
        </div>

        <div class="form-field">
            <label for="fax-num">FAX NUMBER</label>
            <input type="number" id="fax-num" name="fax" placeholder="eg. 122-331-001"{{-- required --}}>
        </div>

        <div class="form-field">
            <label for="email-add">EMAIL ADDRESS</label>
            <input type="email" id="email-add" name="contact_email" placeholder="Enter your valid email"
                maxlength = "100" required>
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
            <input type="file" id="choose-bir" name="BIR_form" accept="image/*" required style="display: none;">
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

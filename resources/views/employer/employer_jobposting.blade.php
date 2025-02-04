<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">


    <title>Job Post Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('import/css/employer/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('import/css/employer/jobrequirement.css') }}">

    <title>Public Employment Service Office | PESO-Gensan</title>
    <link rel="icon" href="../images/pesologo.png">
</head>

<style>
    #addJobModal {
        width: 70%;
        margin: 0 auto
    }

    .close-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .job-list-container {
        max-width: 100%;
        margin: 40px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .job-list-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .job-list-header h2 {
        margin: 0;
    }

    .float-right {
        float: right;
    }

    .add-job-btn {
        margin-left: auto;
        /* push the button to the right side */
    }

    .job-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
    }

    .job-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        /* updated width to 60% */

    }

    .job-card:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-weight: bold;
        margin-top: 0;
    }

    .card-text {
        margin-bottom: 10px;
    }

    .btn-secondary {
        background-color: #666;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-secondary:hover {
        background-color: #555;
    }

    .btn-primary {
        background-color: #337ab7;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #23527c;
    }
</style>

<body>
    <!-- Header and navigation content -->
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
    <div class="container">
        <h1 class="display-4">Job Post Form</h1>
        <div class="button-container">
            <button type="button" class="btn btn-primary float-right" id="add-new-job-post"
                onclick="launchJobPostRegistration()">Add new Job Post</button>
        </div>
        <form id="job-post-form">
            <section>
                <h2 class="mb-3">Job Posting Information</h2>
                <div class="form-group">
                    <label for="barangay">Barangay:</label>
                    <input type="text" class="form-control" id="barangay" name="barangay">
                </div>
                <div class="form-group">
                    <label for="muni_city">Municipality/City:</label>
                    <input type="text" class="form-control" id="muni_city" name="muni_city">
                </div>
                <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" class="form-control" id="province" name="province">
                </div>



                <div class="form-group">
                    <label for="establishmentName">Establishment Name:</label>
                    <input type="text" class="form-control" id="establishmentName" name="establishmentName">
                </div>
                <div class="form-group">
                    <label for="industry">Industry:</label>
                    <input type="text" class="form-control" id="industry" name="industry">
                </div>
                <div class="form-group">
                    <label for="prepared_by">Prepared By:</label>
                    <input type="text" class="form-control" id="prepared_by" name="prepared_by">
                </div>
                <div class="form-group">
                    <label for="designation">Designation:</label>
                    <input type="text" class="form-control" id="designation" name="designation">
                </div>
                <div class="form-group">
                    <label for="posting_date">Posting Date:</label>
                    <input type="date" class="form-control" id="posting_date" name="posting_date">
                </div>
                <div class="form-group">
                    <label for="valid_until">Valid Until:</label>
                    <input type="date" class="form-control" id="valid_until" name="valid_until">
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" name="contact">
                </div>
            </section>
            <section>
                <h2 class="mb-3">Job List</h2>
                <div class="job-list-container">
                    <div class="job-list-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="add-new-job-post-list"
                            data-target="#addJobModal">Add Job Information</button>
                    </div>
                    <ul id="job-list" class="job-list">
                        <!-- Add more list job as needed -->

                    </ul>
                </div> <!-- Add Job Modal -->
                <div id="addJobModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group"> <label for="position">Position</label> <input type="text"
                                        class="form-control" id="position" name = "position"
                                        placeholder="Enter position"> </div>
                                <div class="form-group"> <label for="min_education_req">Minimum Education
                                        Requirement</label> <input type="text" class="form-control"
                                        id="min_education_req" name = "min_education_req"
                                        placeholder="Enter minimum education requirement">
                                </div>
                                <div class="form-group"> <label for="specialization_req">Specialization
                                        Requirement</label>
                                    <textarea class="form-control" id="specialization_req" name="specialization_req"
                                        placeholder="Enter specialization requirement"></textarea>
                                </div>
                                <div class="form-group"> <label for="years_experience">Years of Experience</label>
                                    <input type="number" class="form-control" id="years_experience"
                                        name = "years_experience" placeholder="Enter years of experience">
                                </div>
                                <div class="form-group"> <label for="age_pref">Age Preference</label> <input
                                        type="text" class="form-control" id="age_pref" name = "age_pref"
                                        placeholder="Enter age preference"> </div>
                                <div class="form-group"> <label for="description">Job Description</label>
                                    <textarea class="form-control" id="description" name="description"placeholder="Enter job description"></textarea>
                                </div>
                                <div class="form-group"> <label for="nature_work">Nature of Work</label> <select
                                        class="form-control" id="nature_work">
                                        <option name = "nature_work" value="Permanent">Permanent</option>
                                        <option name = "nature_work" value="Temporary">Temporary</option>
                                        <option name = "nature_work" value="Contractual">Contractual</option>
                                    </select> </div>
                                <div class="form-group"> <label for="place_work">Place of Work</label> <input
                                        type="text" class="form-control" id="place_work" name="place_work"
                                        placeholder="Enter place of work"> </div>
                                <div class="form-group"> <label for="salary">Salary</label> <input type="text"
                                        class="form-control" id="salary" name="salary"
                                        placeholder="Enter salary"> </div>
                                <div class="form-group"> <label for="vacancy_count">Vacancy Count</label> <input
                                        type="number" class="form-control" id="vacancy_count" name="vacancy_count"
                                        placeholder="Enter vacancy count"> </div>
                                <div class="form-group"> <label for="status">Status</label> <input type="text"
                                        class="form-control" id="status" name="status"
                                        placeholder="Enter status"> </div>

                                <div class="form-group">
                                    <label for="others">Others</label>
                                    <textarea class="form-control" id="others" name="others" placeholder="Enter others"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="pwd_accept">PWD Acceptance (Yes/No)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="pwd_accept"
                                            name="pwd_accept" value="Yes" onchange="togglePwdInput(this)">
                                        <label class="form-check-label" for="pwd_accept_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="pwd_accept"
                                            name="pwd_accept" value="No" onchange="togglePwdInput(this)" checked>
                                        <label class="form-check-label" for="pwd_accept_no">No</label>
                                    </div>
                                </div>
                                <div class="form-group" id="pwd-input-group" style="display: none;">
                                    <label for="pwd_yes">PWD Yes (if applicable)</label>
                                    <input type="text" class="form-control" id="pwd_yes" name="pwd_yes"
                                        placeholder="Enter PWD">
                                </div>
                                <div class="form-group">
                                    <label for="returning_ofw_accept">Returning OFW Acceptance (Yes/No)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="returning_ofw_accept_yes"
                                            name="returning_ofw_accept" value="Yes">
                                        <label class="form-check-label" for="returning_ofw_accept_yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="returning_ofw_accept_no"
                                            name="returning_ofw_accept" value="No" checked>
                                        <label class="form-check-label" for="returning_ofw_accept_no">No</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="education_level">Education Level</label>
                                    <input type="text" class="form-control" id="education_level"
                                        name="education_level" placeholder="Enter education level">
                                </div>
                                <div class="form-group">
                                    <label for="license">License (if applicable)</label>
                                    <textarea class="form-control" id="license" name="license" placeholder="Enter license (if applicable)"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="certification">Certification (if applicable)</label>
                                    <textarea class="form-control" id="certification" name="certification"
                                        placeholder="Enter certification (if applicable)"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="course">Course (if applicable)</label>
                                    <textarea class="form-control" id="course" name="course" placeholder="Enter course (if applicable)"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="eligibility">Eligibility (if applicable)</label>
                                    <textarea class="form-control" id="eligibility" name="eligibility" placeholder="Enter eligibility (if applicable)"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <input type="text" class="form-control" id="language" name="language"
                                        placeholder="Enter language">
                                </div>

                        </div>
                        <button type="submit" class="btn btn-primary" id="add-new-job-post-list-info">Add
                            Job</button>

                    </div>
                </div>
        </form>
    </div>
    </div>
    </div>
    </section>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        let jobListArray = [];
        const jobList = document.getElementById('job-list');

        document.addEventListener('DOMContentLoaded', function() {

            // Call the generateJobCards function when the form loads
            generateJobCards();

            const addJobButton = document.querySelector('#addJobModal button[type="submit"]');
            addJobButton.addEventListener('click', function(event) {
                event.preventDefault();

                // Get the form data
                const formData = {
                    id: jobListArray.length + 1,
                    position: document.getElementById('position').value,
                    minEducationReq: document.getElementById('min_education_req').value,
                    specializationReq: document.getElementById('specialization_req').value,
                    yearsExperience: document.getElementById('years_experience').value,
                    agePref: document.getElementById('age_pref').value,
                    description: document.getElementById('description').value,
                    natureOfWork: document.getElementById('nature_work').value,
                    placeOfWork: document.getElementById('place_work').value,
                    salary: document.getElementById('salary').value,
                    vacancyCount: document.getElementById('vacancy_count').value,
                    status: document.getElementById('status').value,

                    pwd_accept: document.getElementById('pwd_accept').value,
                    pwd_yes: document.getElementById('pwd_yes').value,
                    returning_ofw_accept_yes: document.getElementById('returning_ofw_accept_yes').value,
                    education_level: document.getElementById('education_level').value,
                    license: document.getElementById('license').value,
                    certification: document.getElementById('certification').value,
                    course: document.getElementById('course').value,
                    eligibility: document.getElementById('eligibility').value,
                    language: document.getElementById('language').value,
                };

                // Add the job to the array
                jobListArray.push(formData);

                generateJobCards();


                console.log(jobListArray);
            });


        });

        // Add an event listener to the parent element of job list for Update Button
        jobList.addEventListener('click', function(event) {
            if (event.target.classList.contains('update-btn')) {
                console.log('Update button clicked!');
                event.preventDefault(); // prevent the default behavior of the event
                event.stopPropagation(); // stop the event from propagating up the DOM tree
                event
                    .stopImmediatePropagation(); // stop the event from propagating up the DOM tree immediately

                const jobIdElement = event.target.closest('h2[id^="jobid"]');
                const jobId = jobIdElement.id.replace('jobid', '');
                console.log(jobId);
                if (jobIdElement) {
                    const jobId = jobIdElement.id.replace('jobid', '');

                    // Get the job data from the jobListArray using the jobId
                    const jobData = jobListArray[jobId];

                    // Check if jobData is not undefined
                    if (jobData) {
                        console.log(`Job ID: ${jobId}`);
                        console.log(`Job Data: ${JSON.stringify(jobData)}`);

                        // You can access the values inside jobData like this:
                        console.log(`Job Position: ${jobData.position}`);
                        console.log(`Job Description: ${jobData.description}`);
                        // ... and so on
                    } else {
                        console.error(`Invalid job ID: ${jobId}`);
                    }

                    // Call the updateJob function
                    updateJob(jobId);

                    return false;
                }




            }
        });


        // Add an event listener to the parent element of job list for Delete Button
        jobList.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete-btn')) {
                console.log('Delete button clicked!');
                event.preventDefault(); // prevent the default behavior of the event
                event.stopPropagation(); // stop the event from propagating up the DOM tree
                event.stopImmediatePropagation(); // stop the event from propagating up the DOM tree immediately

                // Get the parent element (the li element)
                const li = event.target.parentNode.parentNode; // get the parent <li> element

                // Remove the li element from the list
                li.parentNode.removeChild(li);

                return false; // prevent the default behavior of the event and stop the page from refreshing
            }
        });



        // Create a function to generate job cards from the jobListArray
        function generateJobCards() {
            const jobList = document.getElementById('job-list');
            jobList.innerHTML = ''; // Clear the job list

            jobListArray.forEach((jobData) => {
                const jobCard = document.createElement('li');
                jobCard.innerHTML = `
                    <div class="job-card">
                        <h2 id ="jobid" >${jobData.id}</h2>
                        <h2>${jobData.position}</h2>
                        <p>Company: ${jobData.placeOfWork}</p>
                        <p>Location: ${jobData.placeOfWork}</p>
                        <p>Job Type: ${jobData.natureOfWork}</p>
                        <p>Experience Level: ${jobData.yearsExperience} years</p>
                        <p>Industry: ${jobData.specializationReq}</p>
                          <button type="button" class="update-btn">Update</button>
                                <button type="button" class="delete-btn">Delete</button>
                    </div>
                    `;

                jobList.appendChild(jobCard);
            });
        }

        function launchJobPostRegistration() {
            Swal.fire({
                title: "Are you sure?",
                text: "Saving this Job Post",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                if (result.value) {

                    const form = document.getElementById('job-post-form');

                    const formData = new FormData(form);

                    // Get the values of the form fields
                    const barangay = formData.get('barangay');
                    const muniCity = formData.get('muni_city');
                    const province = formData.get('province');
                    const establishmentName = formData.get('establishmentName');
                    const industry = formData.get('industry');
                    const preparedBy = formData.get('prepared_by');
                    const designation = formData.get('designation');
                    const postingDate = formData.get('posting_date');
                    const validUntil = formData.get('valid_until');
                    const contact = formData.get('contact');



                    formData.append('jobList', JSON.stringify(jobListArray));

                    $.ajax({
                        url: "<?php echo config('app.url_local') . '/register_jobpost'; ?>",
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


        // Get all the Update buttons
        // Create a function to update a job
        function updateJob(jobData) {
            // Get the modal elements
            const positionInput = document.getElementById('position');
            const minEducationReqInput = document.getElementById('min_education_req');
            const specializationReqTextarea = document.getElementById('specialization_req');
            const yearsExperienceInput = document.getElementById('years_experience');
            const agePrefInput = document.getElementById('age_pref');
            const descriptionTextarea = document.getElementById('description');
            const natureOfWorkSelect = document.getElementById('nature_work');
            const placeOfWorkInput = document.getElementById('place_work');
            const salaryInput = document.getElementById('salary');
            const vacancyCountInput = document.getElementById('vacancy_count');
            const statusInput = document.getElementById('status');
            const dateInput = document.getElementById('date');
            const timeInput = document.getElementById('time');

            // Fill in the modal values with the job data
            positionInput.value = jobData.position;
            minEducationReqInput.value = jobData.minEducationReq;
            specializationReqTextarea.value = jobData.specializationReq;
            yearsExperienceInput.value = jobData.yearsExperience;
            agePrefInput.value = jobData.agePref;
            descriptionTextarea.value = jobData.description;
            natureOfWorkSelect.value = jobData.natureOfWork;
            placeOfWorkInput.value = jobData.placeOfWork;
            salaryInput.value = jobData.salary;
            vacancyCountInput.value = jobData.vacancyCount;
            statusInput.value = jobData.status;
            dateInput.value = jobData.date;
            timeInput.value = jobData.time;
        }
    </script>
    <script>
        function togglePwdInput(radio) {
            var pwdInputGroup = document.getElementById('pwd-input-group');
            if (radio.value === 'Yes') {
                pwdInputGroup.style.display = 'block';
            } else {
                pwdInputGroup.style.display = 'none';
            }
        }



    </script>
    @include('extensions.session_timeout_guard')

    <footer class="footer">
        @include('extensions/footer')
    </footer>
</body>

</html>

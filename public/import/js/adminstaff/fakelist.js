

//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED
//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED
//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED//EMPLOYER APPROVED
 
// Function to open the modal
function openModal() {
    const modal = document.getElementById('myModalEmployerTab1');
    if (modal) {
        modal.style.display = 'block';
    }
}

// Function to close the modal
function closeModal() {
    const modal = document.getElementById('myModalEmployerTab1');
    if (modal) {
        modal.style.display = 'none';
    }
}

// Close the modal when the user clicks on the close button (×)
const closeButton = document.querySelector('#myModalEmployerTab1 .close');
if (closeButton) {
    closeButton.addEventListener('click', closeModal);
}

// Close the modal when the user clicks anywhere outside of it
window.addEventListener('click', function(event) {
    const modal = document.getElementById('myModalEmployerTab1');
    if (event.target == modal) {
        closeModal();
    }
});

// Call the populateTableApproved function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableApproved();
});

function generateFakeDataApproved() {
    return {
        employerID: "EP 01" + (Math.floor(1000 + Math.random() * 9000)),
        businessName: faker.company.companyName(),
        tradeName: faker.company.companySuffix(),
        ownerName: faker.name.findName(),
        employerType: faker.random.arrayElement(["Public", "Private"]),
    };
}

// Function to populate the table with fake data
function populateTableApproved() {
    const tableBody = document.getElementById('employerApproved');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeDataApproved();
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fakeData.employerID}</td>
            <td>${fakeData.businessName}</td>
            <td>${fakeData.tradeName}</td>
            <td>${fakeData.ownerName}</td>
            <td>${fakeData.employerType}</td>
            <td>
                <a href="admin_employer_view_job_posts.html" target="_blank"><button class="view-button" title="View Job Listing"><i class="fas fa-eye"></i></button></a>
                <button class="view-userCompany" data-modal="myModalEmployerTab1" title="View Profile"><i class="fas fa-user"></i></button>
                <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
              </td>
        `;
        tableBody.appendChild(row);
    }
       // Get all buttons with class "view-userProfile" inside the "employerApproved" table
       const viewProfileButtons = document.querySelectorAll('#employerApproved .view-userCompany');

       // Loop through each button to attach click event listener
       viewProfileButtons.forEach(function(button) {
           button.addEventListener('click', function() {
               openModal();
           });
       });
}

// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableApproved();
});



//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING
//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING
//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING//EMPLOYER PENDING


// Function to generate fake data for each cell
function generateFakeData() {
    return {
        employerID: "EP 01" + (Math.floor(1000 + Math.random() * 9000)),
        businessName: faker.company.companyName(),
        tradeName: faker.company.companySuffix(),
        ownerName: faker.name.findName(),
        employerType: faker.random.arrayElement(["Public", "Private"]),
    };
}   
// Function to populate the table with fake data
function populateTable() {
    const tableBody = document.getElementById('jobTableBody');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeData();
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fakeData.employerID}</td>
            <td>${fakeData.businessName}</td>
            <td>${fakeData.tradeName}</td>
            <td>${fakeData.ownerName}</td>
            <td>${fakeData.employerType}</td>
            <td>
            <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
            <a href="admin_jobseeker_NSRPForm1.html" target="_blank"><button class="view-file" title="View Applications"><i class="fas fa-file"></i></button></a>
            <button class="view-user"  onclick="confirmApproveEmployer()"><i class="fas fa-check"></i></button>
            <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times"></i></button>
            </td>
        `;
        tableBody.appendChild(row);
    }
}

// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTable();
});








//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER 
//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED//JOBSEEKER APPROVED


function openJobseekerModal() {
    const modal = document.getElementById('myModalJobseeker');
    if (modal) {
        modal.style.display = 'block';
    }
}

// Function to close the modal
function closeJobseekerModal() {
    const modal = document.getElementById('myModalJobseeker');
    if (modal) {
        modal.style.display = 'none';
    }
}

// Close the modal when the user clicks on the close button (×)
const closeButton1 = document.querySelector('#myModalJobseeker .close');
if (closeButton1) {
    closeButton1.addEventListener('click', closeJobseekerModal);
}

// Close the modal when the user clicks anywhere outside of it
window.addEventListener('click', function(event) {
    const modal = document.getElementById('myModalJobseeker');
    if (event.target == modal) {
        closeJobseekerModal();
    }
});

// Call the populateTableApproved function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableApproved();
});


function generateFakeDataJobseekerApproved() {
    return {
        jobseekerID: "JS 01" + (Math.floor(1000 + Math.random() * 9000)),
        lastName: faker.name.findName(),
        firstName: faker.name.findName(),
        middleName: faker.name.findName(),
    };
}

// Function to populate the table with fake data
function populateTableJobseekerApproved() {
    const tableBody = document.getElementById('jobseekerApproved');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeDataJobseekerApproved();
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fakeData.jobseekerID}</td>
            <td>${fakeData.lastName}</td>
            <td>${fakeData.firstName}</td>
            <td>${fakeData.middleName}</td>
            <td>
                        <a href="admin_jobseeker_view_applications.html" target="_blank"><button class="view-button" title="View Applications"><i class="fas fa-eye"></i></button></a>
                        <button class="view-userProfile" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button>
                        <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
                      </td>
        `;
        tableBody.appendChild(row);
    }
       // Get all buttons with class "view-userProfile" inside the "employerApproved" table
       const viewProfileButtons = document.querySelectorAll('#jobseekerApproved .view-userProfile');

       // Loop through each button to attach click event listener
       viewProfileButtons.forEach(function(button) {
           button.addEventListener('click', function() {
            openJobseekerModal();
           });
       });
}

// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableJobseekerApproved();
});

//JOBSEEKER PENDING //JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER PENDING//JOBSEEKER


// Function to generate fake data for each cell
function generateFakeEmployerData() {
    return {
        jobseekerID: "JS 01" + (Math.floor(1000 + Math.random() * 9000)),
        lastName: faker.name.findName(),
        firstName: faker.name.findName(),
        middleName: faker.name.findName(),
    };
}   
// Function to populate the table with fake data
function populateTableEmployer() {
    const tableBody = document.getElementById('jobseekerPending');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeEmployerData();
        const row = document.createElement('tr');
        row.innerHTML = `
        <td>${fakeData.jobseekerID}</td>
        <td>${fakeData.lastName}</td>
        <td>${fakeData.firstName}</td>
        <td>${fakeData.middleName}</td>
        <td>
        <button class="view-download" onclick="downloadResume()" title="Download Resume"><i class="fas fa-download"></i></button>
        <a href="admin_jobseeker_NSRPForm1.html" target="_blank"><button class="view-file" title="View Applications"><i class="fas fa-file"></i></button></a>
        <button class="view-user" onclick="confirmApproveEmployer()"><i class="fas fa-check"></i></button>
        <button class="cancel-button" onclick="confirmRejectEmployer()"><i class="fas fa-times"></i></button>
      </td>
        `;
        tableBody.appendChild(row);
    }
}

// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableEmployer();
});



//REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS //REFERRALS 
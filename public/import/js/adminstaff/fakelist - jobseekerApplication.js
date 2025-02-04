// Function to generate fake data for each cell
function generateFakeJobSeekerApplications() {
    return {
        employerID: "EP 01" + (Math.floor(1000 + Math.random() * 9000)),
        jobseekerID: "JS 01" + (Math.floor(1000 + Math.random() * 9000)),
        position: faker.name.jobTitle(),
        nameCompany:  faker.company.companyName(),
        email:  faker.internet.email(),
    };
}   

// Function to populate the table with fake data
function populateTableJobSeekerApplications() {
    const tableBody = document.getElementById('jobseekerApplications');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeJobSeekerApplications();
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fakeData.employerID}</td>
            <td>${fakeData.jobseekerID}</td>
            <td>${fakeData.position}</td>
            <td>${fakeData.nameCompany}</td>
            <td>${fakeData.email}</td>
            <td>
                <div class="button-container">
                    <a href="admin_referral_Slip.html" target="_blank"><button class="view-button">
                        <i class='bx bx-show'></i>
                    </button></a>
                    <button class="send-email-button" id="sendEmail">
                        <i class='bx bx-mail-send'></i>
                    </button>
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    }
}


// Add event listener to dynamically created send email buttons
document.addEventListener('click', function(event) {
    const target = event.target;
    if (target.classList.contains('bx-mail-send') || target.id === 'sendEmail') {
        // Construct the email body
        var emailBody = "Please find the attached file.";

        // Encode the email body for inclusion in the mailto URL
        var encodedEmailBody = encodeURIComponent(emailBody);

        // Construct the mailto URL with subject and body
        var mailtoUrl = "mailto:recipient@example.com"
                        + "?subject=File Attachment"
                        + "&body=" + encodedEmailBody;

        // Open the user's default email client with the pre-filled email
        window.location.href = mailtoUrl;
    }
});


// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableJobSeekerApplications();
});

// Function to generate fake data for each cell
function generateFakeEmployerJobPost() {
    return {
        jobID: "JP 01" + (Math.floor(1000 + Math.random() * 9000)),
        position: faker.name.jobTitle(),
        vacancies: (Math.floor(1 + Math.random() * 20)),
        applicant: (Math.floor(1 + Math.random() * 20)),
        approved: (Math.floor(1 + Math.random() * 20)),
        status: faker.random.arrayElement(["Posted"]),
    };
}   

// Function to populate the table with fake data
function populateTableEmployerJobPost() {
    const tableBody = document.getElementById('employerJobPost');
    
    // Generate fake data and populate the table
    for (let i = 0; i < 10; i++) { // Adjust the loop count as needed
        const fakeData = generateFakeEmployerJobPost();
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${fakeData.jobID}</td>
            <td>${fakeData.position}</td>
            <td>${fakeData.vacancies}</td>
            <td>${fakeData.applicant}</td>
            <td>${fakeData.approved}</td>
            <td>${fakeData.status}</td>
        `;
        tableBody.appendChild(row);
    }
}


// Call the populateTable function when the page is loaded
document.addEventListener('DOMContentLoaded', function() {
    populateTableEmployerJobPost();
});



var jobModel = [
    {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ',' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ',' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'PHP', 'Web Development']
    }, {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ',' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'PHP', 'Web Development', 'Adobe Photoshop']
    }
];

function capitalizeFirstLetter(string) {
    return string.replace(/\b\w/g, function(char) {
        return char.toUpperCase();
    });
}   

function generateFakeSalary() {
    // Generate a random salary between ₱50,000 and ₱150,000
    const salary = faker.finance.amount(50000, 150000, 2); // 2 decimal places
    const [integerPart, decimalPart] = salary.split('.');
    const formattedIntegerPart = Number(integerPart).toLocaleString(); // Add commas to integer part
    const paddedDecimalPart = decimalPart.padEnd(2,'0'); // Pad with zeros if less than two digits
    return '₱' + formattedIntegerPart + '.' + paddedDecimalPart + ' per year';
}

function generateFakeDescription() {
    const paragraph = faker.lorem.paragraphs(2); // Generate two paragraphs of Lorem Ipsum text
    const lines = paragraph.split('\n'); // Split the paragraphs into lines
    const truncatedDescription = lines.slice(0, 2).join('\n'); // Take the first two lines
    const ellipsizedDescription = truncatedDescription.slice(0, 125) + '...'; // Add ellipsis if the description exceeds 80 characters
    return ellipsizedDescription;
}

function generateFakeList(jobModel) {
    const fakeList = [];
    for (let i = 0; i < jobModel.length; i++) {
        fakeList.push({
            title: jobModel[i].title,
            company: jobModel[i].company,
            location: jobModel[i].location,
            salary: jobModel[i].salary,
            description: jobModel[i].description,
            skills: jobModel[i].skills
        });
    }
    return fakeList;
}

function populateTable(data) {
    const tableBody = document.querySelector('#employerjobpost tbody');
    const numJobs = data.length;
    for (let i = 0; i < numJobs; i += 2) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <div class="job-row">
                    ${generateJobBox(data[i])}
                    ${data[i + 1] ? generateJobBox(data[i + 1]) : ''}
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    }
}

function generateJobBox(job) {
    return `
        <div class="job-box">
            <div class="job-cell job-details">
                <a href="admin_jobseeker_searchjob.html"><div class="job-title">${job.title}</div></a>
                <div class="company">${job.company}</div>
                <div class="location"> <i class="fas fa-map-marker-alt"></i> ${job.location}</div>
                <div class="salary"><i class="fas fa-money-bill-alt"></i> ${job.salary}</div>
                <div class="description">${job.description}</div>
                <div class="buttons-container">
                    ${job.skills.map(skill => `<a href="#"><button class="job-button">${skill}</button></a>`).join('')}
                </div>
            </div>
            <div class="job-cell job-apply">
                <a href="admin_jobseeker_searchjob.html"><button class="apply-button">See More</button></a>
            </div>
        </div>
    `;
}

// Example usage:
const fakeData = generateFakeList(jobModel); // Generates a fake list based on jobModel
populateTable(fakeData);
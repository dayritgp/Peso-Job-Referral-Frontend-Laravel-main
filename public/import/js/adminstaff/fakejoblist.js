

var jobModel = [
    {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ', ' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ', ' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'PHP', 'Web Development']
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
    const paddedDecimalPart = decimalPart.padEnd(2, '0'); // Pad with zeros if less than two digits
    return '₱' + formattedIntegerPart + '.' + paddedDecimalPart + ' per year';
}
function generateFakeDescription() {
    const paragraph = faker.lorem.paragraphs(2); // Generate two paragraphs of Lorem Ipsum text
    const lines = paragraph.split('\n'); // Split the paragraphs into lines
    const truncatedDescription = lines.slice(0, 2).join('\n'); // Take the first two lines
    const ellipsizedDescription = truncatedDescription.slice(0, 125) + '...'; // Add ellipsis if the description exceeds 80 characters
    return ellipsizedDescription;
}


function generateFakeList() {
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
    const tableBody = document.querySelector('#dashboardjobs tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
        const firstJobIndex = Math.floor(Math.random() * data.length);
        const firstJob = data[firstJobIndex];
        data.splice(firstJobIndex, 1); // Remove the first job from the data array
        const secondJobIndex = Math.floor(Math.random() * data.length);
        const secondJob = data[secondJobIndex];
        data.splice(secondJobIndex, 1); // Remove the second job from the data array
        row.innerHTML = `
            <td>
                <div class="job-row">
                    ${generateJobBox(firstJob)}
                    ${generateJobBox(secondJob)}
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    });
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
const fakeData = generateFakeList(1); // Generates a fake list with 3 entries
populateTable(fakeData);
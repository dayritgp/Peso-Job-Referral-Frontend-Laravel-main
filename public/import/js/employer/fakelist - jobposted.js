var postedJobsModel = [
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
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        title: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ', ' + faker.address.country(), 
        salary: generateFakeSalary(),
        description: generateFakeDescription(),
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
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

function generateFakeList4() {
    const fakeList4 = [];
    for (let i = 0; i < postedJobsModel.length; i++) {
        fakeList4.push({
            title: postedJobsModel[i].title,
            company: postedJobsModel[i].company,
            location: postedJobsModel[i].location,
            salary: postedJobsModel[i].salary,
            description: postedJobsModel[i].description,
            skills: postedJobsModel[i].skills
        });
        
    }
    return fakeList4;
}

function populatePostedJobs(data) {
    const tableBody3 = document.querySelector('#job-table tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
            row.innerHTML = `
            <td class="job-cell job-icon"><img src="../../images/abc.jpg" alt="Job Icon"></td>
                 <td class="job-cell job-details">
                     <div class="job-title">${item.title}<a href="../../view/employer/employer_searchjob.html"><button class="apply-button">See More</button></a></div>
                     <div class="task">Build responsive Wix site with AI integrations</div>
                     <div class="company">${item.company}</div>
                     <div class="location"><i class="fas fa-map-marker-alt"></i>${item.location}</div>
                     <div class="salary"><i class="fas fa-money-bill-alt"></i>${item.salary}</div>
                     <div class="description">${item.description}</div>
                     <div class="buttons-container">
                        ${item.skills.map(skill => `<a href="#"><button class="job-button">${skill}</button></a>`).join('')}
                    </div>
                     
                 </td>
        `;
        tableBody3.appendChild(row);
    });
    
}
const fakeData1 = generateFakeList4();
populatePostedJobs(fakeData1);
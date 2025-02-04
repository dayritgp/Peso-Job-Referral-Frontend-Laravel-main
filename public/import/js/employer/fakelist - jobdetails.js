var jobDetailsModel = [
    {
        title: faker.name.jobTitle(),
        slots: faker.name.jobTitle(),
        company: capitalizeFirstLetter(faker.company.bs()),
        location: faker.address.city() + ', ' + faker.address.country(), 
        salary: generateFakeSalary()
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
            title: jobDetailsModel[i].title,
            company: jobDetailsModel[i].company,
            location: jobDetailsModel[i].location,
            salary: jobDetailsModel[i].salary,
            description:jobDetailsModel[i].description,
            skills: jobDetailsModel[i].skills
        });
        
    }
    return fakeList4;
}

function populatePostedJobs(data) {
    const tableBody3 = document.querySelector('#job-table tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
            row.innerHTML = `
            <div class="image-container">
                <img src="../../images/abc.jpg" alt="Image" class="left-image">
            </div>
            <div class="job-info">
               <h3>Build responsive Wix site with AI integrations
               <button class="btn">4 Slots Left</button></h3>
               <div class="company">TULAY SA PAG-UNLAD INC. (A MICROFINANCE NGO) FORMERLY: TSPI DEVELOPMENT CORP.</div>
               <div class="location-salary">
                   <div class="location"><i class="fas fa-map-marker-alt"></i> Manila, Philippines</div>
                   <div class="salary1"><i class="fas fa-money-bill-alt"></i> ₱80,000 - ₱100,000 per year</div>
                   <div class="attainment"><i class="fas fa-graduation-cap"></i> College Graduate</div>
               </div>
        `;
        tableBody3.appendChild(row);
    });
    
}
const fakeData1 = generateFakeList4();
populatePostedJobs(fakeData1);
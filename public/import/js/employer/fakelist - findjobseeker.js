var postedJobsModel = [
    {
        name: faker.name.findName(),
        preferences: 'Web Development, SEO',
        age: '21',
        location: faker.address.city() + ', ' + faker.address.country(), 
        description: generateFakeDescription(),
        status: 'Unemployed',
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        name: faker.name.findName(),
        preferences: 'Virtual Assistance',
        age: '22',
        location: faker.address.city() + ', ' + faker.address.country(), 
        description: generateFakeDescription(),
        status: 'Unemployed',
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        name: faker.name.findName(),
        preferences: 'Virtual Assistance',
        age: '22',
        location: faker.address.city() + ', ' + faker.address.country(), 
        description: generateFakeDescription(),
        status: 'Unemployed',
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    },
    {
        name: faker.name.findName(),
        preferences: 'Virtual Assistance',
        age: '22',
        location: faker.address.city() + ', ' + faker.address.country(), 
        description: generateFakeDescription(),
        status: 'Unemployed',
        skills: ['HTML', 'HTML5', 'Adobe Photoshop', 'PHP', 'Web Development']
    }
];

function generateFakeDescription() {
    const paragraph = faker.lorem.paragraphs(2); // Generate two paragraphs of Lorem Ipsum text
    const lines = paragraph.split('\n'); // Split the paragraphs into lines
    const truncatedDescription = lines.slice(0, 2).join('\n'); // Take the first two lines
    const ellipsizedDescription = truncatedDescription.slice(0, 125) + '...'; // Add ellipsis if the description exceeds 80 characters
    return ellipsizedDescription;
}

function generateFakeList() {
    const fakeList4 = [];
    for (let i = 0; i < postedJobsModel.length; i++) {
        fakeList4.push({
            name: postedJobsModel[i].name,
            preferences: postedJobsModel[i].preferences,
            age: postedJobsModel[i].age,
            location: postedJobsModel[i].location,
            description: postedJobsModel[i].description,
            status: postedJobsModel[i].status,
            skills: postedJobsModel[i].skills
        });
        
    }
    return fakeList4;
}

function populateJobSeekerList(data) {
    const tableBody = document.querySelector('#find-jobseekers tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
            row.innerHTML = `
            <td class="job-cell job-details">
                     <div class = "side-by-side" >
                        <div class = "display1">
                            <div class = "profile-img"><img src ="../../images/profile.png" 
                                alt = "Hannah Montanas" ></div>
                         </div>
                         <div class = "display2"> 
                            <div class="job-title">${item.name} <a href="../../view/employer/employer_view_profile.html">
                                    <button class="btn-view-prof"><i class="fas fa-eye"></i>View Profile</button></a></div>
                                <div class="task">Preferences: ${item.preferences}</div>
                                <div class="company">Age:${item.age}</div>
                                <div class="location"><i class="fas fa-map-marker-alt"></i>${item.location}</div>
                                <div class="salary"><i class="fas fa-money-bill-alt"></i>${item.status}</div>
                                <div class="description">${item.description}</div>
                                <div class="buttons-container">
                                    ${item.skills.map(skill => `<a href="#"><button class="job-button">${skill}</button></a>`).join('')}
                                </div>
                         </div>

                     </div>
                 </td>
        `;
        tableBody.appendChild(row);
    });
    
}
const fakeData = generateFakeList();
populateJobSeekerList(fakeData);
var applicationApprovedModel = [
    {
        //this section is the one to be modified
        //to extract records from database.
        id: "APL 001021" + ( Math.floor(Math.random() * 50)),
        name: faker.name.findName(),
        position: faker.name.jobTitle(),
        date: faker.date.past().toLocaleDateString()
    },
    {
        id: "APL 001021" + ( Math.floor(Math.random() * 50)),
        name: faker.name.findName(),
        position: faker.name.jobTitle(),
        date: faker.date.past().toLocaleDateString()
    }
];
function generateFakeList() {
    const fakeList = [];
    for (let i = 0; i < applicationApprovedModel.length; i++) {
        fakeList.push({
            id: applicationApprovedModel[i].id,
            name: applicationApprovedModel[i].name,
            position:applicationApprovedModel[i].position,
            date: applicationApprovedModel[i].date
        });
    }
    return fakeList;
    
}
function populateTable(data) {
    const tableBody = document.querySelector('#dashboardjobs tbody');
    data.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.id}</td>
            <td>${item.name}</td>
            <td>${item.position}</td>
            <td>${item.date}</td>
            <td><button class="view-user" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button></td>
        `;
        tableBody.appendChild(row);
    });
}
                
// Example usage:
const fakeData = generateFakeList(); // Generates a fake list with 5 entries
populateTable(fakeData);

/*
function generateFakeList(length) {
    const fakeList = [];
    for (let i = 0; i < length; i++) {
        fakeList.push({
        id: i + 1,
        name: faker.name.findName(),
        position: faker.name.jobTitle(),
        date: faker.date.past().toLocaleDateString()
    });
  }
  return fakeList;
}
                
function populateTable(data) {
    const tableBody = document.querySelector('#dashboardjobs tbody');
    data.forEach(item => {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>${item.id}</td>
        <td>${item.name}</td>
        <td>${item.position}</td>
        <td>${item.date}</td>
        <td><button class="view-user" data-modal="myModal" title="View Profile"><i class="fas fa-user"></i></button></td>
    `;
    tableBody.appendChild(row);
    });
}
                
// Example usage:
const fakeData = generateFakeList(10); // Generates a fake list with 5 entries
populateTable(fakeData);*/



 //================================= DASHBOARD =========================
function generateFakeNumberList(length, min, max) {
  var fakeList = [];
  for (var i = 0; i < length; i++) {
      var randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
      fakeList.push(randomNumber);
  }
  return fakeList;
}

// Function to display the fake number list in HTML
function displayNumberList(numbers) {
  var listElement = document.getElementById("numbers");

  numbers.forEach(function (number) {
      var numberElement = document.createElement("div");
      numberElement.textContent = number;
      numberElement.classList.add("fake-number");

      listElement.appendChild(numberElement);
  });
}

function displayNumberList(numbers1) {
  var listElement = document.getElementById("numbers1");

  numbers1.forEach(function (number) {
      var numberElement1 = document.createElement("div");
      numberElement1.textContent = number;
      numberElement1.classList.add("fake-number");

      listElement.appendChild(numberElement1);
  });
}

// Generate a fake list of 4 random numbers between 1 and 100
var fakeNumbers = generateFakeNumberList(1, 1, 100);
// Display the fake number list in HTML
displayNumberList(fakeNumbers);





//================================================== JOB POSTS ==============================================

function generateFakeInfoList(length) {
  var fakeList1 = [];
  for (var i = 0; i < length; i++) {
      fakeList1.push({
          jobid: "SE 01210" + (i + 1 + Math.floor(Math.random() * 50)),
          industry: Math.floor(Math.random() * 50) + 20, // Random age between 20 and 69
          vacancies: Math.floor(Math.random() * 50) + 20,
          applicants: faker.name.findName(),
          startdate: faker.date.past().toLocaleDateString(),
          enddate: faker.date.past().toLocaleDateString()
      });
  }
  return fakeList1;
}

// Function to populate the table with fake list data
function populateTable1(data1) {
  const tableBody1 = document.querySelector('#dashboardjobposts tbody');
  data1.forEach(item => {
      const row1 = document.createElement('tr');
      row1.innerHTML = `
          <td>${item.jobid}</td>
          <td>${item.industry}</td>
          <td>${item.vacancies}</td>
          <td>${item.applicants}</td>
          <td>${item.stardate}</td>
          <td>${item.enddate}</td>
          <td>  <a href="../../view/employer/employer_emp.html" target = "_blank"><button class="view-button"><i class="fas fa-eye"></i></button></a>
          <button class="cancel-button"><i class="fas fa-times"></i></button></td>
      `;
      tableBody1.appendChild(row1);
  });
}

// Generate a fake list of 10 people's information
var fakeInfoList = generateFakeInfoList(5);
// Populate the table with fake list data
populateTable1(fakeInfoList);

//==================================== POSTED JOBS ==========================

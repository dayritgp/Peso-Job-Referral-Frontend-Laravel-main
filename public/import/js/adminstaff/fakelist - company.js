  // Generate fake company names and numbers
         const fakeCompanies = Array.from({ length: 12 }, () => faker.company.companyName());
         const fakeNumbers = Array.from({ length: 10 }, () => faker.random.number({ min: 10, max: 100 }));
     
         // Get the table body element
         const tbody = document.getElementById("companyBody");
     
         // Populate table with dynamically generated data
         let currentRow;
         fakeCompanies.forEach((company, index) => {
           // Create a new row every 4 iterations
           if (index % 4 === 0) {
             currentRow = document.createElement("tr");
             tbody.appendChild(currentRow);
           }
     
           // Create a new td element
           const td = document.createElement("td");
           td.classList.add("box");
     
           // Create elements inside the td
           const anchor = document.createElement("a");
           anchor.href = "admin_employer_company_details.html";
     
           const img = document.createElement("img");
           img.src = "../../images/admin/logs.png";
     
           const h3 = document.createElement("h3");
           h3.textContent = company;
     
           const divRating = document.createElement("div");
           divRating.classList.add("rating");
     
           const pJobsAvailable = document.createElement("p");
           pJobsAvailable.textContent = fakeNumbers[index] + " Jobs Available";
     
           divRating.appendChild(pJobsAvailable);
           anchor.appendChild(img);
           anchor.appendChild(h3);
           anchor.appendChild(divRating);
           td.appendChild(anchor);
     
           // Append td to the current row
           currentRow.appendChild(td);
         });
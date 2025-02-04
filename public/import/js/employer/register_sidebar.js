 // Get all sidebar items

         // Select all sidebar items
 const sidebarItems = document.querySelectorAll('.sidebar-item');

 sidebarItems.forEach(item => {
     item.addEventListener('click', () => {
         // Remove 'highlighted' class from all items
         sidebarItems.forEach(item => item.classList.remove('highlighted'));
         // Add 'highlighted' class to the clicked item
         item.classList.add('highlighted');
     });
 });

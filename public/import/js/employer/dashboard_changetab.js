function openTab(event, tabName, sectionId) {
  // Hide all tab content within the section
        document.querySelectorAll(`#${sectionId} .tab-content`).forEach(tabContent => {
            tabContent.classList.remove('active');
        });
        // Remove the 'active' class from all tab buttons within the section
        document.querySelectorAll(`#${sectionId} .tab-button`).forEach(tabButton => {
            tabButton.classList.remove('active');
        });
        // Show the selected tab content within the section
        document.getElementById(tabName).classList.add('active');
        // Add the 'active' class to the clicked tab button within the section
        event.currentTarget.classList.add('active');

        // Store the active tab in local storage
        localStorage.setItem(`${sectionId}-activeTab`, tabName);
}
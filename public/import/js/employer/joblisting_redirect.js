// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function () {
    // Get the form element
    const form = document.getElementById('job-search-form');

    // Add a submit event listener to the form
    form.addEventListener('submit', function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Scroll to the job listing section after form submission
        const jobListingSection = document.getElementById('job-listing-section');
        if (jobListingSection) {
            // Using smooth scroll behavior to scroll down
            jobListingSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Now you can proceed with form submission via AJAX or traditional form submission
        // For simplicity, let's assume traditional form submission
        form.submit();
    });
});
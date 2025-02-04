document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('modal');
    var link = document.querySelector('.modal-text');
    var closeBtn = document.querySelector('.close');

    // Open modal when the link is clicked
    link.addEventListener('click', function() {
      modal.style.display = 'block';
      document.body.classList.add('modal-open'); // Add class to body to disable scrolling
    });

    // Close modal when the close button is clicked
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
      document.body.classList.remove('modal-open'); // Remove class to enable scrolling
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
        document.body.classList.remove('modal-open'); // Remove class to enable scrolling
      }
    });
  });
document.addEventListener("DOMContentLoaded", function() {
    var viewMoreBtn = document.querySelector(".view-more-btn");
    var additionalDetails = document.querySelector(".additional-details");

    viewMoreBtn.addEventListener("click", function() {
        if (additionalDetails.style.display === "none") {
            additionalDetails.style.display = "block";
            viewMoreBtn.textContent = "View Less";
        } else {
            additionalDetails.style.display = "none";
            viewMoreBtn.textContent = "View More";
        }
    });
});

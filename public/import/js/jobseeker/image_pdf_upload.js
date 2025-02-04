$(function() {
    $("#date-birth").datetimepicker({
        format: 'Y-m-d', // Date format
        step: 15 // Time step (optional)
    });
});

    document.getElementById('choose-profile').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('uploaded-profile');
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});


document.getElementById('choose-resume').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('uploaded-resume');
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});



// To adjust width and height, you can modify the style of the image element.

const imageIds = ['choose-profile','uploaded-resume', ];
for (let i = 0; i < imageIds.length; i++) {
  const id = imageIds[i];
  const imageElement = document.getElementById(id);
  if (imageElement) { // add a null check to avoid errors
    imageElement.style.width = '200px';
    imageElement.style.height = 'auto';
  }
}

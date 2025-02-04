

//$(document).ready(function() {
//    $("#date-birth").datetimepicker({
//        format: 'Y-m-d H:i:s', // Date and time format
//        step: 15 // Time step (optional)
//    });
//});

    document.getElementById('choose-logo').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('uploaded-logo');
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});


document.getElementById('choose-permit').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('uploaded-permit');
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});


document.getElementById('choose-bir').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const image = document.getElementById('uploaded-bir');
            image.src = e.target.result;
            image.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
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

// To adjust width and height, you can modify the style of the image element.

(function() {
    let imageIds = ['uploaded-logo','uploaded-permit', 'uploaded-bir', 'uploaded-company','uploaded-profile', ];
    for (let i = 0; i < imageIds.length; i++) {
      const id = imageIds[i];
      const imageElement = document.getElementById(id);
      if (imageElement) { // add a null check to avoid errors
        imageElement.style.width = '200px';
        imageElement.style.height = 'auto';
      }
    }
  })();

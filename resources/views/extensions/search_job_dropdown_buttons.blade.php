
function toggleDropdown(event, dropdownId) {
  event.stopPropagation();
  var dropdown = document.getElementById(dropdownId);
  var isDisplayed = dropdown.style.display === 'block';
  closeAllDropdowns();
  dropdown.style.display = isDisplayed ? 'none' : 'block';
}

function closeAllDropdowns() {
  var dropdowns = document.getElementsByClassName('dropdown-sort');
  for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].style.display = 'none';
  }
}

document.body.addEventListener('click', function () {
  closeAllDropdowns();
});

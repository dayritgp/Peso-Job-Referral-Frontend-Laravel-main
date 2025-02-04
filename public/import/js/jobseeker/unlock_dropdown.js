function unlockDropdown(nextDropdownId) {
    var currentDropdown = document.getElementById(event.target.id);
    var nextDropdown = document.getElementById(nextDropdownId);

    if (currentDropdown.value !== "") {
        nextDropdown.disabled = false;
        nextDropdown.selectedIndex = 0; // Reset to first option
    } else {
        nextDropdown.disabled = true;
        nextDropdown.selectedIndex = 0; // Reset to placeholder
    }
}
function toggleEmployed(isEmployed) {
    const employedCheckboxesDiv = document.getElementById('employedCheckboxes1');
    const unemployedCheckboxesDiv = document.getElementById('unemployedCheckboxes1');
    const employedRadio = document.getElementById('employedCheckbox1');
    const unemployedRadio = document.getElementById('unemployedCheckbox1');

    if (isEmployed) {
        employedCheckboxesDiv.style.display = 'block';
        unemployedCheckboxesDiv.style.display = 'none';
        unemployedRadio.checked = false;
    } else {
        employedCheckboxesDiv.style.display = 'none';
        unemployedCheckboxesDiv.style.display = 'block';
        employedRadio.checked = false;
    }
    // Hide textboxes when switching between employed and unemployed
    hideTextboxes();
}

function toggleUnemployed(enable, textboxId) {
    // Hide both textboxes first to ensure only one is shown
    hideTextboxes();
    // Show the selected textbox
    var textBox = document.getElementById(textboxId);
    textBox.style.display = enable ? 'block' : 'none';
}
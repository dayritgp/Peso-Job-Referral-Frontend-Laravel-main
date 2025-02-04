function toggleLocation(isLocal) {
    const localCheckboxesDiv = document.getElementById('localCheckboxes2');
    const overseasCheckboxesDiv = document.getElementById('overseasCheckboxes2');
    const localCheckbox = document.getElementById('localCheckbox2');
    const overseasCheckbox = document.getElementById('overseasCheckbox2');

    if (isLocal) {
        localCheckboxesDiv.style.display = 'block';
        overseasCheckboxesDiv.style.display = 'none';
        overseasCheckbox.checked = false;
    } else {
        localCheckboxesDiv.style.display = 'none';
        overseasCheckboxesDiv.style.display = 'block';
        localCheckbox.checked = false;
    }
}
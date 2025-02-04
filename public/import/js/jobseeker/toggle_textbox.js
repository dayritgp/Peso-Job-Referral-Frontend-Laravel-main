function unlockTextBox(textBoxId) {
    var textBox = document.getElementById(textBoxId);
    textBox.classList.remove("hidden");
}

function lockTextBox(textBoxId) {
    var textBox = document.getElementById(textBoxId);
    textBox.classList.add("hidden");
}
function toggleTextBox() {
    var textBox = document.getElementById("otherDisTextbox");
    var unlockCheckbox = document.getElementById("otherDisCheckbox");

    if (unlockCheckbox.checked) {
        textBox.style.display = "block"; // Show the textbox
    } else {
        textBox.style.display = "none"; // Hide the textbox
    }
}
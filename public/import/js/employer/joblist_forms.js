 function validateChckbox() {
                //var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                var checkboxes = document.getElementsByName('workNature');
                var checked = false;
                checkboxes.forEach(function(checkbox) {
                  if (checkbox.checked) {
                    checked = true;
                  }
                });
                if (!checked) {
                  document.getElementById('workDiv').style.borderColor = "red";
                  alert('Please select at least one option.');
                  return false; // Prevent form submission
                }
                // Form submission logic here
                return true; // Allow form submission
}



// JavaScript
function pwd_yes(divId, yesId) {
    var yesRadio = document.getElementById(yesId);
    var divPwd = document.getElementById(divId);

    if (yesRadio.checked) {
        divPwd.style.display = 'block';
    } else {
        divPwd.style.display = 'none';
    }
}
function others(other, otherTxtbox){
    var check_other =  document.getElementById(other);
    var txtbox_other =  document.getElementById(otherTxtbox);
    
    if(check_other.checked == true){
      txtbox_other.disabled = false;
      txtbox_other.required = true;
    }else{
      txtbox_other.disabled = true;
    }
}


function years_experience(yearsID, numID){
  var selected = document.getElementById(yearsID).value;
  var num_exp = document.getElementById(numID);
  var num_exp_val = document.getElementById(numID).value;

  if(selected != "with") { //no experience
    num_exp.disabled = true;
    num_exp.style.border = "1px solid #9a9a9a";
    num_exp.style.backgroundColor = "#f2f2f2";
    num_exp_val = "";
    num_exp.required = false;

  }else{ //w/exp -- > color the txtbox
    num_exp.disabled = false;
    num_exp.style.border = "2px solid";
    num_exp.style.borderColor = "#0089c4";
    num_exp.style.backgroundColor = "";
    num_exp.required = true;
  }
}
function borderChange(num){
  document.getElementById(num).style.border = "1px solid #9a9a9a";
}

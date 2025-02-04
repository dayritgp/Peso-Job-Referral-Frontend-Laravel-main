
function employer_type(){
    if(document.getElementById("public").checked == true){
        document.getElementById("div-public").style.display = 'flex';
        document.getElementById("div-private").style.display = 'none';
    }
    else{
        document.getElementById("div-private").style.display = 'flex';
        document.getElementById("div-public").style.display = 'none';
    }
}
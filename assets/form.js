function myFunction(){
    if(document.getElementById("pass").value !== document.getElementById("copass").value){
        document.getElementById("errorMessage").style.color = "red";
        document.getElementById("errorMessage").innerHTML = "passwords do not match";
    }else{
        document.getElementById("errorMessage").innerHTML = "";
    }
}
function checkLength(){
    let passlength = document.getElementById("pass").value;
    if (passlength.length >= 6) {
    document.getElementById("length").innerHTML = ""
    }else{
    document.getElementById("length").innerHTML = "passwords must contain six characters or more"
    }
}
function clickBut(){
    return (lNameCheck(), emailCheck(), uNameCheck())
}
function lNameCheck() {
    let lname = document.getElementById("lname").value;
    if (lname.length >= 3) {
        document.getElementById("lName").style.color = "green"
        document.getElementById("lName").innerHTML = "Looks good"
    }else{
        document.getElementById("lName").style.color = "red"
        document.getElementById("lName").innerHTML = "Invalid Last Name"
    }
}
function emailCheck() {
    let email = document.getElementById("Email").value;
    if (email.includes("@gmail.com")) {
        document.getElementById("email").style.color = "green"
        document.getElementById("email").innerHTML = "Looks good"
    }else{
        document.getElementById("email").style.color = "red"
        document.getElementById("email").innerHTML = "Invalid Email"
    }
}
function uNameCheck() {
    let username = document.getElementById("username").value;
    if (username.length >= 3) {
            document.getElementById("uName").style.color = "green"
            document.getElementById("uName").innerHTML = "Looks good"
    }else{
            document.getElementById("uName").style.color = "red"
            document.getElementById("uName").innerHTML = "Invalid Username"
    }
}


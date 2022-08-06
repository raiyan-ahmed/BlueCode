function formValidation() {
    var fname = document.getElementById("ifname").value;
    var pass = document.getElementById("ipass").value;
    var cpass = document.getElementById("iconfirm-pass").value;
    var email = document.getElementById("iemail").value;
    var mobile = document.getElementById("imob").value;


    var usernamePattern = /[A-Za-z .]{3,20}$/
    var passPattern = /((?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[@%&*#£])){15}/
    var emailPattern = /(cse|eee|bba|law|ce)_\d{10}@lus.ac.bd/
    var mobilePattern = /^(\+88)?-?01[3-9]\d{8}$/



    //For Username
    if (!fname.match(usernamePattern)) {
        document.getElementById("efname").innerHTML = "Only char is allowed!";
        return false;
    }
    else if (fname.length < 3 || fname.length > 20) {
        document.getElementById("efname").innerHTML = "Name Length should be (3-20)";
        return false;
    }

    else {
        document.getElementById("efname").innerHTML = "";
    }

    //For Password
    if (!pass.match(passPattern)) {
        document.getElementById("epass").innerHTML = "Please give a strong password!";
        return false;
    }
    else {
        document.getElementById("epass").innerHTML = "";
    }

    //For Confirm Password
    if (!cpass.match(passPattern)) {
        document.getElementById("econfirm-pass").innerHTML = "Password not matched!";
        return false;
    }
    else {
        document.getElementById("econfirm-pass").innerHTML = "";
    }

    //For Email
    if (!email.match(emailPattern)) {
        document.getElementById("e-email").innerHTML = "Enter your authorized email !";
        return false;
    }
    else {
        document.getElementById("e-email").innerHTML = "";
    }

    //For Phone
    if (!mobile.match(mobilePattern)) {
        document.getElementById("emob").innerHTML = "Only BD Phone is allowed!";
        return false;
    }
    else {
        document.getElementById("emob").innerHTML = "";
    }

}
function valid(event) {
    event.preventDefault();
    var username = document.getElementById('user_name').value;
    var email = document.getElementById('user_email').value;
    var pass = document.getElementById('user_password').value;
    if(!/^[^0-9]/.test(username))
        {
            document.getElementById('user_name').style.border = "5px solid red";
        }
    if (email == "") {
        document.getElementById('user_email').style.border = "5px solid red";
        document.getElementById('user_email').focus();
        alert("Please fill up the email");
        return false;
    }
    else if (!email.endsWith("@gmail.com")) {
        document.getElementById('user_email').style.border = "5px solid red";
        text = "Input a valid email";
        document.getElementById('user_email').focus();
        alert("Enter a valid email");
        return false;
    }
    else if (pass.length < 8) {
        document.getElementById('user_password').style.border = "5px solid red";
        document.getE-lementById('user_password').focus();
        alert("Passwords needs to be at least 8 characters!");
        return false;
    }
    else if (!/[a-zA-Z0-9]+/.test(pass)) {
        document.getElementById('user_password').style.border = "5px solid red";
        document.getElementById('user_password').focus();
        alert("At least one uppercase, one lowercase, one special character!")
        return false;
    }
    else {
        alert("Congratulations!");
        return true;
    }
}
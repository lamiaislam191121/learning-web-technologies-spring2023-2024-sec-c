function loginValidate() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === "") {
        alert("Username is required.");
        return false;
    }
    if (username.length < 2) {
        alert("Username must be at least 2 characters.");
        return false;
    }
    if(!((username[0]>='A' && username[0]>='Z') || (username[0]>='a' && username[0] <='z'))){
        alert("Must start with a letter");
        return false;
    }
    if (password === "") {
        alert("Password is required.");
        return false;
    }

    return true;
}

function signupValidate() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmpassword').value;

    if (name === "" || email === "" || username === "" || password === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }
    if (name === "") {
        alert(" name is required.");
        return false;
    }
    if (name.length < 2) {
        alert("Name must be at least 2 characters.");
        return false;
    }
    if(!((name[0]>='A' && name[0]>='Z') || (name[0]>='a' && name[0] <='z'))){
        alert("Can contain a-z or A-Z & Must start with a letter");
        return false;
    }

    if (email === "") {
        alert("Email is required.");
        return false;
    } else if (!email.includes('@') || !email.includes('.')) {
        alert("Email must be valid.");
        return false;
    }

    if (username === "") {
        alert("Username is required.");
        return false;
    } else if(!((username[0]>='A' && username[0]>='Z') || (username[0]>='a' && username[0] <='z'))){
        alert("Must start with a letter");
        return false;
    }

    if (password === "") {
        alert("Password is required.");
        return false;
    }
    if (password.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }


    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function chngpassValidate(){
    let currentPassword = document.getElementById('currentPassword').value;
    let newPassword = document.getElementById('newPassword').value;
    let confirmPassword = document.getElementById('retypePassword').value;

    if ( currentPassword === "" || newPassword === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }

    if (currentPassword === "") {
        alert("currentPassword is required.");
        return false;
    } 

    if (newPassword.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }
    if (newPassword !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function forgotpassValidate(){
    let newPassword = document.getElementById('newPassword').value;
    let confirmPassword = document.getElementById('retypePassword').value;

    if (newPassword === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }
    
    if (newPassword.length < 4) {
        alert("Password must be at least 4 characters.");
        return false;
    }

    if (newPassword !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}

function ajax(){
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmpassword').value;

    let xhttp = new XMLHttpRequest();
   
    xhttp.open('POST', '../controller/signupCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name='+name);
    xhttp.send('email='+email);
    xhttp.send('username='+username);
    xhttp.send('password='+password);
    xhttp.send('confirmpassword='+confirmpassword);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        }
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #6495ED;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  button {
    background-color: lightblue;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
  }
  
  button:hover {
    background-color: #4CAF50;
  }
  
  .error-message {
    color: red;
    margin-top: 5px;
  }

  @media screen and (max-width: 600px) {
    .container {
      width: 90%;
    }
  }
</style>
</head>
<body>

<div class="container">
  <h2 style="color: lightblue;">Sign Up Form</h2>
  <div class="form-group">
    <!-- <label for="name">Name:</label> -->
    <input type="text" id="name" name="name" placeholder="Enter your name">
    <div class="error-message" id="name-error"></div>
  </div>
  <div class="form-group">
    <!-- <label for="phone">Phone Number:</label> -->
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number">
    <div class="error-message" id="phone-error"></div>
  </div>
  <div class="form-group">
    <!-- <label for="password">Password:</label> -->
    <input type="password" id="password" name="password" placeholder="Enter your password">
    <div class="error-message" id="password-error"></div>
  </div>
  <button onclick="validateForm()">Sign Up</button>
</div>

<script>
function validateForm() {
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var password = document.getElementById("password").value;
  var nameError = document.getElementById("name-error");
  var phoneError = document.getElementById("phone-error");
  var passwordError = document.getElementById("password-error");
  var isValid = true;

  if (name === "") {
    nameError.innerHTML = "Name is required";
    isValid = false;
  } else {
    nameError.innerHTML = "";
  }

  if (phone === "") {
    phoneError.innerHTML = "Phone number is required";
    isValid = false;
  } else if (!/^\d{10}$/.test(phone)) {
    phoneError.innerHTML = "Phone number must be 10 digits";
    isValid = false;
  } else {
    phoneError.innerHTML = "";
  }

  if (password === "") {
    passwordError.innerHTML = "Password is required";
    isValid = false;
  } else if (password.length < 6) {
    passwordError.innerHTML = "Password must be at least 6 characters long";
    isValid = false;
  } else {
    passwordError.innerHTML = "";
  }

  return isValid;
}
</script>

</body>
</html>

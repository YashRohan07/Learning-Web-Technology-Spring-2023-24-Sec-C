// Function to check email availability
function checkEmailAvailability(email) {
  let xhr = new XMLHttpRequest();
  let email_input = encodeURIComponent(email);
  xhr.open("GET", "../Controller/emailCheck.php?email_=" + email_input, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("emailAvailability").innerHTML = xhr.responseText;
    }
  };

  xhr.send();
}

// Function to check name availability
function checkNameAvailability(name) {
  let xhr = new XMLHttpRequest();
  let name_input = encodeURIComponent(name);
  xhr.open("GET", "../Controller/nameCheck.php?name_=" + name_input, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("nameAvailability").innerHTML = xhr.responseText;
    }
  };

  xhr.send();
}

// Function to check password strength
function checkPasswordStrength(password) {
  let xhr = new XMLHttpRequest();
  let password_input = encodeURIComponent(password);
  xhr.open("GET", "../Controller/passwordStrengthCheck.php?password_=" + password_input, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("passwordStrength").innerHTML = xhr.responseText;
    }
  };

  xhr.send();
}

// Function to validate registration form
function validateRegistration() {
  let name = document.getElementById('name').value;
  let password = document.getElementById('password').value;
  let confirmPassword = document.getElementById('confirmPassword').value;
  let emailInput = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;

  // Combined validation logic with improved error messages
  if (name.trim() === "") {
    alert('Name is required!');
    return false;
  }

  if (emailInput === "") {
    alert('Please provide a valid email address.');
    return false;
  }

  if (!validatePassword(password)) {
    return false; // Early return to avoid redundant error messages
  }

  if (confirmPassword === "") {
    alert("Confirm Password is required.");
    return false;
  } else if (password !== confirmPassword) {
    alert("Confirm password doesn't match password.");
    return false;
  }

  if (phone.trim() === "") {
    alert("Phone number is required.");
    return false;
  } else if (phone.length !== 11 || isNaN(phone)) {
    alert("Phone number must be 11 digits and contain only numbers.");
    return false;
  }

  return true;
}

// Function to validate password strength
function validatePassword(password) {
  if (password === "") {
    alert('Fill the password properly.');
    return false;
  }

  if (password.length <= 8) {
    alert("Password must be at least 8 characters long.");
    return false;
  }

  let hasSpecialChar = password.split('').some(char => ['@', '#', '$', '%'].includes(char));

  if (!hasSpecialChar) {
    alert("Password must contain at least one of the special characters (@, #, $, %).");
    return false;
  }

  return true;
}

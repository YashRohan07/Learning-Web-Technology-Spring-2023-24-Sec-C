<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <script src="script.js"></script>
</head>
<body>
  <table class="registration-form">
    <tr>
      <td>
        <form id="registrationForm" action="../Controller/RegCheck.php" method="post" onsubmit="return validateRegistration()">
          <h2>Registration</h2>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required onblur="checkEmailAvailability(this.value)">
            <span id="emailAvailability"></span>
          </div>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required onblur="checkNameAvailability(this.value)">
            <span id="nameAvailability"></span>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required onblur="checkPasswordStrength(this.value)">
            <span id="passwordStrength"></span>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </div>
          <button type="submit">Register</button>
        </form>
      </td>
    </tr>
  </table>
</body>
</html>

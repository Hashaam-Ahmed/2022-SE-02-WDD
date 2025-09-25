function validateForm() {
      let fname = document.forms["myForm"]["firstname"].value.trim();
      let lname = document.forms["myForm"]["lastname"].value.trim();
      let email = document.forms["myForm"]["email"].value.trim();
      let password = document.forms["myForm"]["password"].value;
      let confirmPassword = document.forms["myForm"]["confirm_password"].value;
      let phone = document.forms["myForm"]["phone"].value.trim();

      // First name
      if (fname.length < 3 || fname.length > 10) {
        alert("First name must be between 3 and 10 characters");
        return false;
      }

      // Last name
      if (lname.length < 3 || lname.length > 10) {
        alert("Last name must be between 3 and 10 characters");
        return false;
      }

      // Email
      let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,}$/;
      if (!email.match(emailPattern)) {
        alert("Please enter a valid email");
        return false;
      }

      // Password
      let passwordPattern = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[\W_]).{8,15}$/;
      if (!password.match(passwordPattern)) {
        alert("Password must be 8–15 chars, include 1 digit, 1 capital letter, and 1 special symbol");
        return false;
      }

      // Confirm password
      if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
      }

      // Phone
      let phonePattern = /^\+92\d{10}$/;
      if (!phone.match(phonePattern)) {
        alert("Phone must start with +92 and contain 10 digits");
        return false;
      }

      return true; 
    }
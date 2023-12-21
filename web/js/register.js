function validatePassword() {
  var password = document.getElementById("login-password").value;
  var passwordRegex =
    /^(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[a-zA-Z0-9!@#$%^&*()_+]{8,}$/;

  var passwordMessage = document.getElementById("password-message");

  if (!passwordRegex.test(password)) {
    passwordMessage.innerHTML =
      "Mật khẩu phải gồm ít nhất 1 ký tự viết hoa và 1 ký tự đặc biệt";
    return false;
  }

  passwordMessage.innerHTML = ""; // Clear the message if validation passes
  return true;
}

function validateEmail() {
  var email = document.getElementById("register-email").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  var emailMessage = document.getElementById("email-message");

  if (!emailRegex.test(email)) {
    emailMessage.innerHTML = "Email chưa đúng định dạng";
    return false;
  }

  emailMessage.innerHTML = ""; // Clear the message if validation passes
  return true;
}

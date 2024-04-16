const $new_password_input = document.getElementById("new_password_input");
const $confirm_new_password_input = document.getElementById("confirm_new_password_input");

// make sure the new password and confirm new password are the same if not confirm new password will be red

$confirm_new_password_input.addEventListener("input", () => {
  if ($new_password_input.value !== $confirm_new_password_input.value) {
    $confirm_new_password_input.style.borderColor = "red";
  } else {
    $confirm_new_password_input.style.borderColor = "green";
  }
});
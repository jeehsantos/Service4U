 
function showDetails(user) {
  var fullName = user.getAttribute("data-bs-fullName");
  var email = user.getAttribute("data-bs-email");
  var password = user.getAttribute("data-bs-password");
  var id = user.getAttribute("data-id");
  document.getElementById("userFullName").value = fullName;
  document.getElementById("userEmail").value = email;
  document.getElementById("userPassword").value = password;
  document.getElementById("getId").value = id;
}
 
 
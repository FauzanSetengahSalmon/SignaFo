const studentBtn = document.getElementById("studentBtn");
const adminBtn = document.getElementById("adminBtn");
const submitBtn = document.getElementById("submitBtn");
const emailInput = document.getElementById("email");
const roleInput = document.getElementById("role");

studentBtn.onclick = () => {
  roleInput.value = "student";
  studentBtn.classList.add("active");
  adminBtn.classList.remove("active");
  submitBtn.textContent = "Sign in as Student";
  emailInput.placeholder = "Enter your student email";
};

adminBtn.onclick = () => {
  roleInput.value = "admin";
  adminBtn.classList.add("active");
  studentBtn.classList.remove("active");
  submitBtn.textContent = "Sign in as Admin";
  emailInput.placeholder = "Enter your admin email";
};

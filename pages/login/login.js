const container = document.querySelector(".container");
const btnSignIn = document.querySelector(".btnSign-in");
const btnSignUp = document.querySelector(".btnSign-up");

btnSignIn.addEventListener("click", () => {
  container.classList.add("active");
});

btnSignUp.addEventListener("click", () => {
  container.classList.remove("active");
});
document.addEventListener("DOMContentLoaded", function () {
  // Hiển thị thông báo lỗi
  let errorMessage = document.querySelector(".error-message");
  errorMessage.style.display = "block"; // Hiển thị thông báo

  // Tự động biến mất thông báo sau 2 giây
  setTimeout(function () {
    errorMessage.style.animationPlayState = "running"; // Chạy animation
  }, 2000);
});

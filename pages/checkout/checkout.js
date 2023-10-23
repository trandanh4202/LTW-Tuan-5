function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
function openModal() {
  document.getElementById("myModal").style.display = "block";
}
closeModal();
function selectAddress(item) {
  const radios = document.querySelectorAll(".radio");
  radios.forEach((radio) => (radio.checked = false));
  item.querySelector(".radio").checked = true;
}

function confirmAddress() {
  closeModal();
}
let active = "VNPAY";

function setActive(paymentMethod) {
  active = paymentMethod;
  // Reset the active border for all boxes
  document.querySelectorAll(".box").forEach((box) => {
    box.classList.remove("active-border");
  });
  // Set the active border for the selected box
  document
    .querySelector(`.box.${paymentMethod}`)
    .classList.add("active-border");
}

function handlePayment() {
  // Handle payment logic here
  console.log(`Selected payment method: ${active}`);
}
// Hàm lấy dữ liệu từ localStorage
function getCartFromLocalStorage() {
  const cartData = localStorage.getItem("cart");
  if (cartData) {
    return JSON.parse(cartData);
  }
  return [];
}

// Hàm hiển thị sản phẩm trong giỏ hàng từ dữ liệu cart
function displayCartItems() {
  const cart = getCartFromLocalStorage();
  const cartContainer = document.querySelector(".col.col-9");
  cartContainer.innerHTML = "";
  let total = 0;

  cart.forEach((item) => {
    const cartItem = document.createElement("div");
    cartItem.className = "paper";
    const productTotal = item.price * item.quantity;
    total += productTotal;

    cartItem.innerHTML = `
      <div class="d-flex justify-content-between align-items">
        <div class="d-flex align-items">
          <div class="image-container">
            <img src="${item.image}" alt="${item.name}" class="image" />
            <span class="badge">${item.quantity}</span>
          </div>
          <div class="typography">${item.name}</div>
        </div>
        <div class="flex column-center">
          <div class="price">${total.toFixed(2)}đ</div>
          <div class="quantity">x${item.quantity}</div>
        </div>
      </div>
    `;

    cartContainer.appendChild(cartItem);
  });
}

// Gọi hàm để lấy dữ liệu từ localStorage và hiển thị lên trang
displayCartItems();

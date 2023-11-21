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
  const feeContainer = document.querySelector(".col.col-3");

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
          <div class="price">${(
            item.quantity * item.price
          ).toLocaleString()}đ</div>
          <div class="quantity">x${item.quantity}</div>
        </div>
      </div>
    `;

    cartContainer.appendChild(cartItem);
  });
  const ship = 0;
  const cod = 0;
  const feeItem = document.createElement("div");
  feeItem.className = "paper";
  feeItem.innerHTML = "";

  feeItem.innerHTML = `
         <div class="paper">
            <div class="d-flex justify-content-between align-items">
              <h2 class="price-payment">Tiền sản phẩm:</h2>
              <p>${total.toLocaleString()} đ</p>
            </div>
            <div class="divider"></div>
            <div class="d-flex justify-content-between align-items">
              <h2 class="price-payment">Tiền vận chuyển:</h2>
              <p>${ship.toLocaleString()} đ</p>
            </div>
            <div class="divider"></div>
            <div class="d-flex justify-content-between align-items">
              <h2 class="price-payment">Tiền thu hộ (COD):</h2>
              <p>${cod.toLocaleString()} đ</p>
            </div>
            <div class="divider"></div>
            <div class="d-flex justify-content-between align-items">
              <h2 style="font-weight: 700; color: black">Tổng tiền</h2>
              <p style="font-weight: 700; color: #f61900">${(
                total + ship
              ).toLocaleString()} đ </p>
            </div>
            <div class="divider"></div>
            <p>- ĐỔI HÀNG MIỄN PHÍ - Tại tất cả cửa hàng trong 15 ngày</p>
            <p>- Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
            <div class="grid">
              <div
                class="box active-border d-flex"
                onclick="setActive('VNPAY')"
              >
                <div class="done-icon">✓</div>
                <p style="font-size: 15px; padding: 5px">Thanh toán VNPAY</p>
              </div>
              <div
                class="box active-border d-flex"
                onclick="setActive('Paypal')"
              >
                <div class="done-icon">✓</div>
                <p style="font-size: 15px; padding: 5px">Thanh toán Paypal</p>
              </div>
              <div class="box active-border d-flex" onclick="setActive('COD')">
                <div class="done-icon">✓</div>
                <p style="font-size: 15px; padding: 5px">
                  Thanh toán khi nhận hàng
                </p>
              </div>
            </div>
            <button class="btn-check" onclick="handlePayment">
              Thanh Toán
            </button>
          </div>
  `;
  feeContainer.appendChild(feeItem);
}

// Gọi hàm để lấy dữ liệu từ localStorage và hiển thị lên trang
displayCartItems();

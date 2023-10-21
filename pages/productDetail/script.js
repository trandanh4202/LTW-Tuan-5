const openDrawerButton = document.getElementById("openDrawer");
const closeDrawerButton = document.getElementById("closeDrawer");
const cartDrawer = document.getElementById("cartDrawer");
const cartItemsList = document.getElementById("cartItems");
const totalPrice = document.getElementById("totalPrice");
const addToCartButtons = document.querySelectorAll(".addToCart");
const mainImg = document.getElementById("mainImg");
let cart = [];

// Hàm cập nhật giỏ hàng và lưu vào Local Storage
function updateCart() {
  cartItemsList.innerHTML = "";
  let total = 0;
  cart.forEach((item, index) => {
    const tbody = document.createElement("tbody");
    const productTotal = item.price * item.quantity;

    tbody.innerHTML = `<tr class="cart-item-row">
      <td class="cart-item-img">
        <img src="${item.image}" alt="" />
      </td>
      <td class="cart-item-title">${item.name}</td>
      <td class="cart-item-price">${item.price.toFixed(2)} đ</td>
      <td class="cart-item-quantity">x ${item.quantity}</td>
      <td class="cart-item-total">${productTotal.toFixed(2)} đ</td>
    </tr> `;
    const removeButton = document.createElement("button");
    removeButton.textContent = "Xoá";
    removeButton.classList.add("delete-btn");
    removeButton.addEventListener("click", () => {
      removeFromCart(index);
    });

    tbody.appendChild(removeButton);
    cartItemsList.appendChild(tbody);
    total += productTotal;
  });
  totalPrice.textContent = `Tổng cộng: $${total.toFixed(2)}`;

  // Lưu giỏ hàng vào Local Storage
  saveCartToLocalStorage();
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart(name, price) {
  cart.push({ name, price });
  updateCart();
}

// Hàm xóa sản phẩm từ giỏ hàng
function removeFromCart(index) {
  cart.splice(index, 1);
  updateCart();
}

// Thêm sự kiện click cho nút "Thêm vào giỏ hàng" trên sản phẩm

// Thêm sự kiện click cho nút "Xoá" trong drawwer
cartItemsList.addEventListener("click", (event) => {
  if (event.target.tagName === "BUTTON") {
    const listItem = event.target.parentNode;
    const index = Array.from(listItem.parentNode.children).indexOf(listItem);
    removeFromCart(index);
  }
});

// Hàm lưu giỏ hàng vào Local Storage
function saveCartToLocalStorage() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// Hàm nạp giỏ hàng từ Local Storage (nếu tồn tại)
function loadCartFromLocalStorage() {
  const savedCart = localStorage.getItem("cart");
  if (savedCart) {
    cart = JSON.parse(savedCart);
    updateCart();
  }
}

// Gọi hàm nạp giỏ hàng từ Local Storage khi trang web được tải
loadCartFromLocalStorage();

// Sự kiện mở drawwer
openDrawerButton.addEventListener("click", () => {
  cartDrawer.style.right = "0";
});

// Sự kiện đóng drawwer
closeDrawerButton.addEventListener("click", () => {
  cartDrawer.style.right = "-500px";
});

function addToCartFromHTML() {
  // Lấy thông tin sản phẩm từ HTML
  const productImage = document.getElementById("mainImg").src;
  const productName = document.querySelector(".detail-title").textContent;
  const productPrice = parseFloat(
    document.querySelector(".detail-price").textContent.replace(/[^\d.]/g, "")
  );
  const productQuantity = parseInt(
    document.querySelector(".detail-select select").value
  );

  // Thêm sản phẩm vào giỏ hàng
  cart.push({
    image: productImage,
    name: productName,
    price: productPrice,
    quantity: productQuantity,
  });

  // Cập nhật giỏ hàng
  updateCart();
}

// Thêm sự kiện click cho nút "Thêm vào giỏ hàng"
const addToCartButton = document.querySelector(".detail-btn-add button");
addToCartButton.addEventListener("click", () => {
  addToCartFromHTML();
  console.log("háhaha");
});

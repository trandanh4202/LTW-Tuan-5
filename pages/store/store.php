<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="sticky-banner">
      <div class="aside-left">
        <img src="../../assets/images/aside/Aside_1.webp" alt="" />
      </div>
      <div class="aside-right">
        <img src="../../assets/images/aside/Aside_2.webp" alt="" />
      </div>
    </div>
    <a href="https://www.facebook.com/messages/t/trandanh42" class="speed-dial">
      <img src="../../assets/images/mess.png" alt="" />
    </a>
    <header class="header">
      <div class="bannerTop">
        <img
          src="../../assets/images/bannerTop.webp"
          alt=""
          width="100%"
          height="auto"
        />
      </div>
      <div class="container">
        <div
          class="header-upper d-flex align-items container gap-10 text-white"
        >
          <a
            href="/pages/home/home.html"
            class="logo d-flex align-items col col-4 gap-10"
          >
            <img src="../../assets/images/logo.png" alt="Logo" />
            <div class="logo-text">Lucky And Power</div>
          </a>
          <div class="search-bar d-flex align-items col col-4">
            <input type="text" placeholder="Search..." />
            <button>Search</button>
          </div>
          <div
            class="d-flex align-items justify-content-center gap-20 col col-4"
          >
            <div
              class="d-flex justify-content-center align-items gap-10 action"
            >
              <i class="fa-solid fa-cart-shopping"></i>Giỏ hàng
            </div>
            <div class="drawer" id="cartDrawer">
              <h2>Giỏ Hàng</h2>
              <table id="cartItems">
                <thead>
                  <tr class="cart-item-header">
                    <td class="cart-item-img">Hình ảnh</td>
                    <td class="cart-item-title">Tên sản phẩm</td>
                    <td class="cart-item-price">Giá sản phẩm</td>
                    <td class="cart-item-quantity">Số lượng</td>
                    <td class="cart-item-total">Tổng tiền</td>
                  </tr>
                </thead>
              </table>
              <p id="totalPrice">Tổng cộng: $0.00</p>
              <button id="closeDrawer">Đóng</button>
              <div class="checkout">Thanh toán</div>
            </div>
            <div
              class="d-flex justify-content-center align-items gap-10 action"
            >
              <i class="fa-solid fa-bell"></i>Thông báo
            </div>
            <a
              href="../login/login.php"
              class="login d-flex justify-content-center align-items gap-10"
            >
              <i class="fa-solid fa-user"></i>Đăng nhập
            </a>
            <!-- <div class="icon"><i class="fas fa-sign-in-alt"></i></div> -->
          </div>
        </div>

        <nav class="navbar">
          <div class="navbar-menu">
            <a href="/pages/home/home.html">Trang chủ</a> |
            <a href="/pages/technical/technical.html">Công nghệ</a> |
            <a href="/pages/store/store.html">Của hàng</a>
            <a href="/pages/contact/contact.html">Liên hệ</a>
          </div>
        </nav>
      </div>
    </header>
    <section class="container">
      <div class="store-wrapper">
        <div class="row">
          <div class="col col-3">
            <div class="paper">
              <div class="filter-left">
                <div class="filter-choice">
                  <h4 class="filter-title">Khoản giá</h4>
                  <div class="d-flex justify-content-between from-price">
                    <input
                      type="input"
                      name="from"
                      placeholder="Bất đầu"
                      class="input-price"
                    />
                    <input
                      type="input"
                      name="to"
                      placeholder="Cho đến"
                      class="input-price"
                    />
                  </div>
                  <button type="submit" class="btn btn-check">Xác nhận</button>
                </div>
                <div class="filter-choice">
                  <h3 class="filter-title">Màu sắc</h3>
                  <ul class="col colors d-flex gap-10">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <div class="filter-choice">
                  <h3 class="filter-title">Loại sản phẩm</h3>
                  <select id="filter-select" value="1">
                    <option value="">Máy tính</option>
                    <option value="">Laptop</option>
                    <option value="">Điện thoại</option>
                    <option value="">Đồng hồ</option>
                  </select>
                </div>
                <div class="filter-choice">
                  <div class="filter-card mb-3">
                    <h3 class="filter-title">Thương hiệu</h3>
                    <select id="filter-select">
                      <option value="">Asus</option>
                      <option value="">Dell</option>
                      <option value="">HP</option>
                    </select>
                  </div>
                </div>

                <div class="filter-choice">
                  <div class="filter-card mb-3">
                    <h3 class="filter-title">Ram</h3>
                    <select id="filter-select">
                      <option value="">16gb</option>
                      <option value="">24gb</option>
                      <option value="">32gb</option>
                      <option value="">64gb</option>

                    </select>
                  </div>
                </div>
                <div class="filter-choice">
                  <div class="filter-card mb-3">
                    <h3 class="filter-title">Màn hình</h3>
                    <select id="filter-select">
                      <option value="">14 inch</option>
                      <option value="">15'6 inch</option>
                    

                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-9">
            <div class="paper">
              <img style="width:100%" src="https://lh3.googleusercontent.com/sE7rCkO33ULe3i5tIElLXuCKKLncKif7dlo1uRCNSFdb2TVuqm0kNYZXmjEJ4Dk2pzcP01xDizuFBtfhUxSfsoNhcCxOomcv=w1920-rw" alt="">
              </div>
           
            <div class="papper">
              <section class="product-show">
                <div class="product-sale-content">
                  <div class="row">
                  <?php 
                include "../../product.php";
                $products = product::getall();
                foreach ($products as $product) {
                    // print to html
                    echo " 
                    <div class='col col-2_4'>
                      <div class='product-card'>
                        <a
                          href='/pages/productDetail/AN515-58-773Y.html'
                          class='product-card-detail'
                        >
                          <div class='card-top'>
                            <div class='card-img'>
                              <img
                                src='".$product['img']."'
                                alt='".$product['name']."'
                              />
                            </div>
                            <div class='card-label'>
                              <span class='title-label'>Tiết kiệm</span>
                              <span class='content-label'>6.300.000 ₫</span>
                            </div>
                          </div>
                          <div class='card-body'>
                            <div class='card-title'>
                              ".$product['name']."
                            </div>
                            <div class='card-price'>
                              <div class='new-price'>". number_format($product['price'], 0, ',', '.') ." ₫</div>

                            </div>
                          </div>
                        </a>
                      </div>
                    </div>";
                }
            ?>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="title">Hỗ trợ khách hàng</div>
            <div class="menu">
              <div class="menu-item">Thẻ ưu đãi</div>
              <div class="menu-item">Hướng dẫn mua online</div>
              <div class="menu-item">Ưu đãi dành cho doanh nghiệp</div>
              <div class="menu-item">Chính sách trả góp</div>
              <div class="menu-item">Dịch vụ sửa chữa</div>
            </div>
          </div>
          <div class="col-3">
            <div class="title">Chính sách mua hàng</div>
            <div class="menu">
              <div class="menu-item">Điều kiện giao dịch chung</div>
              <div class="menu-item">Chính sách bảo hành</div>
              <div class="menu-item">Chính sách đổi trả</div>
              <div class="menu-item">Chính sách trả góp</div>
              <div class="menu-item">Giao hàng và lắp đặt tại nhà</div>
            </div>
          </div>
          <div class="col-3">
            <div class="title">Thông tin Luck And Power</div>
            <div class="menu">
              <div class="menu-item">Giới thiệu L&P</div>
              <div class="menu-item">Hệ thống cửa hàng</div>
              <div class="menu-item">Trung tâm bảo hành</div>
              <div class="menu-item">Chính sách bảo mật</div>
              <div class="menu-item">Tuyển dụng</div>
            </div>
          </div>
          <div class="col-3">
            <div class="title">Cộng đồng L&P</div>
            <div class="menu">
              <div class="menu-item">Gọi mua hàng 0913423421</div>
              <div class="menu-item">Gọi CSKH 0913423421</div>
              <div class="menu-item">Facebook L&P</div>
              <div class="menu-item">Youtue L&P</div>
              <div class="menu-item">Zalo L&P</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="title">Phương thức thanh toán</div>
            <div class="menu d-flex align-items gap-20">
              <div class="menu-item-icon">
                <i class="fa-solid fa-money-check-dollar"></i>
                Internet Banking
              </div>
              <div class="menu-item-icon">
                <i class="fa-solid fa-qrcode"></i>
                QR Code
              </div>
              <div class="menu-item-icon">
                <i class="fa-regular fa-clock"></i>
                Trả góp
              </div>
              <div class="menu-item-icon">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                Tiền mặt
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="title">Danh sách ngân hàng thanh toán online</div>
            <div class="menu">
              <img src="../../assets/images/vnpay_bank.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

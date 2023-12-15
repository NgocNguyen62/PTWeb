<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="homepage.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>HomePage</title>
</head>

<body>
  <div class="content-container">
    <header class="header has-sticky sticky-jump">
      <div class="wrapper">
        <div id="masthead" class="menu flex-row container-fluid row align-items-center logo-left medium-logo-center">
          <!-- Logo -->
          <div id="logo" class="col-3">
            <a href="#/" title="Trung Nguyên E-Coffee" rel="home">
              <img width="200" height="100" alt="Trung Nguyên E-Coffee" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/Logo-Màu-Trằng-E-Coffee.png" class="header_logo header-logo ls-is-cached lazyloaded" />
            </a>
          </div>
          <!-- Search Bar -->
          <div id="search-bar" class="col-4">
            <form role="search" method="get" class="search-form" action="https://trungnguyenecoffee.com/">
              <div class="input-group">
                <input type="search" id="woocommerce-product-search-field-0" class="form-control" placeholder="Tìm kiếm sản phẩm" value="" name="s" autocomplete="off" />
                <div class="input-group-append">
                  <button type="submit" value="Tìm kiếm" class="btn btn-secondary">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
              <div class="live-search-results text-left z-top">
                <div class="autocomplete-suggestions" style="
                      position: absolute;
                      display: none;
                      max-height: 300px;
                      z-index: 9999;
                    "></div>
              </div>
            </form>
          </div>
          <!-- Signin/Logup -->
          <div id="account" class="col-5">
            <ul class="nav nav-right container-fluid d-flex align-items-center">
              <li class="col-6">
                <a href="#" title="" class="text-decoration-none text-dark">
                  <span>Đăng nhập / Đăng ký</span>
                </a>
              </li>
              <!-- <li class="col-2 divider"></li> -->
              <li class="col-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                </svg>
                <a href="http://" class="text-decoration-none text-dark">
                  <span>Giỏ hàng</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <!-- Danh mục sản phẩm (Dropdown menu) -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                  </svg>
                  <span>Danh mục sản phẩm</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#/Caphedonggoi">
                    <img width="30" height="30" alt="cà phê đóng gói" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_Ca-phe-dong-goi.png" />
                    <span>Cà phê đóng gói</span>
                  </a>
                  <a class="dropdown-item" href="#/Quatangcaocap">
                    <img width="30" height="30" alt="quà tặng cao cấp" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/12/Icon-web-gift.png" />
                    <span>Quà tặng cao cấp</span>
                  </a>
                  <a class="dropdown-item" href="#/Vatphambanle">
                    <img width="30" height="30" alt="vật phẩm bán lẻ" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_Vat-pham-ca-phe.png" />
                    <span>Vật phẩm bán lẻ</span>
                  </a>
                  <a class="dropdown-item" href="#/Vatphamsachquy">
                    <img width="30" height="30" alt="vật phẩm sách quý" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_San-pham-sach-quy.png" />
                    <span>Vật phẩm sách quý</span>
                  </a>
                  <a class="dropdown-item" href="#/Vatphamdoitac">
                    <img width="30" height="30" alt="vật phẩm đối tác" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_San-pham-doi-tac.png" />
                    <span>Vật phẩm đối tác</span>
                  </a>
                  <a class="dropdown-item" href="#/maymocthietbi">
                    <img width="30" height="30" alt="máy móc thiết bị" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_May-moc-thiet-bi.png" />
                    <span> Máy móc thiết bị</span>
                  </a>
                  <a class="dropdown-item" href="#/Congcudungcu">
                    <img width="30" height="30" alt="cà phê đóng gói" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_Cong-cu-dung-cu.png" />
                    <span>Công cụ dụng cụ</span>
                  </a>
                  <a class="dropdown-item" href="#/Baobithuonghieu">
                    <img width="30" height="30" alt="cà phê đóng gói" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_Bao-bi-thuong-hieu.png" />
                    <span>Bao bì thương hiệu</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img width="30" height="30" alt="cà phê đóng gói" decoding="async" loading="lazy" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Icon-web_Ca-phe-dong-goi.png" />
                    Cà phê đóng gói
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Câu chuyện thương hiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nhượng quyền</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Khuyến mãi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tin tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cửa hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tuyển dụng</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <div>Content</div>
    <footer id="footer" class="footer-wrapper">
      <section class="section text-white">
        <div class="information">
          <div class="section-content">
            <div class="row row-collapse row-ful-width hide-for-medium">
              <div class="col text-left pl-1">
                <h4 class="uppercase">
                  CÔNG TY CỔ PHẦN TRUNG NGUYÊN FRANCHISING
                </h4>
                <p>
                  87A Cách Mạng Tháng 8, Phường Bến Thành, Quận 1, Hồ Chí Minh
                </p>
                <p>Hotline: 1900 96 96 68</p>
                <p>Liên hệ hợp tác Nhượng Quyền E-Coffee:</p>
                <p>Hotline1: 088 673 1188</p>
                <p>Hotline2: 081 673 1188</p>
                <p>GPKD: 0310939343</p>
              </div>
              <div class="col text-left">
                <h4 class="uppercase">LIÊN KẾT NHANH</h4>
                <p>Trung Nguyên Legend Café</p>
                <p>Thế Giới Cà Phê</p>
                <p>Trung Nguyên Legend</p>
                <p>Bảo Tàng Thế Giới Cà Phê</p>
                <p>Tra cứu hóa đơn điện tử</p>
                <p>Đóng góp ý kiến</p>
              </div>
              <div class="col text-left">
                <h4 class="uppercase">HỖ TRỢ KHÁCH HÀNG</h4>
                <p>Chính sách bảo mật</p>
                <p>Chính sách và điều khoản</p>
                <p>Chính sách giao nhận hàng</p>
                <p>Chính sách bảo hành và đổi trả</p>
                <p>Chính sách hoàn trả hàng và hoàn tiền</p>
              </div>
              <div class="col text-left">
                <h4 class="uppercase">FANPAGE</h4>
                <p>Trung Nguyên E-Coffee</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

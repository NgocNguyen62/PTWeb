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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators flickity-page-dots">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active dot" aria-label="Page dot 1"></li>
                <li data-target="#carouselExampleIndicators" class="dot" data-slide-to="1" aria-label="Page dot 2">
                </li>
                <li data-target="#carouselExampleIndicators" class="dot" data-slide-to="2" aria-label="Page dot 3">
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../web/assets//home//home1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../web/assets//home//home2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../web/assets//home//home3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="content">

            <div class="coffee">
                <div class="line">
                </div>
                <div class="box-line">
                    <strong>Trung Nguyên E-Coffee</strong>
                </div>
            </div>
            <div class="col-text">
                <p>Một <strong>THẾ GIỚI CÀ PHÊ</strong> thu nhỏ...
                    <br />
                    Một hệ thống F&B (đồ ăn, thức uống), bán lẻ <strong>TOÀN DIỆN< VƯỢT TRỘI</strong>
                            <br />
                            Một môi trường HỢP TÁC tạo nên hệ sinh thái cà phê THỊNH VƯỢNG…
                </p>
                <br />
                <p>
                    Nơi <strong>KHỞI NGHIỆP CÀ PHÊ</strong>
                    <br />
                    và cùng <strong>CHUNG TAY</strong> tạo giá trị gia tăng về <strong>LỢI ÍCH KINH TẾ</strong>, song song
                    <br />
                    <strong>PHỤNG SỰ XÃ HỘI</strong> một cách <strong>THIẾT THỰC và BỀN VỮNG!</strong>
                </p>
            </div>
            <img src="../../web/assets/home/coop-bot.png" />
            <div class="coffee">
                <div class="line">
                </div>
                <div class="box-line a">
                    <strong>Thông Tin Nhượng Quyền Trung Nguyên E-Coffee</strong>
                </div>
            </div>
            <!-- <div class="coffee">
                <div class="col col-border">
                    <div class="line">
                        <div class="box-line">
                            <strong>GÓI THỊNH VƯỢNG</strong>
                        </div>
                    </div>
                </div>
                <div class="col col-border">
                    <div class="line">
                        <div class="box-line">
                            <strong>GÓI KHỞI NGHIỆP</strong>
                        </div>
                    </div>
                </div>
                <div class="col col-border">
                    <div class="line">
                        <div class="box-line">
                            <strong>GÓI KẾT NỐI</strong>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container-divide">
                <div class="child">
                    <div class="coffee width">
                        <div class="line">
                        </div>
                        <div class="box-line size">
                            <strong>GÓI THỊNH HÀNH</strong>
                        </div>
                    </div>
                    <img class='content-img' src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/G%C3%B3i-Th%E1%BB%8Bnh-V%C6%B0%E1%BB%A3ng-768x688.jpg" alt="">
                </div>
                <div class="child">
                    <div class="coffee width">
                        <div class="line">
                        </div>
                        <div class="box-line size">
                            <strong>GÓI KHỞI NGHIỆP</strong>
                        </div>
                    </div>
                    <img class='content-img' src="https://trungnguyenecoffee.com/wp-content/uploads/2020/10/C2-1-%C4%91%C6%B0%E1%BB%9Dng-Ch%C3%A2u-V%C4%83n-Li%C3%AAm-KDC-H%C3%B9ng-V%C6%B0%C6%A1ng-2-P.Ph%C3%BA-Th%E1%BB%A7y-Tp.Phan-Thi%E1%BA%BFt-BT-1170x800.jpg" alt="">
                </div>
                <div class="child">
                    <div class="coffee width">
                        <div class="line">
                        </div>
                        <div class="box-line size">
                            <strong>GÓI KẾT NỐI</strong>
                        </div>
                    </div>
                    <img class='content-img' src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/1ec6d7c9fb45041b5d54-1038x800.jpg" alt="">
                </div>
            </div>
            <div class="coffee">
                <div class="line">
                </div>
                <div class="box-line a">
                    <strong>Khách Hàng Nói Gì Về Chúng Tôi</strong>
                </div>
            </div>
            <div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="rate">
                                <div class="star1">
                                    <img class="border-radius" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/Phan-Minh-Hi%E1%BB%81n-Tri%E1%BA%BFt-1-280x280.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="star2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <p>Cà phê Trung Nguyên</p>
                                    <p><strong>Anh Phan Minh Hiền Triết</strong>/Cần Thơ</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="rate">
                                <div class="star1">
                                    <img class="border-radius" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/Phan-Minh-Hi%E1%BB%81n-Tri%E1%BA%BFt-1-280x280.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="star2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <p>Cà phê Trung Nguyên</p>
                                    <p><strong>Anh Phan Minh Hiền Triết</strong>/Cần Thơ</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="rate">
                                <div class="star1">
                                    <img class="border-radius" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/Phan-Minh-Hi%E1%BB%81n-Tri%E1%BA%BFt-1-280x280.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="star2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <p>Cà phê Trung Nguyên</p>
                                    <p><strong>Anh Phan Minh Hiền Triết</strong>/Cần Thơ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer id="footer" class="footer-wrapper">
            <section class="section text-white">
                <div class="bg-dark">
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
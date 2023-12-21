<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <!-- <link rel="stylesheet" href="tintuc.css"> -->
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .content {
            margin-top: 30px;
            margin-bottom: 30px;
            width: 80%;
            text-align: center;
        }

        .start-align {
            align-self: flex-start;
        }

        .content-title {
            height: 70px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90%;
        }

        .box-line {
            border: solid 1px #e5e5e5;
            font-size: 20px;
            position: absolute;
            top: 15%;
            padding: 10px;
            background-color: white;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: #e5e5e5;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .card {
            border: none;
            height: 100%;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
            transition: transform 0.5s ease-out;
        }

        .card:hover .card-text {
            color: rgb(211, 201, 88);
        }

        .is-divider {
            height: 3px;
            background-color: #000;
            margin: 1em auto;
            width: 100px;
            max-width: 100%;
            display: block;
        }
    </style>
</head>

<body>
<?php echo $this->render('navbar'); ?>
    <div class="wrapper">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/11/Toan-Bao-Tang-min.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/11/Hoi-Thao-Ha-Noi-min.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/11/3-nen-van-minh-min.png" alt="Second slide">
                </div>

            </div>
        </div>
        <div class="container">
            <!-- TIN NOI BAT -->
            <div class="content">
                <div class="d-flex justify-content-start align-items-center">
                    <div>
                        <h4 class="start-align">TIN NỔI BẬT</h4>
                    </div>
                </div>
                <hr style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card" style="max-width: 400px;">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2022/09/H1-600x480.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">KHÔNG KHÍ RỘN RÀNG KHAI TRƯƠNG CỬA HÀNG TRUNG NGUYÊN E-COFFEE NGUYỄN ĐÌNH CHIỂU – NINH THUẬN
                                    </h6>

                                    <p class="card-text">Cửa hàng Trung Nguyên E-Coffee Nguyễn Đình Chiểu tại Thị trấn Tân Sơn, Ninh Thuận </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!--TIN KHUYẾN MÃI  -->
            <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4>TIN KHUYẾN MÃI</h4>
                    </div>
                    <div>
                        <a class="font-weight-bold" href="#/">
                            Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>

                <hr style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/12/700-x-400px.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">VUI GIÁNG SINH – NHẬN PHIN NHÔM TRỐNG ĐỒNG XỊN</h6>

                                        <p class="card-text">Thêm không khí tưng bừng cho mùa Giáng Sinh thêm rộn rã,[...]</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/12/THUMNAIL-768x439.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">ĐÓN GIÁNG SINH CÙNG ƯU ĐÃI SIÊU XỊN – “CÀ PHÊ MUỐI E-COFFEE CHỈ 19.000Đ”</h6>

                                        <p class="card-text">Trung Nguyên E-Coffee xin gửi đến quý khách hàng chương trình ưu đãi hấp dẫn dịp Giáng Sinh năm nay! </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/12/thumnail-700x400px-768x439.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">DUY NHẤT 12.12 – ƯU ĐÃI KHỦNG CHỜ BẠN SĂN NGAY</h6>

                                        <p class="card-text">Cùng Trung Nguyên E-Coffee đón chờ cơn mưa ưu đãi cực “hot” </p>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!--TIN NHƯỢNG QUYỀN -->
            <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4>TIN NHƯỢNG QUYỀN</h4>
                    </div>
                    <div>
                        <a class="font-weight-bold" href="/">
                            Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>

                <hr style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/11/6ae0eb86e42933776a383-2048x1574.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">TRUNG NGUYÊN E-COFFEE 15-17 ĐƯỜNG 15B, PHƯỜNG PHÚ MỸ, QUẬN 7, THÀNH PHỐ HỒ CHÍ MINH
                                        </h6>

                                        <p class="card-text">Khai Trương Không Gian Trung Nguyên E-Coffee mới Quận 7 – Thành Phố Hồ Chí Minh [...]</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/11/anh_Viber_2023-10-27_09-41-14-710.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">TRUNG NGUYÊN E-COFFEE TẦNG TRỆT, TRUNG TÂM DỊCH VỤ, LÔ DV3, ĐƯỜNG LONG HẬU – HIỆP PHƯỚC, KCN LONG HẬU MỞ RỘNG, XÃ LONG HẬU, HUYỆN CẦN GIUỘC TỈNH LONG AN</h6>

                                        <p class="card-text">Chào Mừng Sự Xuất Hiện Không Gian Trung Nguyên E-Coffee KCN Long Hậu, Tỉnh Long An. </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/11/e80c1beca44f73112a5e.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">RUNG NGUYÊN E-COFFEE 73 PHAN NGỌC TÒNG, PHƯỜNG AN HỘI, THÀNH PHỐ BẾN TRE, TỈNH BẾN TRE</h6>

                                        <p class="card-text">Khai Trương Không Gian Trung Nguyên E-Coffee mới tại Thành Phố Bến Tre</p>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- THƯ VIỆN KIẾN THỨC -->
            <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4>THƯ VIỆN KIẾN THỨC</h4>
                    </div>
                    <div>
                        <a class="font-weight-bold" href="/">
                            Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>

                <hr style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/09/KVChai250ml-BannerWeb1-1920x1080px-768x432.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Sẻ Chia Năng Lượng Ngọt Ngào Với Pudding Legend Cà Phê Sữa Đá</h6>

                                        <p class="card-text">Hôm nay, Trung Nguyên Legend sẽ giới thiệu đến bạn một công thức mới kết hợp giữa kem, sữa và cà phê</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/09/KVChai250ml-BannerWeb1-1920x1080px-768x432.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Cà Phê Chai Hạt Mộc Trung Nguyên E-Coffee
                                        </h6>
                                        <p class="card-text">Sản phẩm Cà Phê Chai Hạt Mộc Trung Nguyên E-Coffee được nhiều khách hàng lựa chọn</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/09/KVChai250ml-BannerWeb1-1920x1080px-768x432.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Nạp Năng Lượng Sáng Tạo, Tươi Trẻ Với Cà Phê Trung Nguyên Legend Passiona Khổ Qua</h6>

                                        <p class="card-text">Nạp năng lượng sáng tạo, tươi trẻ với Cà phê Trung Nguyên Legend Passiona khổ qua.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- VỀ TẬP ĐOÀN TRUNG NGUYÊN LEGEND -->
            <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4>VỀ TẬP ĐOÀN TRUNG NGUYÊN LEGEND</h4>
                    </div>
                    <div>
                        <a class="font-weight-bold" href="/">
                            Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </a>
                    </div>
                </div>

                <hr style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenlegend.com/wp-content/uploads/2020/08/ecf1nam.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Lịch sử phát triển Tập Đoàn Trung Nguyên Legend
                                        </h6>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenlegend.com/wp-content/uploads/2020/08/ecf1nam.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">MV Hướng Dương – Wowy x Trung Nguyên Legend!
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/ky-niem-1-nam-ecoffee-768x402.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">Kỷ Niệm 1 Năm Ra Đời Trung Nguyên E-Coffee</h6>

                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <?php echo $this->render('footer'); ?>
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
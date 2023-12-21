<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
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

        .card-img-top {
            height: 200px;
            /* Set the desired height */
            object-fit: cover;
            /* Ensure the image covers the entire container */
        }

        .card-body {
            height: 100%;
            /* Ensure consistent card heights */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://trungnguyenecoffee.com/wp-content/uploads/2023/10/1366x540-1400x553.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/Bannner-T.chu_.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/1360x540px.NQTNE_-1400x556.jpg" class="d-block w-100" alt="...">
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

        <div class="container">
            <div class="content">
                <h4>Thiết kế mô hình cửa hàngTrung Nguyên E-Coffee
                </h4>
                <div class="is-divider"></div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/Gói-Thịnh-Vượng-893x800.jpg" alt="Thịnh Vượng">
                                <div class="card-body">
                                    <h6 class="card-title">THỊNH VƯỢNG</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/10/C2-1-đường-Châu-Văn-Liêm-KDC-Hùng-Vương-2-P.Phú-Thủy-Tp.Phan-Thiết-BT-1170x800.jpg" alt="Khởi Nghiệp">
                                <div class="card-body">
                                    <h6 class="card-title">KHỞI NGHIỆP</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/1ec6d7c9fb45041b5d54-1038x800.jpg" alt="Kết Nối">
                                <div class="card-body">
                                    <h6 class="card-title">KẾT NỐI</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- DANH SACH CUA HANG -->
            <div class="content">
                <div class="container">
                    <div class="content-title mb-5">
                        <div class="line"></div>
                        <div class="box-line">
                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                                <span class="ml-2">DANH SÁCH CỬA HÀNG TRUNG NGUYÊN E-COFFEE TOÀN QUỐC</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ĐỊA CHỈ</th>
                                            <th>QUẬN/ HUYỆN/ TP</th>
                                            <th>TỈNH</th>
                                            <th>SỐ ĐIỆN THOẠI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>218Bis Cô Giang, P. Cô Giang</td>
                                            <td>1</td>
                                            <td>HCM</td>
                                            <td>0915.289.929</td>
                                        </tr>
                                        <tr>
                                            <td>324 Nguyễn Đình Chiểu, P. 4</td>
                                            <td>3</td>
                                            <td>HCM</td>
                                            <td>0915.289.926</td>
                                        </tr>
                                        <tr>
                                            <td>89 Trương Công Định, Phường 13</td>
                                            <td>Tân Bình</td>
                                            <td>HCM</td>
                                            <td>0911.190.058</td>
                                        </tr>
                                        <tr>
                                            <td>53 Cao Bá Nhạ, P. Nguyễn Cư Trinh</td>
                                            <td>1</td>
                                            <td>HCM</td>
                                            <td>0986.068.125</td>
                                        </tr>
                                        <tr>
                                            <td>61 Nguyễn Cư Trinh, P. Nguyễn Cư Trinh</td>
                                            <td>1</td>
                                            <td>HCM</td>
                                            <td>0975.024.519</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <a href="./danhsachcuahang.php" target="_blank" class="btn btn-dark">
                            Xem tất cả cửa hàng </i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- CUA HANG MOI KHAI TRUONG -->
            <div class="content">
                <div class="container">
                    <div class="content-title mb-5">
                        <div class="line"></div>
                        <div class="box-line">
                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <span class="ml-2">Cửa Hàng Mới Khai Trương</span>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="#/">
                                    <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2023/11/6ae0eb86e42933776a383-2048x1574.jpg">
                                    <div class="card-body">
                                        <h6 class="card-title">TRUNG NGUYÊN E-COFFEE 15-17 ĐƯỜNG 15B, PHƯỜNG PHÚ MỸ, QUẬN 7, THÀNH PHỐ HỒ CHÍ MINH
                                        </h6>
                                        <!-- <p class="card-text">Khai Trương Không Gian Trung Nguyên E-Coffee mới Quận 7 – Thành Phố Hồ Chí Minh [...]</p> -->
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
                                        <!-- <p class="card-text">Chào Mừng Sự Xuất Hiện Không Gian Trung Nguyên E-Coffee KCN Long Hậu, Tỉnh Long An. </p> -->
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
                                        <!-- <p class="card-text">Khai Trương Không Gian Trung Nguyên E-Coffee mới tại Thành Phố Bến Tre</p> -->
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- MO HINH CUA HANG -->
            <div class="content">
                <div class="container">
                    <div class="content-title mb-5">
                        <div class="line"></div>
                        <div class="box-line">
                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                                <span class="ml-2">Mô Hình Cửa Hàng</span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/1ec6d7c9fb45041b5d54-2048x1578.jpg">
                            <div class="card-body">
                                <p class="card-text">Hồ Trung Văn, Trung Văn, Nam Từ Liêm, Hà Nội
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/cd11f77428ddd4838dcc-2048x1536.jpg">
                            <div class="card-body">
                                <p class="card-text">Số 105 Bạch Đằng, Phường 02, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/S%E1%BB%91-105-B%E1%BA%A1ch-%C4%90%E1%BA%B1ng-Ph%C6%B0%E1%BB%9Dng-02-Qu%E1%BA%ADn-T%C3%A2n-B%C3%ACnh-TP.-H%E1%BB%93-Ch%C3%AD-Minh.jpg">
                            <div class="card-body">
                                <p class="card-text">31 Nguyễn Huệ, Phường Phước Hiệp, TP. Bà Rịa, Tỉnh Bà Rịa – Vũng Tàu.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <a href="./hinhanhmohinh.php" target="_blank" class="btn btn-dark">
                            Xem thêm cửa hàng </i>
                        </a>
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
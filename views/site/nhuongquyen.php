<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhượng Quyền</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <style>
        /* .content {
    margin-top: 30px;
    margin-bottom: 30px;
    text-align: center;
} */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            width: 70%;
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
            height: 100%;
            object-fit: cover;
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
                    <img class="d-block w-100" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/1360x540px.NQTNE_-scaled.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://trungnguyenecoffee.com/wp-content/uploads/2021/08/f3bc9e28631d9443cd0c-scaled.jpg" alt="Second slide">
                </div>

            </div>
        </div>
        <!-- LỢI THẾ MÔ HÌNH NHƯỢNG QUYỀN TRUNG NGUYÊN E-COFFEE -->
        <div class="container"></div>
        <div class="content">
            <div class="container">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
                            </svg>
                            <span class="ml-2">LỢI THẾ MÔ HÌNH NHƯỢNG QUYỀN TRUNG NGUYÊN E-COFFEE</span>
                        </h4>
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col">
                        <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/loi-the-1-640x800.jpg" class="img-fluid" alt="thương hiệu số 1">
                    </div>

                    <div class="col">
                        <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-02-640x800.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col">
                        <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-03-640x800.jpg" class="img-fluid" alt="kết nối cộng đồng thành công">
                    </div>

                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="#/">
                            <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-04-768x960.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#/">
                            <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-05-768x960.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#/">
                            <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-06-768x960.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#/">
                            <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/10/LoiTheMoHinhNhuongQuyen-07-768x960.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--QUY TRÌNH HỢP TÁC NHƯỢNG QUYỀN  -->
        <div class="content">
            <div class="container">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
                            </svg>
                            <span class="ml-2">QUY TRÌNH HỢP TÁC NHƯỢNG QUYỀN</span>
                        </h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="#/">
                            <img src="https://trungnguyenecoffee.com/wp-content/uploads/2020/10/Version-Web-1400x438.jpg" class="img-fluid" alt="buoc 1">
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <!--GÓC CHIA SẺ TỪ ĐỐI TÁC  -->
        <div class="content">
            <div class="container">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            <span class="ml-2">GÓC CHIA SẺ TỪ ĐỐI TÁC</span>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <button class="btn" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">

                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2022/01/AM2Q4649-768x512.jpg">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Anh Hồ Minh Triển – Đối tác Thành Công – Trung Nguyên E-Coffee 89 Nguyễn Thị Sáu, Q.12, HCM</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Cà phê Trung Nguyên là sản phẩm cà phê mang thương hiệu Việt mà tôi thần thượng và tự hào từ thuở thiếu niên.[...] </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/vo_thi_hai_avt.png">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Cô Vũ Thị Hải – Đối Tác Thành Công – Trung Nguyên E-Coffee 005 Chung Cư Sư Vạn Hạnh, Q.10</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Tôi đã kinh doanh cà phê Trung Nguyên từ năm 2001 đến nay .[...] </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/chau_ngoc_hai_avt.png">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Anh Châu Ngọc Hải – Đối Tác Thành Công – Trung Nguyên E-Coffee 120B Linh Đông, Q.Thủ Đức</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Vợ chồng tôi chưa từng kinh doanh hàng quán, đặc biệt kiểu quán cà phê[...] </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2022/02/DSC_0635-768x513.jpg">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Chị Nguyễn Thị Hồng Diễm – Đối tác Thành Công – Trung Nguyên E-Coffee (683A Âu Cơ, Quận Tân Phú, TP. HCM)</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Tại sao Trung Nguyên E-Coffee được hơn 1.000 đối tác trong[...] </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/chau_ngoc_hai_avt.png">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Anh Phạm Hiền Vương – Đối Tác Nhượng Quyền Thành Công – Trung Nguyên E-Coffee CC Sunrise Riverside Nhà Bè, HCM</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Anh Phạm Hiền Vương – Chủ Đầu Tư cửa hàng Trung Nguyên E-Coffee[...] </p>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2022/02/DSC_0864-768x513.jpg">
                                                <div class="card-body">
                                                    <a href="#/">
                                                        <h6 class="card-title">Anh Thái Vũ Hoàng Phong – Đối tác Thành Công – Trung Nguyên E-Coffee (57 Đường Số 1, Khu Hiệp Ân, Quận 8, TP. HCM)</h6>
                                                        <div class="text-center">
                                                            <div class="is-divider" style="max-width: 50px;"></div>
                                                        </div>
                                                        <p class="card-text">Trong năm vừa qua, với không ít thách thức từ đại dịch Covid-19[...] </p>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--ĐĂNG KÝ TƯ VẤN HỢP TÁC KINH DOANH  -->
        <div class="content bg-light">
            <div class="container  ">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022" />
                            </svg>
                            <span class="ml-2">ĐĂNG KÝ TƯ VẤN HỢP TÁC KINH DOANH</span>
                        </h4>
                    </div>

                </div>
            </div>

            <p style="text-align: center; color: black;">
                Vui lòng đăng ký nhận thông tin tư vấn nếu bạn quan tâm đến hợp tác nhượng quyền cùng Trung Nguyên E-Coffee.
                Trân trọng cảm ơn!
            </p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="" method="post" aria-label="Contact form" novalidate="novalidate" data-status="init">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Họ Tên *" name="your-name" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Điện thoại *" name="tel-604" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email *" name="your-email" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-control" name="menu-381" required>
                                <option value="">-- Chọn khu vực --</option>
                                <!-- Add your options here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Ghi chú" name="textarea-27"></textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-dark fw-bold">ĐĂNG KÝ</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--HÌNH ẢNH MÔ HÌNH  -->
        <div class="content">
            <div class="container">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            <span class="ml-2">HÌNH ẢNH MÔ HÌNH</span>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/S%E1%BB%91-38C-H%C3%B9ng-V%C6%B0%C6%A1ng-Long-Xuy%C3%AAn-An-Giang-1.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">TRUNG NGUYEN E-COFFEE</h6>

                                    <p class="card-text">38C , Hùng Vương , Long Xuyên , An Giang </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/Chung-C%C6%B0-Remax-S%E1%BB%91-116-117-118-B%C3%A3i-S%E1%BA%ADy-Ph%C6%B0%E1%BB%9Dng-1-Qu%E1%BA%ADn-6-Th%C3%A0nh-ph%E1%BB%91-H%E1%BB%93-Ch%C3%AD-Minh-1536x1024.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">TRUNG NGUYEN E-COFFEE</h6>

                                    <p class="card-text">38C , Hùng Vương , Long Xuyên , An Giang </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/C2-1-%C4%91%C6%B0%E1%BB%9Dng-Ch%C3%A2u-V%C4%83n-Li%C3%AAm-P2-Ph%C3%BA-Thu%E1%BB%B7-TP-Phan-Thi%E1%BA%BFt-B%C3%ACnh-Thu%E1%BA%ADn-1536x1152.jpg">
                                <div class="card-body">
                                    <h6 class="card-title">TRUNG NGUYEN E-COFFEE</h6>

                                    <p class="card-text">38C , Hùng Vương , Long Xuyên , An Giang </p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--HÌNH ẢNH ĐÀO TẠO  -->
        <div class="content">
            <div class="container">
                <div class="content-title mb-5 mt-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            <span class="ml-2">HÌNH ẢNH ĐÀO TẠO</span>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/76654364_3184830428198889_9350401501429760_o-1536x1024.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/77110788_3184830388198893_4630037670653853696_n.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/3438862b3ff4c0aa99e5.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/9aefa3241afbe5a5bcea.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/d084ddb663699c37c578.jpg">
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/67f5ac6d15b2eaecb3a3.jpg">
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình ảnh mô hình

    </title>
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

        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
<?php echo $this->render('navbar'); ?>
    <div class="container">
        <div class="content">
            <div class="container">
                <div class="content-title mb-5">
                    <div class="line"></div>
                    <div class="box-line">
                        <h4>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            <span class="ml-2">Mô Hình Cửa Hàng</span>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/1ec6d7c9fb45041b5d54-2048x1578.jpg">
                                <div class="card-body">
                                    <p class="card-text">Hồ Trung Văn, Trung Văn, Nam Từ Liêm, Hà Nội
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/cd11f77428ddd4838dcc-2048x1536.jpg">
                                <div class="card-body">
                                    <p class="card-text">Số 105 Bạch Đằng, Phường 02, Quận Tân Bình, TP. Hồ Chí Minh</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/S%E1%BB%91-105-B%E1%BA%A1ch-%C4%90%E1%BA%B1ng-Ph%C6%B0%E1%BB%9Dng-02-Qu%E1%BA%ADn-T%C3%A2n-B%C3%ACnh-TP.-H%E1%BB%93-Ch%C3%AD-Minh.jpg">
                                <div class="card-body">
                                    <p class="card-text">31 Nguyễn Huệ, Phường Phước Hiệp, TP. Bà Rịa, Tỉnh Bà Rịa – Vũng Tàu.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/10/Vincom-C%C3%A0-Mau.jpg">
                                <div class="card-body">
                                    <p class="card-text">Vincom Cà Mau</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/Tr%E1%BA%A7n-Nh%C3%A2n-T%C3%B4ng-K%C4%90Th%E1%BB%8B-K1-Tp-Phan-Rang-Ninh-Thu%E1%BA%ADn.jpg">
                                <div class="card-body">
                                    <p class="card-text">Trần Nhân Tông, KĐThị K1, Tp Phan Rang, Ninh Thuận</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/X%C3%B3m-3-X%C3%A3-Di%E1%BB%85n-%C4%90%E1%BB%93ng-Huy%E1%BB%87n-Di%E1%BB%85n-Ch%C3%A2u-T%E1%BB%89nh-Ngh%E1%BB%87-An-2048x1847.jpg">
                                <div class="card-body">
                                    <p class="card-text">Xóm 3, Xã Diễn Đồng, Huyện Diễn Châu, Tỉnh Nghệ An</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/Th%C6%B0-Vi%E1%BB%87n-Khoa-H%E1%BB%8Dc-T%E1%BB%95ng-H%E1%BB%A3p-69-L%C3%BD-T%E1%BB%B1-Tr%E1%BB%8Dng-Ph%C6%B0%E1%BB%9Dng-B%E1%BA%BFn-Th%C3%A0nh-Qu%E1%BA%ADn-1-2048x1536.jpg">
                                <div class="card-body">
                                    <p class="card-text">Thư Viện Khoa Học Tổng Hợp, 69 Lý Tự Trọng, Phường Bến Thành, Quận 1</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/S%E1%BB%91-408-Tr%C6%B0%E1%BB%9Dng-Sa-Ph%C6%B0%E1%BB%9Dng-2-Qu%E1%BA%ADn-Ph%C3%BA-Nhu%E1%BA%ADn-TP.-H%E1%BB%93-Ch%C3%AD-Minh-2048x1536.jpg">
                                <div class="card-body">
                                    <p class="card-text">Số 408 Trường Sa, Phường 2, Quận Phú Nhuận, TP. Hồ Chí Minh</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <a href="#/">
                                <img class="card-img-top img-fluid" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/T%E1%BA%A7ng-Tr%E1%BB%87t-d%E1%BB%B1-%C3%A1n-Kingston-146-Nguy%E1%BB%85n-V%C4%83n-Tr%E1%BB%97i-Q.-Ph%C3%BA-Nhu%E1%BA%ADn.jpg">
                                <div class="card-body">
                                    <p class="card-text">Tầng Trệt dự án Kingston 146 Nguyễn Văn Trỗi, Q. Phú Nhuận</p>
                                </div>
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
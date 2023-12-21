<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các cửa hàng</title>
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

        table {
            border: none;
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
                        <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            <span class="ml-2">DANH SÁCH CỬA HÀNG TRUNG NGUYÊN E-COFFEE TOÀN QUỐC</span>
                        </h4>
                    </div>
                </div>
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
                            <td>1</td>
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
                            <td>C01- 02 C/c Hoàng Anh River View 37 Nguyễn Văn Hưởng, P. Thảo Điền</td>
                            <td>2</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>Homyland Riverside – Shophouse 5- 403A Nguyễn Duy Trinh, P. Bình Trưng Tây, Quận 2, TP.HCM</td>
                            <td>1</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>9 đường D7, phường Bình An, Quận 2</td>
                            <td>2</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>SAV3-00.07 Dự án The Sunavenue số 28 Mai Chí Thọ, P. An Phú </td>
                            <td>2</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>61 Nguyễn Cư Trinh, P. Nguyễn Cư Trinh</td>
                            <td>2</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>17A Đường 36, Phường Tân Quy, Quận 7, TP HCM</td>
                            <td>4</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>81 Trần Bình Trọng, P.1</td>
                            <td>5</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>206 Trần Văn Kiểu, Phường 10</td>
                            <td>6</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>229 Bình Phú, Phường 11, Quận 6, TP. Hồ Chí Minh</td>
                            <td>6</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>43A Tân Hòa Đông, P.14</td>
                            <td>6</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>753 Hồng Bàng, Phường 6</td>
                            <td>6</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>74 Lê Thị Chợ (Số cũ 1333/74 Huỳnh Tấn Phát), KP4, P. Phú Thuận</td>
                            <td>7</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>65 Nguyễn Thị Thập, Khu Dân Cư Him Lam, Phường Tân Hưng</td>
                            <td>8</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>Số 27 đường số 10, khu phố Starhill, P. Tân Phú</td>
                            <td>8</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                        <tr>
                            <td>FSost F-Town 3 KCNC</td>
                            <td>9</td>
                            <td>HCM</td>
                            <td>0975.024.519</td>
                        </tr>
                    </tbody>
                </table>
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
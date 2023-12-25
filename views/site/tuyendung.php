<?php
/** @var yii\web\View $this */

/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tuyển dụng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cart.css" />
    <link rel="stylesheet" href="css/thanhtoan.css" />
    <link rel="stylesheet" href="css/tuyendung.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>
<img src="https://trungnguyenecoffee.com/wp-content/uploads/2020/08/Tuy%E1%BB%83n-D%E1%BB%A5ng.jpg" alt="">
<div class="total-container">
    <div class="text-top">
        <div class="text-left">
            <h5><strong>MÔI TRƯỜNG SÁNG TẠO</strong></h5>
            <p>Với sự năng động, sáng tạo, và chuyên nghiệp Trung Nguyên E-Coffee sẽ là môi trường làm việc lý 
                tưởng cho bạn phát huy tất cả tài năng với sự hỗ trợ của những người cộng sự năng nổ và thân thiện.</p>
        </div>
        <div class="text-center">
        <h5><strong>HỌC TẬP VÀ HOÀN THIỆN BẢN THÂN</strong></h5>
        <p>Đến với Trung Nguyên E-Coffee, bạn sẽ được đào tạo và hoàn thiện bản thân trong môi trường bán lẻ 
            năng động và chuyên biệt nhất về cà phê với hơn 24 năm kinh nghiệm từ Tập Đoàn Trung Nguyên Legend.</p>
        </div>
        <div class="text-right">
        <h5><strong>CƠ HỘI PHÁT TRIỂN SỰ NGHIỆP</strong></h5>
        <p>Lộ trình thăng tiến rõ ràng cho bạn trong ngành F&B với sự phát triển không ngừng của chuỗi Trung
             Nguyên E-Coffee và tập đoàn Trung Nguyên Legend</p>
        </div>
    </div>
    <div class="tuyen-dung-table">
    <h5><strong>KHỐI VĂN PHÒNG</strong></h5>
        <div class="line">
        </div>
        <table class='table-apply'>
            <thead class='head-table'>
                <tr>
                    <th class="margin-th"><strong>VỊ TRÍ</strong></th>
                    <th class="margin-th"><strong>ĐỊA ĐIỂM</strong></th>
                    <th class="margin-th"><strong>SỐ LƯỢNG</strong></th>
                    <th class="margin-th"><strong>HẠN NỘP</strong></th>
                    <th class="margin-th"><strong>ỨNG TUYỂN</strong></th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td>Nhân viên bảo trì</td>
                    <td>Cửa hàng Cà phê Trung Nguyên</td>
                    <td>10</td>
                    <td>31/12/2024</td>
                    <td><button class="apply">Ứng tuyển</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->render('footer'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
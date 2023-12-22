<?php
/** @var yii\web\View $this */

/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use app\models\base\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$items = Yii::$app->user->identity->getCart();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cart.css" />
    <link rel="stylesheet" href="css/thanhtoan.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>
<div class="total-container">
    <div class="left-cart">
    <div class="payment-form">
        <h5 class="margin-form"><strong>THANH TOÁN VÀ GIAO HÀNG</strong></h5>
        <form action="#" method="post">
            <div class="form-group">
                <label for="full_name" required>Họ và Tên:</label>
                <input type="text" id="full_name" name="full_name" placeholder="Họ và Tên của bạn" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Số Điện Thoại:</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="Số điện thoại của bạn" required>
            </div>

            <div class="form-group">
                <label for="email">Địa Chỉ Email:</label>
                <input type="email" id="email" name="email" placeholder="Địa chỉ email của bạn" required>
            </div>

            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <textarea id="address" name="address" rows="4" placeholder="Địa chỉ cụ thể của bạns" required></textarea>
            </div>

            <button type="submit"><strong>Đặt hàng</strong></button>
        </form>
    </div>

    </div>
    <div class="right-cart">
        <div class="bill">
            <div class="bill-margin">
                <h5 class="h4-margin"><strong>ĐƠN HÀNG CỦA BẠN</strong></h5>
                <table class="table-cart">
                    <thead>
                    <tr class="tr-table">
                        <th>Sản phẩm</th>

                        <th>Tạm tính</th>

                    </tr>
                    </thead>
                    <tbody class="body-thanhtoan">
                    <?php foreach ($items as $item) {
                        $product = $item[0];
                        $quantity = $item[1];
                        ?>
                        <tr>
                            <td class="product">
                                <img class="img-cart" src="<?= $product->avatar ?>" alt="">
                                <?= $product->name . ' x ' . $quantity ?>
                            </td>
                            <td class="price" id="price-<?= $product->id ?>"><?= $product->price ?>đ</td>
                        </tr>
                    <?php } ?>
                    <tr>
                    <td class="total-thanhtoan">Tổng</td>
                    <td class="subtotal total-thanhtoan" id="subtotal-<?= $product->id ?>"><?= $product->price * $quantity ?>đ</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->render('footer'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
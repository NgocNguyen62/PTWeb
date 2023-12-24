<?php

/** @var yii\web\View $this */

/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use app\models\base\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$orders = \app\models\base\History::find()->where(['user_id'=>Yii::$app->user->identity->id])->all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cart.css" />
    <link rel="stylesheet" href="css/history.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>
<div class="total-container new-container">
        <?php foreach ($orders as $order) {
        //                var_dump($order);
        $items = $order->getProductOrder();
        ?>
        <table class="table-cart">
            <thead>
            <tr class="tr-table">
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thời gian</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    $product = $item[0];
                    $quantity = $item[1];

                ?>
                <tr>
                    <td class="product">
                        <img class="img-cart" src="<?= $product->avatar ?>" alt="">
                        <?= $product->name ?>
                    </td>
                    <td class="price" id="price-<?= $product->id ?>"><?= $product->price ?>đ</td>
                    <td>
                            <?php
                            echo $quantity;
                            ?>

                    </td>
                    <td>
                        <?= date('d/m/y H:i:s', $order->time); ?>
                    </td>

                </tr>
            <?php }?>

            </tbody>
        </table>
            <span class="total-order"> <h3>Tổng: <?= $order->total ?>đ</h3></span>
        <?php } ?>
</div>
<?php echo $this->render('footer'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
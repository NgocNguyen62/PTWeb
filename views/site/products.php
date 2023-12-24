<?php

/** @var yii\web\View $this */

/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use app\models\base\Categories;
use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$products = $dataProvider->getModels();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/products.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>
    <img src="https://trungnguyenecoffee.com/wp-content/uploads/2021/12/0f35c6493b7ccc22956d-1400x556-1.jpg" alt="" style="width: 100%">
    <div class="master-container">
        <?php 
            $cates = Categories::find()->all();
            foreach($cates as $cate) {
        ?>
    
        <div class="title-box">
                <span class="section-title-span"><strong><?= $cate->name ?></strong></span>
        </div>
        <div class="container-products">  
            <?php 
                $products = Products::find()->where(['category_id'=>$cate->id])->all();
                foreach ($products as $product) {
            ?>
            <div class="row-products">
                <div class="col-products">
                    <a class="width-a" href="<?= Url::to(['site/views-product', 'id' => $product->id]) ?>">
                        <div class="item">
                            <div class="image-container">
                                <div>
                                    <img src="<?= $product->avatar ?>" alt="" class="img-products">
                                </div>
                                <div class="discount"><strong>-<?= $product->discount ?>%</strong></div>
                            </div>
                            <span class="name-line"><?= $product->name ?></span>
                            <div class="price">
                                <div>
                                    <h6 class="origin-price"><?= $product->original_price ?>đ</h6>
                                </div>
                                <pre> </pre>
                                <div>
                                    <h6 class="price-discount"><?= $product->price ?>đ</h6>
                                </div>
                                
                            </div>
                            <div class="hidden-button">
                                <?php
                                    if(!Yii::$app->user->isGuest && !$product->inCart()){
                                        echo Html::a(
                                            Html::img('https://img.pikbest.com/png-images/shopping-cart-icon---vector-template---transparent-background_1794341.png!sw800', ['class' => 'icon-cart']),
                                            ['cart/create', 'product_id' => $product->id, 'quantity'=>1]
                                        );
                                    } else{
                                        echo Html::a(
                                            Html::img('https://img.pikbest.com/png-images/shopping-cart-icon---vector-template---transparent-background_1794341.png!sw800', ['class' => 'icon-cart']),
                                            ['cart/add', 'product_id' => $product->id, 'quantity'=>1]
                                        );
                                    }
                                ?>
                            </div>
                        </div>
                        
                    </a>
                </div>
            </div>
            <?php }?>
                
        </div>
        <?php } ?>
    </div>
    <?php echo $this->render('footer'); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function addCart(id){
            $.get('<?php echo Yii::$app->homeUrl.'products/add-to-cart' ?>', {'id': id}, function(data){
                alert('Đã thêm vào giỏ hàng');
            });
        }
    </script>
</body>
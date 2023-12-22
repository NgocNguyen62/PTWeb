<?php
use yii\helpers\Url;
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$products = $dataProvider->getModels();
$category = \app\models\base\Categories::findOne(['id'=>Yii::$app->request->get('id')]);
$cates = \app\models\base\Categories::find()->all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$category->name ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/products.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>
<div class="master-container">
    <div class="category-details">
            <span class="section-title-span">
                <a class="home-coffee" href="<?php echo Url::to(['site/homepage']); ?>" >Trang chủ / </a>
                <strong><?=$category->name ?></strong>
            </span>
    </div>
<div class="container-products">
    <?php foreach ($products as $product) {
        if($product->status !== 0){ ?>
        <div class="row-products">
            <div class="col-products">
                <a class="width-a" href="<?= Url::to(['site/views-product', 'id' => $product->id]) ?>">
                    <div class="item">
                        <div class="image-container">
                        <img src="<?= $product->avatar ?>" alt="" class="img-products">
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
        <?php }} ?>

</div>
</div>
<?php echo $this->render('footer'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
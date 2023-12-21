<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\base\Products $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/views-product.css" />
</head>
<body>
<?php echo $this->render('navbar'); ?>

<div class="products-view">
    <div class="views-container">
        <div class="top-container">
            <div class="image-container">
                <img src="<?= $model->avatar ?>" alt="" class="img-products">
                <div class="discount"><strong>-<?= $model->discount ?>%</strong></div>
            </div>
            <div class="description-coffee">
                <div>
                    <h2><strong><?= Html::encode($this->title) ?></strong></h2>
                </div>
                <div class="line-title"></div>
                <div>
                <div class="price">
                    <div>
                        <span class="origin-price">
                            <div class="price-dong-container">
                                <div><?= $model->original_price ?></div>
                                <div class="dong-div"><span class="dong">đ</span></div>   
                            </div>
                        </span>
                    </div>
                    <pre>   </pre>
                    <div>
                        <span class="price-discount">
                        <div class="price-dong-container">
                                <div><strong><?= $model->price ?></strong></div>
                                <div class="dong-div"><strong><span class="dong">đ</span></strong></div>   
                            </div>
                        </span>
                    </div>
                </div>
                </div>
                <p><?= $model->description ?></p>
                <div class="button-bottom">
                    <button class="styled-button black-color"><strong>Thêm vào giỏ hàng</strong></button>
                    <button class="styled-button yellow-color"><strong>Mua ngay</strong></button>
                </div>
            </div>

            
        </div>

        
    </div>
    <div class="related">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4>Sản phẩm liên quan </h4>
                        </div>
                    </div>
                    <?php
                    $related = $model->getProductOfCate($model->category_id, 4);
                    ?>
                    <?php foreach ($related as $item){ ?>
                        <div class="col-lg-6">
                            <a href="<?= Url::to(['products/views-product', 'id' => $item->id]) ?>">
                                <div class="item">
                                    <img src="<?= $item->avatar ?>" alt="" class="templatemo-item">
                                    <h4><?= $item->name?></h4><span><?= $item->getCategory()?></span>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
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
</html>

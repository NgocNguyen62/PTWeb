<?php

/** @var yii\web\View $this */

/** @var app\models\search\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

use app\models\base\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$products = $dataProvider->getModels();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .row{
            display: grid;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {?>
                    <div class="col-lg-3 col-sm-6">
                        <a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>">
                            <div class="item">
                                <img src="<?= $product->avatar ?>" alt="">
                                <h4><?= $product->name ?>
                                <br><span><?= Categories::findOne(['id' => $product->category_id])->name ?></span></h4>

                            </div>
                        </a>
                        <?php $form = ActiveForm::begin(['class'=>'form-horizontal', 'action'=>Url::toRoute(['products/add-to-cart','id'=>$product->id])]); ?>

                        <?=Html::input('submit','submit','Add to cart',[
                            'class'=>'button add',

                        ])?>
                        <?php ActiveForm::end(); ?>
<!--                        <button class="btn btn-primary cart-btn" type="button" onclick="addCart(--><?php //=$product->id ?>//)">Add to Cart</button>
<!--                        --><?php //echo Html::a('Add to cart', ['products/addToCart', 'id' => $product->id]); ?>
                    </div>
            <?php }?>
        </div>
    </div>
    <script>
        function addCart(id){
            $.get('<?php echo Yii::$app->homeUrl.'products/add-to-cart' ?>', {'id': id}, function(data){
                alert('Đã thêm vào giỏ hàng');
            });
        }
    </script>
</body>
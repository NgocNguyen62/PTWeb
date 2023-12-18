<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\base\Cart $model */
/** @var yii\widgets\ActiveForm $form */
$product = \app\models\Products::findOne(['id'=> $model->product_id]);
?>

<div class="cart-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //= $form->field($model, 'user_id')->textInput() ?>
<!---->
<!--    --><?php //= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput(['id' => 'quantity-input']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

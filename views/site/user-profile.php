<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserProfile $model */
/** @var yii\widgets\ActiveForm $form */
?>
<head>
    <title>Sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .user-profile{
            max-width: 1000px;
            margin-left: 150px;
            padding: 50px;
        }
    </style>
</head>
<body>
    <?php echo $this->render('navbar'); ?>
    <div class="user-profile">
        <?php $form = ActiveForm::begin(); ?>

        <!--    --><?php //= $form->field($model, 'user_id')->textInput() ?>

        <?= $form->field($model, 'firstName')->textInput(['maxlength' => true])->label('Họ') ?>

        <?= $form->field($model, 'lastName')->textInput(['maxlength' => true])->label('Tên') ?>

        <?= $form->field($model, 'phoneNum')->textInput(['maxlength' => true])->label('Số điện thoại') ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <!--    --><?php //= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <?php echo $this->render('footer'); ?>
</body>

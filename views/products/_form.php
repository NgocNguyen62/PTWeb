<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\base\Products $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        \app\models\Products::getCate(), ['prompt' => 'Select']
    ) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList(
        \app\models\Products::getStatus(), ['prompt' => 'Select']
    ) ?>

    <?= $form->field($model, 'avatar')->fileInput(['accept' => 'image/*',
        'onchange' => 'previewImage(event)']) ?>
    <div id="image-preview"></div>
    <?= $form->field($model, 'original_price')->textInput() ?>

    <?= $form->field($model, 'discount')->textInput() ?>

<!--    --><?php //= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var imgElement = document.createElement("img");
                imgElement.src = reader.result;
                imgElement.style.width = "100px";
                imgElement.style.height = "80px";
                document.getElementById("image-preview").innerHTML = "";
                document.getElementById("image-preview").appendChild(imgElement);
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>

</div>

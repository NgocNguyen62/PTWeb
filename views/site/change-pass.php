<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\base\User $model */
/** @var yii\widgets\ActiveForm $form */
?>
<head>
    <title>Sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .pass-form{
            width: 1000px;
            margin-left: 150px;
            padding: 50px;
            display: flex;
        }
        .pass-form input{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php echo $this->render('navbar'); ?>

    <div class="pass-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->label('Tên đăng nhập')?>

        <?= $form->field($model, 'password',['inputOptions' => ['id' => 'password']])->passwordInput(['maxlength' => true])->label('Mật khẩu') ?>
        <?= $form->field($model, 'password_repeat', ['inputOptions' => ['id' => 'password_repeat']])->passwordInput(['maxlength' => true])->label('Xác nhận lại mật khẩu') ?>
        <div id="password-error" style="color: red; display: none;">Passwords do not match</div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var passwordInput = document.getElementById("password");
            var passwordRepeatInput = document.getElementById("password_repeat");

            function validatePassword() {
                var password = passwordInput.value;
                var passwordRepeat = passwordRepeatInput.value;

                if (password !== passwordRepeat) {
                    // Hiển thị thông báo lỗi
                    document.getElementById("password-error").style.display = "block";
                    return false;
                } else {
                    // Ẩn thông báo lỗi nếu mật khẩu khớp
                    document.getElementById("password-error").style.display = "none";
                    return true;
                }
            }

            // Thêm sự kiện để kiểm tra khi người dùng nhập liệu
            passwordInput.addEventListener("input", validatePassword);
            passwordRepeatInput.addEventListener("input", validatePassword);
        });
    </script>
    <?php echo $this->render('footer'); ?>
</body>


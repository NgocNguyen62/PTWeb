<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \app\models\form\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <link rel="stylesheet" href="css/login.css" />
</head>
<?php echo $this->render('navbar'); ?>

<div class="site-login">
    <h3><strong>ĐĂNG NHẬP</strong></h3>

    <!-- <p>Please fill out the following fields to login:</p> -->

    <div class="row-login">
        <div class="form-login">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                // 'fieldConfig' => [
                //     'template' => "{label}\n{input}\n{error}",
                //     'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                //     'inputOptions' => ['class' => 'col-lg-3 form-control'],
                //     'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                // ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Tên tài khoản hoặc địa chỉ email') ?>

            <?= $form->field($model, 'password')->passwordInput()->label('Mật khẩu') ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->label("Ghi nhớ mật khẩu") ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php echo $this->render('footer'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

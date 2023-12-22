<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\base\UserProfile $model */

// $this->title = 'Create User Profile';
$this->params['breadcrumbs'][] = ['label' => 'Hồ sơ người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

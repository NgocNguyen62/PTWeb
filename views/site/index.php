<?php
/** @var yii\web\View $this */
$this->title = 'Quản lý';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <h3>Tài khoản</h3>
        <div class="col-12 col-sm-6 col-md-6">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Admin',
                'number' => \app\models\User::find()->where(['role' => 'admin'])->count(),
                'icon' => 'fas fa-cog',
            ]) ?>
        </div>
        <div class="col-12 col-sm-6 col-md-6">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'User',
                'number' => \app\models\User::find()->where(['role' => 'user'])->count(),
                'icon' => 'fas fa-user',
            ]) ?>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <div class="col-12 col-sm-6 col-md-6">
                <?= \hail812\adminlte\widgets\InfoBox::widget([
                    'text' => 'Tổng số tài khoản',
                    'number' => \app\models\User::find()->count(),
                    'theme'=>'success',
                    'icon' => 'fa fa-user',
                ]) ?>
            </div>

        </div>
    </div>


    <div class="row">
        <h3>Sản phẩm</h3>
        <div class="col-md-4 col-sm-6 col-12">
            <?php echo $this->render('chart'); ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?php $smallBox = \hail812\adminlte\widgets\SmallBox::begin([
                'title' => \app\models\Products::find()->count() . ' sản phẩm',
                'text' => \app\models\base\Categories::find()->count() . ' phân loại',
                'icon' => 'fas fa-shopping-cart',
            ]) ?>
        </div>

    </div>

</div>
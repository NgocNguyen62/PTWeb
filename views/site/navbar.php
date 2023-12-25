<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;
// use Yii;
use yii\helpers\Html;
$cates = \app\models\base\Categories::find()->all();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css" />
</head>
<body>
    <header class="header has-sticky sticky-jump fixed">
        <div class="wrapper">
            <div id="masthead" class="menu flex-row container-fluid row align-items-center logo-left medium-logo-center">
                <!-- Logo -->
                <div id="logo" class="col-3">
                    <a href="<?php echo Url::to(['site/homepage']); ?>" title="Trung Nguyên E-Coffee" rel="home">
                        <img width="200" height="100" alt="Trung Nguyên E-Coffee" src="https://trungnguyenecoffee.com/wp-content/uploads/2020/09/Logo-Màu-Trằng-E-Coffee.png" class="header_logo header-logo ls-is-cached lazyloaded" />
                    </a>
                </div>
                <!-- Search Bar -->
                <div id="search-bar" class="col-4">
                    <?php
                    $searchModel = new \app\models\search\ProductsSearch();
                    $form = ActiveForm::begin([
                        'method' => 'get',
                        'action' => ['site/all-products'],
                    ]); ?>
                    <?= $form->field($searchModel, 'name')->input('text',['placeholder'=>'Tìm kiếm', 'id'=>'searchText', 'onkeypress'=>'handle'])->label(false) ?>
                    <?php ActiveForm::end();
                    ?>
                </div>
                <!-- Signin/Logup -->
                <div id="account" class="col-5">
                    
                    <ul class="nav nav-right container-fluid d-flex align-items-center">
                        <ul class="user">
                        <?php if (Yii::$app->user->isGuest) { ?>
                            <li>
                            <a class="user-a" href="<?= Url::to(['site/login']) ?>"><i class="fa fa-user white"></i> <span>Đăng nhập </span></a>
                        <?php } else { ?>
                            <span class="width-user"><?= Yii::$app->user->identity->username ?></span>
                            <ul class="sub-user">
                                <li><?= \app\models\UserProfile::findOne(['user_id' => Yii::$app->user->identity->id]) !== null ? Html::a('Tài khoản', ['site/user-profile', 'id' => Yii::$app->user->identity->getProfileId()], ['class' => 'dropdown-item']) : "" ?></li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/history']) ?>">Đơn hàng của tôi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= Url::to(['site/change-pass', 'id' => Yii::$app->user->identity->getId()]) ?>">Đổi mật khẩu</a>
                                </li>

                                <li>
                                    <?php
                                    ActiveForm::begin();
                                    echo Html::a(
                                        'Đăng xuất ',
                                        ['site/logout'],
                                        [
                                            'class' => 'dropdown-item',
                                            'data' => [
                                                'method' => 'post',
                                            ],
                                        ]
                                    );
                                    ActiveForm::end();
                                    ?>
                                </li>
                                <?php if (Yii::$app->user->can('admin')) { ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= Url::to(['site/index']) ?>">Quản lý</a>
                                    </li>
                                <?php } ?>


                            </ul>
                        <?php } ?>
                            </li>
                        </ul>
                            <li class="col-4">
                                <a href="<?=Url::to(['site/cart']) ?>" class="text-decoration-none text-dark">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-bag bag-icon" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                                    <?php if(!Yii::$app->user->isGuest){ ?>
                                        <div class="icon-cart-number">
                                    <span><?= \app\models\base\Cart::find()->where(['user_id'=>Yii::$app->user->identity->id])->count() ?></span></div>
                                    <?php } ?>
                            </a>
                        </li>
                    <!-- </ul> -->
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <!-- Danh mục sản phẩm (Dropdown menu) -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                </svg>
                                <span>Danh mục sản phẩm</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php foreach ($cates as $cate){ ?>
                                    <a class="dropdown-item" href="<?= Url::to(['site/category-details', 'id'=>$cate->id]) ?>" ><?= $cate->name ?></a>
                                    <?php }?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='<?php echo Url::to(['site/cauchuyenthuonghieu']); ?>'>
                                Câu chuyện thương hiệu
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo Url::to(['site/nhuongquyen']); ?>">Nhượng quyền</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['site/products']) ?>">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Khuyến mãi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo Url::to(['site/tintuc']); ?>">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo Url::to(['site/cuahang']); ?>">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['site/tuyendung']) ?>">Tuyển dụng</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="div-padding"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
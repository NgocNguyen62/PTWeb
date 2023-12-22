<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\base\Products $model */

// $this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
    <!-- $imagePath = '../../web/products/ten_file_anh.jpg'; -->
    <!-- <img src="<?php echo '../../web/products/ten_file_anh.jpg'; ?>" alt="Ảnh sản phẩm"> -->


        <img src="show-image" ưidth = "25px" height = "400px"
        src="<?php echo Yii::$app->homeUrl.'../../web/products'.$model->avatar?>" alt="">
    </div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Thông tin sản phẩm</h3>

              <!-- Sign In Form -->
              <form>
                <div class="form-floating mb-3">
                  <label for="floatingInput">ID: </label>

                  <input type="email" class="form-control" id="floatingInput" placeholder=<?php echo $model->id ?>>
                </div>
                
                <div class="form-floating mb-3">
                                    <label for="floatingPassword">Tên danh mục: </label>

                                    <input type="password" class="form-control" id="floatingPassword" placeholder="<?php echo $model->category->name?>">
                </div>

                <div class="form-floating mb-3">
                                    <label for="floatingPassword">Mô tả sản phẩm: </label>

                                    <input type="password" class="form-control" id="floatingPassword" placeholder="<?php echo $model->description?>">
                </div>

                <div class="form-floating mb-3">
                                    <label for="floatingPassword">Trạng thái: </label>

                                    <input type="password" class="form-control" id="floatingPassword" placeholder="<?php echo $model->status?>">
                </div>







                

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</div>

<!-- <div style="text-align: center;"> -->

<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- </div> -->

<style>
    .login {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
  /* background-size: cover;
  background-position: center; */
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}


.btn-primary {
    width: 150px;
    padding: 10px;
    border: none;
    border-radius: 4px;
    font-size: 20px;
    color: white;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition-duration: 0.1s;
    background-color: #0aff89;
    font-family: Open sans-serif;
    margin-top: -80px;
    margin-left:660px;
}

        .btn-danger {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: AC 4px;
            font-size: 20px;
            color: white;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition-duration: 0.1s;
            background-color: #f24f5d;
            font-family: Roboto;
            margin-top: -130px;
            margin-left: 820px;
        }

        .btn-primary:hover {
            background-color: #2f9345;
        }

        .btn-primary:active {
            box-shadow: 0 0 9e9q inset #0009;
            background-color: black;
            outline: none;
        }

        .btn-danger:hover {
            background-color: #d73b49;
        }

        .btn-danger:active {
            box-shadow: 0 0 2e2q inset #0009;
            background-color: black;
            outline: none;
        }

        .nav.child_menu>li>a {
            color: #000000;
            font-weight: 100;
        }
        auto {
    margin-left: auto!important;
    margin-top: -29px;
}
</style>
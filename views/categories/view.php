<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\base\Categories $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categories-view">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>



    <form class="user-form">
        <h1 class="username">
            <?php echo $model->id ?>
        </h1>
        <div class="contentform">
            <!-- <div class="leftcontact"> -->
            <div class="form-group">
                <p>Tên danh mục </p>
                <span class="icon-case"><i class="fa fa-envelope-open icon-style"> </i></span>
                <div class="form-control" style="margin-left: 40px">
                    <?php echo $model->name ?>
                </div>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Mô tả </p>
                <span class="icon-case"><i class="fa fa-user-circle icon-style"></i></span>
                <div class="form-control">
                    <?php echo $model->description ?>
                </div>
                <div class="validation"></div>
            </div>


            <!-- </div> -->


        </div>
    </form>

    <div style="text-align: center;">

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

    </div>



    <style>
        .form-control {
            margin-left: 40px;
            width: 69%;
        }

        .username {
            font-size: 36px;
            font-weight: bold;
            color: #0a4d37;
        }

        body {
            margin: auto;
            background: #eaeaea;
            font-family: 'Open Sans', sans-serif;
        }

        .info p {
            text-align: center;
            color: #999;
            text-transform: none;
            font-weight: 600;
            font-size: 15px;
            margin-top: 2px
        }

        .info i {
            color: #F6AA93;
        }

        .user-form h1 {
            font-size: 18px;
            background: #F6AA93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left
        }

        .user-form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
            margin: 3% auto;
            background-color: #FFFFFF;
            overflow: hidden;
            margin-top: -15px;
            border: 1px solid #ffb5b5;
        }

        p span {
            color: #F00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
    text-align: center;
    color: #666;
    text-shadow: 1px 1px 0px #FFF;
    margin: 47px -2px 33px 8px;
}

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        a {
            text-decoration: inherit
        }

        textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #EEE;
            margin: 0;
            width: 75%;
            height: 130px;
            float: left;
            padding: 0px 15px;
        }

        .form-group {
            overflow: hidden;
            clear: both;
        }

        .icon-case {
            width: 35px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 42px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }

        .icon-style {
            color: black;
        }

        .contentform {
            padding: 40px 30px;
        }



        .leftcontact {
            width: 49.5%;
            float: left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
        }

        .rightcontact {
            width: 49.5%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
        }

        .validation {
            display: none;
            margin: 0 0 10px;
            font-weight: 400;
            font-size: 13px;
            color: #DE5959;
        }
    </style>

</div>
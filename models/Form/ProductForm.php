<?php
namespace app\models\form;
use app\models\base\Categories;
use Yii;
use yii\base\Model;

class ProductForm extends Model {
    public $id;
    public $avatar;

    public $original_price;
    public $discount;
    public $price;

    public $name;
    public $category_id;
    public $description;
    public $status;
    public $urlAvatar;

    public function rules()
    {
        return [
            [['name', 'category_id', 'status', 'original_price', 'discount', 'price'], 'required'],
            [['avatar'], 'required', 'when' => function($model) {

                return Yii::$app->controller->action->id == 'create';

            }, 'whenClient' => "function () { return " . Yii::$app->controller->action->id == 'create' . "; }"],
            [['category_id', 'status', 'original_price', 'discount', 'price'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['category_id'], 'integer'],
            [['avatar'], 'file', 'skipOnEmpty' => true, 'extensions' => ['png', 'jpg'], 'maxSize' => 1024*1024*10],
        ];
    }
    public function save($model){

        $this->price = $this->original_price;
//        var_dump($this->attributes);
//        die();
        if ($this->validate()) {
//            var_dump($this->attributes);
//            die();
            $model->name = $this->name;
            $model->category_id = $this->category_id;
            $model->description = $this->description;
            $model->status = $this->status;
//
            if($this->avatar !== null && $this->avatar !== '') {
                $path_avatar = 'avatar/' . $this->avatar->baseName  . '.' . $this->avatar->extension;
                $model->avatar = $path_avatar;
//                die();
            } else{
                $model->avatar = $this->urlAvatar;
            }
            $model->original_price = $this->original_price;
            $model->discount = $this->discount;
            $model->price = floatval($model->original_price) - floatval($model->original_price) * floatval($model->discount) / 100;
            $rs = $model->save();

            $this->id = $model->id;
            if ($rs) {
                $folder = 'products/' . $this->id . '-' . $this->name;
                if (!file_exists($folder)) {
                    mkdir($folder, 0777, true);
                }

                if($this->avatar !== null && $this->avatar !== '') {
                    $path_avatar = $folder . '/' . 'avatar-' . $this->avatar->baseName . '.' . $this->avatar->extension;
                    $model->avatar = $path_avatar;
                    $this->avatar->saveAs($path_avatar);
                }
                $model->save();
                return true;
            }
            } else {
                var_dump($this->errors);
                die();
            }
            return false;

    }
}

<?php
namespace app\models\form;

use app\models\base\User;
use yii\base\Model;

class ProfileForm extends Model
{

    public $id;
    public $user_id;

    public $firstName;
    public $lastName;
    public $phoneNum;
    public $email;
    public $address;


    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['firstName', 'lastName','address'], 'string', 'max' => 255],
            ['email', 'email'],
            [['phoneNum'], 'match', 'pattern' => '/^[0-9]{10}$/',
                'message' => 'Số điện thoại bao gồm 10 chữ số không có khoảng trắng.'],
//            [['gender'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function save($model)
    {
//        var_dump($this);
//        die();
        if ($this->validate()) {
//            die();
            $model->user_id = $this->user_id;
            $model->firstName = $this->firstName;
            $model->lastName = $this->lastName;
            $model->phoneNum = $this->phoneNum;
            $model->email = $this->email;
            $model->address = $this->address;
//            $path_avatar = 'avatar/' ;
//            $model->avatar = $path_avatar;
//            var_dump($model);
//            die();
            $rs = $model->save();

            return $rs;
        }
    }

}
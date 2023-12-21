<?php

namespace app\models;

use Yii;

class User extends \app\models\base\User implements \yii\web\IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
//    public $authKey;
//    public $accessToken;
//
//    private static $users = [
//        '100' => [
//            'id' => '100',
//            'username' => 'admin',
//            'password' => 'admin',
//            'authKey' => 'test100key',
//            'accessToken' => '100-token',
//        ],
//        '101' => [
//            'id' => '101',
//            'username' => 'demo',
//            'password' => 'demo',
//            'authKey' => 'test101key',
//            'accessToken' => '101-token',
//        ],
//    ];

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    public static function getRoles() {
        return [
            self::ROLE_ADMIN => 'admin',
            self::ROLE_USER => 'user'
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
//        foreach (self::$users as $user) {
//            if (strcasecmp($user['username'], $username) === 0) {
//                return new static($user);
//            }
//        }
//
//        return null;
        return self::findOne(['username'=>$username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    public function getRole(){
        return $this->role;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
//        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
//        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
//        return $this->password === $password;
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);

    }
    public function getProfileId(){
        $profile = $this->userProfiles;
        return $profile->getId();
    }
    public function getCart(){
        $cart = \app\models\base\Cart::find()->where(['user_id'=>$this->id])->all();
        $list = [];
        foreach ($cart as $item){
            $list[] = Products::findOne(['id'=>$item->product_id]);
        }
        return $list;
    }
    public function countCart(){
        $cart = $this->getCart();
        return count($cart);
    }
    public function getTotalPrice(){
        $cart = $this->getCart();
        $total = 0;
        foreach ($cart as $item){
            $total += $item->price();
        }
        return $total;
    }

}

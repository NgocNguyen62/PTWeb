<?php

namespace app\models\base;

use app\models\Products;
use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property int $user_id
 * @property string $product_id
 * @property string $quantity
 * @property int $total
 * @property int $time
 *
 * @property User $user
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'quantity', 'total', 'time'], 'required'],
            [['user_id', 'total', 'time'], 'integer'],
            [['product_id', 'quantity'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'quantity' => 'Quantity',
            'total' => 'Total',
            'time' => 'Time',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
    public function getProductOrder(){
        $products = array_map('intval', explode('-', $this->product_id));
        $quantity = array_map('intval', explode('-', $this->quantity));
        $list = [];
        for($i=0; $i<sizeof($products);$i++){
            $list[] = [Products::findOne(['id'=>$products[$i]]), $quantity[$i]];
        }
        return $list;
    }
}

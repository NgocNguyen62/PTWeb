<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string|null $description
 * @property int $status
 * @property string $avatar
 * @property int $original_price
 * @property int $discount
 * @property int $price
 *
 * @property Categories $category
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'status', 'avatar', 'original_price', 'discount', 'price'], 'required'],
            [['category_id', 'status', 'original_price', 'discount', 'price'], 'integer'],
            [['description'], 'string'],
            [['name', 'avatar'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'description' => 'Description',
            'status' => 'Status',
            'avatar' => 'Avatar',
            'original_price' => 'Original Price',
            'discount' => 'Discount',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }
}

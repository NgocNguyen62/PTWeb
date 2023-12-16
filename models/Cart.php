<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Cart extends Model {
    public $items = [];

    public function addItem($product, $quantity){
        if (isset($this->items[$product])){
            $this->items[$product]['quantity'] += $quantity;
        } else {

        }
    }
}
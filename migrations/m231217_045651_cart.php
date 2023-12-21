<?php

use yii\db\Migration;

/**
 * Class m231217_045651_cart
 */
class m231217_045651_cart extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cart', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer(),
        ], 'ENGINE=InnoDB');
        $this->addForeignKey('fk_cart_user', 'cart', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_cart_user', 'cart');
        $this->dropTable('cart');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231217_045651_cart cannot be reverted.\n";

        return false;
    }
    */
}

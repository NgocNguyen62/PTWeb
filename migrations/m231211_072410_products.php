<?php

use yii\db\Migration;

/**
 * Class m231211_072410_products
 */
class m231211_072410_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'category_id' => $this->integer()->notNull(),
            'description' => $this->text(),
            'status' => $this->smallInteger()->notNull(),
            'avatar' => $this->string()->notNull(),
            'original_price' => $this->integer()->notNull(),
            'discount' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
        ], 'ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231211_072410_products cannot be reverted.\n";

        return false;
    }
    */
}

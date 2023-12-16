<?php

use yii\db\Migration;

/**
 * Class m231211_074909_categories
 */
class m231211_074909_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string()->notNull(),
            'description' => $this->string(),
        ], 'ENGINE=InnoDB');
        $this->addForeignKey(
            'fk-products-category',
            '{{%products}}',
            'category_id',
            '{{%categories}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-products-category', '{{%products}}');
        $this->dropTable('categories');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231211_074909_categories cannot be reverted.\n";

        return false;
    }
    */
}

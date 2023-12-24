<?php

use yii\db\Migration;

/**
 * Class m231224_141416_history
 */
class m231224_141416_history extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('history', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'product_id' => $this->string()->notNull(),
            'quantity'=>$this->string()->notNull(),
            'total' => $this->integer()->notNull(),
            'time' => $this->integer()->notNull(),
        ], 'ENGINE=InnoDB');
        $this->addForeignKey('fk_history_user', 'history', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_history_user', 'history');
        $this->dropTable('history');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231224_141416_history cannot be reverted.\n";

        return false;
    }
    */
}

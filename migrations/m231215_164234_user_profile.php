<?php

use yii\db\Migration;

/**
 * Class m231215_164234_user_profile
 */
class m231215_164234_user_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'firstName'=>$this->string(),
            'lastName' => $this->string(),
            'phoneNum' => $this->string(),
            'address' => $this->string(),
            'email' => $this->string(),
        ], 'ENGINE=InnoDB');
        $this->addForeignKey(
            'fk-profile-user',
            '{{%user_profile}}',
            'user_id',
            '{{%user}}',
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
        $this->dropForeignKey('fk-profile-user', 'user_profile');
        $this->dropTable('{{%user_profile}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231215_164234_user_profile cannot be reverted.\n";

        return false;
    }
    */
}

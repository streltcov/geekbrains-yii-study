<?php

use yii\db\Migration;

/**
 * Class m180305_112717_access
 */
class m180305_112717_access extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('access', [
            'id' => $this->primaryKey(),
            'note_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m180305_112717_access cannot be reverted.\n";

        $this->dropTable('access');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_112717_access cannot be reverted.\n";

        return false;
    }
    */
}

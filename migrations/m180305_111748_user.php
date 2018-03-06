<?php

use yii\db\Migration;

/**
 * Class m180305_111748_user
 */
class m180305_111748_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180305_111748_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_111748_user cannot be reverted.\n";

        return false;
    }
    */
}

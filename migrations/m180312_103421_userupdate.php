<?php

use yii\db\Migration;

/**
 * Class m180312_103421_userupdate
 */
class m180312_103421_userupdate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->addColumn('user', 'password', 'string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m180312_103421_userupdate cannot be reverted.\n";

        Yii::$app->db->createCommand()->dropColumn('user', 'password');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180312_103421_userupdate cannot be reverted.\n";

        return false;
    }
    */
}

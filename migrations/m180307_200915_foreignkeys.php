<?php

use yii\db\Migration;

/**
 * Class m180307_200915_foreignkeys
 */
class m180307_200915_foreignkeys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->addForeignKey('fx_access_user', 'access', ['user_id'], 'user', ['id'])->execute();
        Yii::$app->db->createCommand()->addForeignKey('fx_access_note', 'access', ['note_id'], 'note', ['id'])->execute();
        Yii::$app->db->createCommand()->addForeignKey('fx_note_user', 'note', ['creator_id'], 'user', ['id'])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        Yii::$app->db->createCommand()->dropForeignKey('fx_access_user', 'access')->execute();
        Yii::$app->db->createCommand()->dropForeignKey('fx_access_note', 'access')->execute();
        Yii::$app->db->createCommand()->dropForeignKey('fx_note_user', 'note')->execute();

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180307_200915_foreignkeys cannot be reverted.\n";

        return false;
    }
    */
}

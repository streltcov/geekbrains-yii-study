<?php

use yii\db\Migration;

/**
 * Class m180305_121012_note
 */
class m180305_121012_note extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('note', [
           'id' => $this->primaryKey(),
           'text' => $this->text()->notNull(),
           'creator_id' => $this->integer()->notNull(),
           'created_at' => $this->integer()->defaultValue(NULL)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m180305_121012_note cannot be reverted.\n";

        $this->dropTable('note');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180305_121012_note cannot be reverted.\n";

        return false;
    }
    */
}

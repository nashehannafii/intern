<?php

use yii\db\Migration;

/**
 * Class m221013_171117_status
 */
class m221013_171117_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%status}}',
            [
                'id'=> $this->primaryKey(11),
                'status_sewa'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        
        $this->insert('status', [
            'status_sewa' => 'Sewa',
        ]);
        $this->insert('status', [
            'status_sewa' => 'Milik Perusahaan',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%status}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_171117_status cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m221013_171110_kegunaan
 */
class m221013_171110_kegunaan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%kegunaan}}',
            [
                'id'=> $this->primaryKey(11),
                'jenis_kendaraan'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->insert('kegunaan', [
            'jenis_kendaraan' => 'Kendaraan Angkut Barang',
        ]);
        $this->insert('kegunaan', [
            'jenis_kendaraan' => 'Kendaraan Umum',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kegunaan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_171110_kegunaan cannot be reverted.\n";

        return false;
    }
    */
}

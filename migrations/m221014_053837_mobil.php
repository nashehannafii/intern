<?php

use yii\db\Migration;

/**
 * Class m221014_053837_mobil
 */
class m221014_053837_mobil extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%mobil}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_kendaraan'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->insert('mobil', [
            'nama_kendaraan' => 'BeLAZ 75710',
        ]);
        $this->insert('mobil', [
            'nama_kendaraan' => 'Caterpillar 797F',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mobil}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221014_053837_mobil cannot be reverted.\n";

        return false;
    }
    */
}

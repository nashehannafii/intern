<?php

use yii\db\Migration;

/**
 * Class m221013_170519_kendaraan
 */
class m221013_170519_kendaraan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%kendaraan}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_kendaraan'=> $this->string(255)->notNull(),
                'kegunaan'=> $this->string(255)->notNull(),
                'status'=> $this->string(255)->notNull(),
                'tambang'=> $this->string(255)->notNull(),
                'konsumsi'=> $this->string(255)->notNull(),
                'jdw_service'=> $this->dateTime(),
                'pj'=> $this->string(255)->notNull(),
                'is_approval' => $this->integer(11)->notNull(),
            ],$tableOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kendaraan}}');

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_170519_kendaraan cannot be reverted.\n";

        return false;
    }
    */
}

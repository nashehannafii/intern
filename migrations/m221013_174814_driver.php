<?php

use yii\db\Migration;

/**
 * Class m221013_174814_driver
 */
class m221013_174814_driver extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(
            '{{%driver}}',
            [
                'id'=> $this->primaryKey(11),
                'nama'=> $this->string(255)->notNull(),
                'umur'=> $this->integer(11)->notNull(),
                'jenis_kelamin'=> $this->string(100)->notNull(),
            ],$tableOptions
        );
        $this->insert('driver', [
            'nama' => 'Bambang Mang Oleh',
            'umur' => '26',
            'jenis_kelamin' => 'Laki - Laki',
        ]);
        $this->insert('driver', [
            'nama' => 'Saputra Sitejo',
            'umur' => '35',
            'jenis_kelamin' => 'Laki - Laki',
        ]);
        $this->insert('driver', [
            'nama' => 'Petro Andre',
            'umur' => '31',
            'jenis_kelamin' => 'Laki - Laki',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%driver}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_174814_driver cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m221013_175312_tambang
 */
class m221013_175312_tambang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(
            '{{%tambang}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_tambang'=> $this->string(255)->notNull(),
            ],$tableOptions
        );
        $this->insert('tambang', [
            'nama_tambang' => 'Tambang 1',
        ]);
        $this->insert('tambang', [
            'nama_tambang' => 'Tambang 2',
        ]);
        $this->insert('tambang', [
            'nama_tambang' => 'Tambang 3',
        ]);
        $this->insert('tambang', [
            'nama_tambang' => 'Tambang 4',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tambang}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_175312_tambang cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m221014_020410_user
 */
class m221014_020410_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(
            '{{%user}}',
            [
                'id'=> $this->primaryKey(11),
                'username'=> $this->string(255)->notNull(),
                'password'=> $this->string(255)->notNull(),
                'auth_key'=> $this->string(255)->notNull(),
                'access_token'=> $this->string(255)->notNull(),
                'role'=> $this->string(100)->notNull(),
            ],$tableOptions
        );
        $this->insert('user', [
            'username' => 'theCreator',
            'password' => 'bismillah',
            'auth_key' => 'theCreator_e172dd95f4feb21412a692e73929961e',
            'access_token' => 'e172dd95f4feb21412a692e73929961e',
            'role' => 'theCreator',
        ]);
        $this->insert('user', [
            'username' => 'admin',
            'password' => 'bismillah',
            'auth_key' => 'atasan_e172dd95f4feb21412a692e73929961e',
            'access_token' => 'e172dd95f4feb21412a692e73929961e',
            'role' => 'admin',
        ]);
        $this->insert('user', [
            'username' => 'atasan',
            'password' => 'bismillah',
            'auth_key' => 'atasan_e172dd95f4feb21412a692e73929961e',
            'access_token' => 'e172dd95f4feb21412a692e73929961e',
            'role' => 'atasan',
        ]);

        $this->insert('auth_item', [
            'name' => 'theCreator',
            'type' => '1',
            'description' => 'Super Administrator',
        ]);
        $this->insert('auth_item', [
            'name' => 'admin',
            'type' => '1',
            'description' => 'Administrator',
        ]);
        $this->insert('auth_item', [
            'name' => 'atasan',
            'type' => '1',
            'description' => 'Hanya untuk Approval',
        ]);

        $this->insert('auth_assignment', [
            'item_name' => 'theCreator',
            'user_id' => '100',
        ]);
        $this->insert('auth_assignment', [
            'item_name' => 'admin',
            'user_id' => '101',
        ]);
        $this->insert('auth_assignment', [
            'item_name' => 'atasan',
            'user_id' => '102',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%auth_item}}');
        $this->dropTable('{{%auth_item_child}}');
        $this->dropTable('{{%auth_assignment}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221014_020410_user cannot be reverted.\n";

        return false;
    }
    */
}

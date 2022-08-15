<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m220815_020812_add_remove_password_hash_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'password_hash');
        $this->dropColumn('{{%user}}', 'password_reset_token');
        $this->dropColumn('{{%user}}', 'auth_key');
        $this->dropColumn('{{%user}}', 'verification_token');
        $this->addColumn('{{%user}}', 'password', $this->string(255)->after('username'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
        $this->dropColumn('{{%user}}', 'auth_key');
        $this->dropColumn('{{%user}}', 'password_hash');
        $this->dropColumn('{{%user}}', 'password_reset_token');
    }
}

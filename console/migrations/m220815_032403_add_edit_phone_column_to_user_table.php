<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m220815_032403_add_edit_phone_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'tel');
        $this->dropColumn('{{%user}}', 'login_type');
        $this->addColumn('{{%user}}', 'phone', $this->string(255)->after('email')->comment('Số điện thoại'));
        $this->addColumn('{{%user}}', 'login_type', $this->tinyInteger()->after('status')->comment('Loại đăng nhập, 0 : account, 1 : google , 2 : facebook'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'tel');
        $this->dropColumn('{{%user}}', 'login_type');
    }
}

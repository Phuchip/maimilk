<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m220815_024116_add_edit_user_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'role');
        $this->addColumn('{{%user}}', 'phone', $this->string()->after('email')->comment("Số điện thoại"));
        $this->addColumn('{{%user}}', 'address', $this->string()->after('phone')->comment("Địa chỉ"));
        $this->addColumn('{{%user}}', 'login_type', $this->string()->after('status')->defaultValue(0)->comment("Loại đăng nhập, 0 : account, 1 : google , 2 : facebook"));
        $this->addColumn('{{%user}}', 'is_active', $this->integer()->after('login_type')->comment("Hoạt động : 0 : non active , 1 : is active"));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'phone');
        $this->dropColumn('{{%user}}', 'address');
        $this->dropColumn('{{%user}}', 'login_type');
        $this->dropColumn('{{%user}}', 'is_active');
    }
}

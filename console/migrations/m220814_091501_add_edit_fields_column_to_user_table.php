<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m220814_091501_add_edit_fields_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%user}}', 'created_at');
        $this->dropColumn('{{%user}}', 'updated_at');
        $this->addColumn('{{%user}}','name',$this->string(255)->after('email')->comment('Tên hiển thị'));
        $this->addColumn('{{%user}}','avatar',$this->string(255)->after('name')->comment('Ảnh đại diện'));
        $this->addColumn('{{%user}}', 'role', $this->integer()->defaultValue(0)->comment('Quyền hạn của từng user, 1 : Admin, 2 : Quản lý'));
        $this->addColumn('{{%user}}', 'created', $this->dateTime());
        $this->addColumn('{{%user}}', 'updated', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'created_at');
        $this->dropColumn('{{%user}}', 'updated_at');
    }
}

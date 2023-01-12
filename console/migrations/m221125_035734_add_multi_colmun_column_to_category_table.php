<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%category}}`.
 */
class m221125_035734_add_multi_colmun_column_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'alias', $this->string()->after('name'));
        $this->addColumn('{{%category}}', 'image', $this->string()->after('description')->comment('Ảnh mô tả'));
        $this->addColumn('{{%category}}', 'parent_id', $this->integer()->after('status')->defaultValue(0)->comment('Id category parent'));
        $this->addColumn('{{%category}}', 'group_id', $this->string()->after('parent_id')->defaultValue(0)->comment('Nhóm'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category}}', 'alias');
        $this->dropColumn('{{%category}}', 'image');
        $this->dropColumn('{{%category}}', 'parent_id');
        $this->dropColumn('{{%category}}', 'group_id');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m221106_105412_add_group_id_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%product}}', 'category');
        $this->addColumn('{{%product}}', 'category_id', $this->integer()->after('total_rate')->comment('Danh mục sản phẩm'));
        $this->addColumn('{{%product}}', 'group_id', $this->integer()->after('category_id')->comment('Nhóm sản phẩm'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'category');
    }
}

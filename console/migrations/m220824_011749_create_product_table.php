<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m220824_011749_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'alias' => $this->string(),
            'image' => $this->string(),
            'price_old' => $this->integer(),
            'price_new' => $this->integer(),
            'discount' => $this->integer(),
            'code_product' => $this->string()->comment('Mã sản phẩm'),
            'quantity' => $this->integer()->comment('Số lượng sản phẩm'),
            'insurance' => $this->integer()->comment('Bảo hành'),
            'view' => $this->integer()->comment('Lượt xem'),
            'total_rate' => $this->integer()->comment('Số lượt đánh giá'),
            'category' => $this->integer()->comment('Danh mục sản phẩm'),
            'title' => $this->string()->comment('Tiêu đề sản phẩm'),
            'description' => $this->text()->comment('Mô tả sản phẩm'),
            'keyword' => $this->string(),
            'trademark' => $this->string()->comment('Thương hiệu sản phẩm'),
            'age' => $this->string()->comment('Độ tuổi sử dụng'),
            'weight' => $this->string()->comment('Khối lượng sản phẩm'),
            'color' => $this->string()->comment('Màu sắc'),
            'origin' => $this->integer()->comment('Xuất xứ sản phẩm'),
            'is_hide' => $this->integer()->defaultValue(0)->comment('Ẩn sản phẩm'),
            'is_delete' => $this->integer()->defaultValue(0),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}

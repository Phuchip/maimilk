<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $alias
 * @property string|null $image
 * @property int|null $price_old
 * @property int|null $price_new
 * @property int|null $discount
 * @property string|null $code_product Mã sản phẩm
 * @property int|null $quantity Số lượng sản phẩm
 * @property int|null $insurance Bảo hành
 * @property int|null $view Lượt xem
 * @property int|null $total_rate Số lượt đánh giá
 * @property int|null $category Danh mục sản phẩm
 * @property string|null $title Tiêu đề sản phẩm
 * @property string|null $description Mô tả sản phẩm
 * @property string|null $keyword
 * @property string|null $trademark Thương hiệu sản phẩm
 * @property string|null $age Độ tuổi sử dụng
 * @property string|null $weight Khối lượng sản phẩm
 * @property string|null $color Màu sắc
 * @property int|null $origin Xuất xứ sản phẩm
 * @property int|null $is_hide Ẩn sản phẩm
 * @property int|null $is_delete
 * @property string|null $created
 * @property string|null $updated
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price_old', 'price_new', 'discount', 'quantity', 'insurance', 'view', 'total_rate', 'category', 'origin', 'is_hide', 'is_delete'], 'integer'],
            [['description'], 'string'],
            [['created', 'updated'], 'safe'],
            [['name', 'alias', 'image', 'code_product', 'title', 'keyword', 'trademark', 'age', 'weight', 'color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alias' => 'Alias',
            'image' => 'Image',
            'price_old' => 'Price Old',
            'price_new' => 'Price New',
            'discount' => 'Discount',
            'code_product' => 'Code Product',
            'quantity' => 'Quantity',
            'insurance' => 'Insurance',
            'view' => 'View',
            'total_rate' => 'Total Rate',
            'category' => 'Category',
            'title' => 'Title',
            'description' => 'Description',
            'keyword' => 'Keyword',
            'trademark' => 'Trademark',
            'age' => 'Age',
            'weight' => 'Weight',
            'color' => 'Color',
            'origin' => 'Origin',
            'is_hide' => 'Is Hide',
            'is_delete' => 'Is Delete',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}

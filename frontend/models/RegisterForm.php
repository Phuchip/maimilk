<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string|null $password
 * @property string $email
 * @property string|null $phone Số điện thoại
 * @property string|null $address Địa chỉ
 * @property string|null $name Tên hiển thị
 * @property string|null $avatar Ảnh đại diện
 * @property int $status
 * @property string|null $login_type Loại đăng nhập, 0 : account, 1 : google , 2 : facebook
 * @property int|null $is_active Hoạt động : 0 : non active , 1 : is active
 * @property string|null $created
 * @property string|null $updated
 */
class RegisterForm extends \common\models\User
{
    const USER_TYPE_NEW = 0;
    const USER_TYPE_ACTIVE = 1;
    const USER_TYPE_DELETE = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['status', 'is_active'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['username', 'password', 'email', 'phone', 'address', 'name', 'avatar', 'login_type'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'address' => 'Address',
            'name' => 'Name',
            'avatar' => 'Avatar',
            'status' => 'Status',
            'login_type' => 'Login Type',
            'is_active' => 'Is Active',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $model = new User();
        $model->username = $this->username;
        $model->setPassword($this->password);
        $model->name = $this->username;
        $model->email = $this->email;
        $model->status = self::USER_TYPE_NEW;
        $model->created = date('Y-m-d H:i:s');
        $model->updated = date('Y-m-d H:i:s');

        return $model->save();
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $avatar
 * @property int|null $status Trạng thái của user
 * @property int|null $role Quyền hạn của từng user, 1 : Admin, 2 : Quản lý
 * @property string|null $created
 * @property string|null $updated
 */
class RegisterForm extends \common\models\User
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'email'], 'required'],
            [['status', 'role'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['username', 'password', 'name', 'email', 'phone', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'status' => 'Status',
            'role' => 'Role',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}

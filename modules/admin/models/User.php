<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "blog_user".
 *
 * @property integer $uid
 * @property string $uname
 * @property string $upassword
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uname'], 'string', 'max' => 20],
            [['upassword'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'uname' => 'Uname',
            'upassword' => 'Upassword',
        ];
    }
}

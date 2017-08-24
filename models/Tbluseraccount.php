<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user_account".
 *
 * @property integer $USER_ID
 * @property string $FIRST_NAME
 * @property string $MIDDLE_NAME
 * @property string $LAST_NAME
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property integer $IS_ACTIVE
 */
class Tbluseraccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_account';

       
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FIRST_NAME', 'LAST_NAME', 'USERNAME', 'PASSWORD'], 'required'],
            [['FIRST_NAME', 'MIDDLE_NAME', 'LAST_NAME', 'USERNAME'], 'string', 'max' => 50],
            [['PASSWORD'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() // these function name the table header columns
    {
        return [
            'USER_ID' => 'User  ID',
            'FIRST_NAME' => 'First  Name',
            'MIDDLE_NAME' => 'Middle  Name',
            'LAST_NAME' => 'Last  Name',
            'USERNAME' => 'Username',
            'PASSWORD' => 'Password',

        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $dob
 * @property string $zip
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname','lastname','dob','zip'], 'required'],
            [['dob'], 'date', 'format'=>'YYYY-MM-DD'],
            [['firstname', 'lastname'], 'string', 'max' => 55],
            [['dob', 'zip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'dob' => 'Date Of Birth',
            'zip' => 'Zip Code',
        ];
    }
}

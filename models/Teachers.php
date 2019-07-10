<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $name
 * @property string $specialty
 * @property string $image
 * @property string $thumb_img
 * @property string $information
 * @property string $email
 * @property string $phone
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'specialty', 'information', 'phone'], 'required'],
            [['information'], 'string'],
            [['name', 'specialty', 'email'], 'string', 'max' => 255],
            [['image', 'thumb_img', 'phone'], 'string', 'max' => 200],
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
            'specialty' => 'Specialty',
            'image' => 'Image',
            'thumb_img' => 'Thumb Img',
            'information' => 'Information',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}

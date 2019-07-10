<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $thumb_img
 * @property string $file
 * @property string $information
 * @property int $subject_id
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'file', 'information', 'subject_id'], 'required'],
            [['information'], 'string'],
            [['subject_id'], 'integer'],
            [['name', 'image', 'thumb_img', 'file'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'thumb_img' => 'Thumb Img',
            'file' => 'File',
            'information' => 'Information',
            'subject_id' => 'Subject ID',
        ];
    }
}

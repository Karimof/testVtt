<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "information".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $thumb_img
 * @property string $create_date
 * @property string $update_date
 * @property int $views_count
 */
class Information extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['create_date', 'update_date'], 'safe'],
            [['create_date'], 'default', 'value'=> new Expression('NOW()')],
            [['views_count'], 'integer'],
            [['title', 'image', 'thumb_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'thumb_img' => 'Thumb Img',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'views_count' => 'Views Count',
        ];
    }
}

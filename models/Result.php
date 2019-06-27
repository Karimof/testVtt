<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $subject_id
 * @property int $user_id
 * @property int $true_cnt
 * @property int $false_cnt
 * @property int $ball
 * @property string $time
 * @property int $id
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'user_id', 'true_cnt', 'false_cnt', 'ball', 'time'], 'required'],
            [['subject_id', 'user_id', 'true_cnt', 'false_cnt', 'ball'], 'integer'],
            [['time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'user_id' => 'User ID',
            'true_cnt' => 'True Cnt',
            'false_cnt' => 'False Cnt',
            'ball' => 'Ball',
            'time' => 'Time',
            'id' => 'ID',
        ];
    }

    public function getSubjects(){
        return $this->hasOne(Subject::className(),['id'=>'subject_id']);
    }

    public function getUsers(){
        return $this->hasOne(Users::className(),['id'=>'user_id']);
    }

}

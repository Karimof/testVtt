<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property int $id
 * @property string $question
 * @property string $answerA
 * @property string $answerB
 * @property string $answerC
 * @property string $answerD
 * @property int $trueAnswer
 * @property int $subject_id
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'answerA', 'answerB', 'answerC', 'answerD', 'trueAnswer', 'subject_id'], 'required'],
            [['question'], 'string'],
            [['trueAnswer', 'subject_id'], 'integer'],
            [['answerA', 'answerB', 'answerC', 'answerD'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'answerA' => 'Answer A',
            'answerB' => 'Answer B',
            'answerC' => 'Answer C',
            'answerD' => 'Answer D',
            'trueAnswer' => 'True Answer',
            'subject_id' => 'Subject ID',
        ];
    }
}

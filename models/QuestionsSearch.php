<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Questions;

/**
 * QuestionsSearch represents the model behind the search form of `app\models\Questions`.
 */
class QuestionsSearch extends Questions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'trueAnswer', 'subject_id'], 'integer'],
            [['question', 'answerA', 'answerB', 'answerC', 'answerD'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Questions::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'trueAnswer' => $this->trueAnswer,
            'subject_id' => $this->subject_id,
        ]);

        $query->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'answerA', $this->answerA])
            ->andFilterWhere(['like', 'answerB', $this->answerB])
            ->andFilterWhere(['like', 'answerC', $this->answerC])
            ->andFilterWhere(['like', 'answerD', $this->answerD]);

        return $dataProvider;
    }
}

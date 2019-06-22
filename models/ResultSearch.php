<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Result;

/**
 * ResultSearch represents the model behind the search form of `app\models\Result`.
 */
class ResultSearch extends Result
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'user_id', 'true_cnt', 'false_cnt', 'ball', 'id'], 'integer'],
            [['time'], 'safe'],
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
        $query = Result::find();

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
            'subject_id' => $this->subject_id,
            'user_id' => $this->user_id,
            'true_cnt' => $this->true_cnt,
            'false_cnt' => $this->false_cnt,
            'ball' => $this->ball,
            'time' => $this->time,
            'id' => $this->id,
        ]);

        return $dataProvider;
    }
}

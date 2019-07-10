<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Information;

/**
 * InformationSearch represents the model behind the search form of `app\models\Information`.
 */
class InformationSearch extends Information
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'views_count'], 'integer'],
            [['title', 'content', 'image', 'thumb_img', 'create_date', 'update_date'], 'safe'],
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
        $query = Information::find();

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
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'views_count' => $this->views_count,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'thumb_img', $this->thumb_img]);

        return $dataProvider;
    }
}

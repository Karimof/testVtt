<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Library;

/**
 * LibrarySearch represents the model behind the search form of `app\models\Library`.
 */
class LibrarySearch extends Library
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subject_id'], 'integer'],
            [['name', 'image', 'thumb_img', 'file', 'information'], 'safe'],
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
        $query = Library::find();

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
            'subject_id' => $this->subject_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'thumb_img', $this->thumb_img])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'information', $this->information]);

        return $dataProvider;
    }
}

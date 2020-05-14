<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Examination;

/**
 * ExaminationSearch represents the model behind the search form of `app\models\Examination`.
 */
class ExaminationSearch extends Examination
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lesson_id'], 'integer'],
            [['question', 'a', 'b', 'c', 'd', 'answer'], 'safe'],
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
        $query = Examination::find();

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
            'lesson_id' => $this->lesson_id,
        ]);

        $query->andFilterWhere(['like', 'question', $this->question])
            ->andFilterWhere(['like', 'a', $this->a])
            ->andFilterWhere(['like', 'b', $this->b])
            ->andFilterWhere(['like', 'c', $this->c])
            ->andFilterWhere(['like', 'd', $this->d])
            ->andFilterWhere(['like', 'answer', $this->answer]);

        return $dataProvider;
    }
}

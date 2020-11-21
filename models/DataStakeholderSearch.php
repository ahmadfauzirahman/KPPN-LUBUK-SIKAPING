<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataStakeholder;

/**
 * DataStakeholderSearch represents the model behind the search form of `app\models\DataStakeholder`.
 */
class DataStakeholderSearch extends DataStakeholder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stakeholder'], 'integer'],
            [['kode_stakeholder', 'nama_stakeholder'], 'safe'],
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
        $query = DataStakeholder::find();

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
            'id_stakeholder' => $this->id_stakeholder,
        ]);

        $query->andFilterWhere(['like', 'kode_stakeholder', $this->kode_stakeholder])
            ->andFilterWhere(['like', 'nama_stakeholder', $this->nama_stakeholder]);

        return $dataProvider;
    }
}

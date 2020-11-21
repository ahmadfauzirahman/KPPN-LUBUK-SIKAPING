<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\Tup;

/**
 * TupSearch represents the model behind the search form of `app\models\LubukSikaping\Tup`.
 */
class TupSearch extends Tup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tup'], 'integer'],
            [['satker', 'nomor_surat', 'is_sekretaris', 'is_pdms', 'keterangan_pdms', 'is_kepala_kppn', 'keterangan_kepala_kppn', 'nomor_surat_ap', 'tanggal_daftar'], 'safe'],
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
        $query = Tup::find();

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
            'id_tup' => $this->id_tup,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'satker', $this->satker])
            ->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'is_sekretaris', $this->is_sekretaris])
            ->andFilterWhere(['like', 'is_pdms', $this->is_pdms])
            ->andFilterWhere(['like', 'keterangan_pdms', $this->keterangan_pdms])
            ->andFilterWhere(['like', 'is_kepala_kppn', $this->is_kepala_kppn])
            ->andFilterWhere(['like', 'keterangan_kepala_kppn', $this->keterangan_kepala_kppn])
            ->andFilterWhere(['like', 'nomor_surat_ap', $this->nomor_surat_ap]);

        return $dataProvider;
    }
}

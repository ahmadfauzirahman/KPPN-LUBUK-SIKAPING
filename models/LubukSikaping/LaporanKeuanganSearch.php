<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\LaporanKeuangan;
use app\widgets\App;
use Yii;

/**
 * LaporanKeuanganSearch represents the model behind the search form of `app\models\LubukSikaping\LaporanKeuangan`.
 */
class LaporanKeuanganSearch extends LaporanKeuangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_l_keuangan'], 'integer'],
            [['nomor_satker', 'nomor_surat', 'is_sekretaris', 'is_vera', 'tanggal_daftar'], 'safe'],
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
        $query = LaporanKeuangan::find();
        if (App::isStakeholder()) {
            $query = $query->where(['nomor_satker' => Yii::$app->user->identity->kodeAkun]);
        }
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
            'id_l_keuangan' => $this->id_l_keuangan,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'nomor_satker', $this->nomor_satker])
            ->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'is_sekretaris', $this->is_sekretaris])
            ->andFilterWhere(['like', 'is_vera', $this->is_vera]);

        return $dataProvider;
    }
}

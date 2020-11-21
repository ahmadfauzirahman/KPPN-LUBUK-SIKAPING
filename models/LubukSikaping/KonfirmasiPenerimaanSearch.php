<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\KonfirmasiPenerimaan;
use app\widgets\App;
use Yii;

/**
 * KonfirmasiPenerimaanSearch represents the model behind the search form of `app\models\LubukSikaping\KonfirmasiPenerimaan`.
 */
class KonfirmasiPenerimaanSearch extends KonfirmasiPenerimaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_konfirmasi_penerimaan'], 'integer'],
            [['satker', 'nomor_surat', 'is_sekretaris', 'is_bank', 'keterangan_bank', 'tanggal_daftar'], 'safe'],
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
        $query = KonfirmasiPenerimaan::find();
        if (App::isStakeholder()) {
            $query = $query->where(['satker' => Yii::$app->user->identity->kodeAkun]);
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
            'id_konfirmasi_penerimaan' => $this->id_konfirmasi_penerimaan,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'satker', $this->satker])
            ->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'is_sekretaris', $this->is_sekretaris])
            ->andFilterWhere(['like', 'is_bank', $this->is_bank])
            ->andFilterWhere(['like', 'keterangan_bank', $this->keterangan_bank]);

        return $dataProvider;
    }
}

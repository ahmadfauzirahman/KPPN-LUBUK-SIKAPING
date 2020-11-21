<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\KoreksiPenerimaan;
use app\widgets\App;
use Yii;

/**
 * KoreksiPenerimaanSearch represents the model behind the search form of `app\models\LubukSikaping\KoreksiPenerimaan`.
 */
class KoreksiPenerimaanSearch extends KoreksiPenerimaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_koreksi_penerimaan'], 'integer'],
            [['satker', 'nomor_surat', 'is_sekretaris', 'is_fo_bank', 'alasan_penolakan_fo', 'is_kepala_kppn', 'alasan_penolakan_kepal_kppn', 'tanggal_daftar'], 'safe'],
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
        $query = KoreksiPenerimaan::find();
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
            'id_koreksi_penerimaan' => $this->id_koreksi_penerimaan,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'satker', $this->satker])
            ->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'is_sekretaris', $this->is_sekretaris])
            ->andFilterWhere(['like', 'is_fo_bank', $this->is_fo_bank])
            ->andFilterWhere(['like', 'alasan_penolakan_fo', $this->alasan_penolakan_fo])
            ->andFilterWhere(['like', 'is_kepala_kppn', $this->is_kepala_kppn])
            ->andFilterWhere(['like', 'alasan_penolakan_kepal_kppn', $this->alasan_penolakan_kepal_kppn]);

        return $dataProvider;
    }
}

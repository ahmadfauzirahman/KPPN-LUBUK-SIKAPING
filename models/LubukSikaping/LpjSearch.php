<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\Lpj;
use app\widgets\App;
use Yii;

/**
 * LpjSearch represents the model behind the search form of `app\models\LubukSikaping\Lpj`.
 */
class LpjSearch extends Lpj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lpj'], 'integer'],
            [['nomor_satker', 'nomor_surat', 'is_sekretaris', 'is_vera', 'keterangan_vera', 'is_kepala', 'keterangan_kepala', 'tanggal_daftar'], 'safe'],
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
        $query = Lpj::find();
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
            'id_lpj' => $this->id_lpj,
            'tanggal_daftar' => $this->tanggal_daftar,
        ]);

        $query->andFilterWhere(['like', 'nomor_satker', $this->nomor_satker])
            ->andFilterWhere(['like', 'nomor_surat', $this->nomor_surat])
            ->andFilterWhere(['like', 'is_sekretaris', $this->is_sekretaris])
            ->andFilterWhere(['like', 'is_vera', $this->is_vera])
            ->andFilterWhere(['like', 'keterangan_vera', $this->keterangan_vera])
            ->andFilterWhere(['like', 'is_kepala', $this->is_kepala])
            ->andFilterWhere(['like', 'keterangan_kepala', $this->keterangan_kepala]);

        return $dataProvider;
    }
}

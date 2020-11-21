<?php

namespace app\models\LubukSikaping;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LubukSikaping\Skpp;
use app\widgets\App;
use Yii;

/**
 * SkppSearch represents the model behind the search form of `app\models\LubukSikaping\Skpp`.
 */
class SkppSearch extends Skpp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpp'], 'integer'],
            [['nomor_skpp', 'nomor_satker', 'is_mo', 'keterangan_tolak_mo', 'is_kasi_pdms', 'keterangan_tolak_pdms', 'tanggal_created'], 'safe'],
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
        $query = Skpp::find();

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
            'id_skpp' => $this->id_skpp,
            'tanggal_created' => $this->tanggal_created,
        ]);

        $query->andFilterWhere(['like', 'nomor_skpp', $this->nomor_skpp])
            ->andFilterWhere(['like', 'nomor_satker', $this->nomor_satker])
            ->andFilterWhere(['like', 'is_mo', $this->is_mo])
            ->andFilterWhere(['like', 'keterangan_tolak_mo', $this->keterangan_tolak_mo])
            ->andFilterWhere(['like', 'is_kasi_pdms', $this->is_kasi_pdms])
            ->andFilterWhere(['like', 'keterangan_tolak_pdms', $this->keterangan_tolak_pdms]);

        return $dataProvider;
    }
}

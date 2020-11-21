<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PermissionUser;

/**
 * PermissionUserSearch represents the model behind the search form about `app\models\PermissionUser`.
 */
class PermissionUserSearch extends PermissionUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_per', 'user_id'], 'integer'],
            [['satker_kppn', 'created'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PermissionUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_per' => $this->id_per,
            'user_id' => $this->user_id,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'satker_kppn', $this->satker_kppn]);

        return $dataProvider;
    }
}

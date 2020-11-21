<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_stakeholder".
 *
 * @property int $id_stakeholder
 * @property string $kode_stakeholder
 * @property string $nama_stakeholder
 */
class DataStakeholder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_stakeholder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_stakeholder', 'nama_stakeholder'], 'required'],
            [['kode_stakeholder'], 'string', 'max' => 100],
            [['nama_stakeholder'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stakeholder' => 'Id Stakeholder',
            'kode_stakeholder' => 'Kode Stakeholder',
            'nama_stakeholder' => 'Nama Stakeholder',
        ];
    }
}

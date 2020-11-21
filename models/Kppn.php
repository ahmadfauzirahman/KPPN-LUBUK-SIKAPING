<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kppn".
 *
 * @property int $id_kppn
 * @property string $nama_kppn
 * @property string $no_staker
 * @property string $address
 * @property string $phone
 * @property string $provinsi
 * @property string $kepala_kantor
 * @property string $created
 */
class Kppn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kppn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kppn', 'no_staker', 'address', 'phone', 'provinsi', 'kepala_kantor'], 'required'],
            [['address'], 'string'],
            [['created'], 'safe'],
            [['nama_kppn'], 'string', 'max' => 200],
            [['no_staker'], 'string', 'max' => 10],
            [['phone', 'provinsi'], 'string', 'max' => 20],
            [['kepala_kantor'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kppn' => 'Id Kppn',
            'nama_kppn' => 'Nama Kppn',
            'no_staker' => 'No Staker',
            'address' => 'Address',
            'phone' => 'Phone',
            'provinsi' => 'Provinsi',
            'kepala_kantor' => 'Kepala Kantor',
            'created' => 'Created',
        ];
    }
}

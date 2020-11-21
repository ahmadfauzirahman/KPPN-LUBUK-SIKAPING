<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "skpp".
 *
 * @property int $id_skpp
 * @property string $nomor_skpp
 * @property string $nomor_satker
 * @property string|null $is_mo
 * @property string|null $keterangan_tolak_mo
 * @property string|null $is_kasi_pdms
 * @property string|null $keterangan_tolak_pdms
 * @property string|null $tanggal_created
 */
class Skpp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skpp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomor_skpp', 'nomor_satker'], 'required'],
            [['keterangan_tolak_mo', 'keterangan_tolak_pdms'], 'string'],
            [['tanggal_created'], 'safe'],
            [['nomor_skpp'], 'string', 'max' => 30],
            [['nomor_satker', 'is_mo', 'is_kasi_pdms'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_skpp' => 'Id Skpp',
            'nomor_skpp' => 'Nomor Skpp',
            'nomor_satker' => 'Nomor Satker',
            'is_mo' => 'Persetujuan Seksi PDMS',
            'keterangan_tolak_mo' => 'Keterangan Seksi PDMS',
            'is_kasi_pdms' => 'Persetujuan Kasi Pdms',
            'keterangan_tolak_pdms' => 'Keterangan Tolak Pdms',
            'tanggal_created' => 'Tanggal Created',
        ];
    }
}

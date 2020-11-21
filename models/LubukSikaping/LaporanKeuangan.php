<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "l_keuangan".
 *
 * @property int $id_l_keuangan
 * @property string $nomor_satker
 * @property string $nomor_surat
 * @property string $is_sekretaris
 * @property string $is_vera
 * @property string $tanggal_daftar
 */
class LaporanKeuangan extends \yii\db\ActiveRecord
{
	/**
	 * @return int
	 */
	public function getIdLKeuangan()
	{
		return $this->id_l_keuangan;
	}

	/**
	 * @param int $id_l_keuangan
	 */
	public function setIdLKeuangan($id_l_keuangan)
	{
		$this->id_l_keuangan = $id_l_keuangan;
	}

	/**
	 * @return string
	 */
	public function getNomorSatker()
	{
		return $this->nomor_satker;
	}

	/**
	 * @param string $nomor_satker
	 */
	public function setNomorSatker($nomor_satker = null)
	{
		$this->nomor_satker = $nomor_satker;
	}

	/**
	 * @return string
	 */
	public function getNomorSurat()
	{
		return $this->nomor_surat;
	}

	/**
	 * @param string $nomor_surat
	 */
	public function setNomorSurat($nomor_surat = null)
	{
		$this->nomor_surat = $nomor_surat;
	}

	/**
	 * @return string
	 */
	public function getIsSekretaris()
	{
		return $this->is_sekretaris;
	}

	/**
	 * @param string $is_sekretaris
	 */
	public function setIsSekretaris($is_sekretaris = null)
	{
		if ($is_sekretaris == null) {
			$this->is_sekretaris = $is_sekretaris;
		} else {
			$this->is_sekretaris = 'No';
		}
	}

	/**
	 * @return string
	 */
	public function getIsVera()
	{
		return $this->is_vera;
	}

	/**
	 * @param string $is_vera
	 */
	public function setIsVera($is_vera = null)
	{
		if ($is_vera == null) {
			$this->is_vera = $is_vera;
		} else {
			$this->is_vera = 'No';
		}
	}

	/**
	 * @return string
	 */
	public function getTanggalDaftar()
	{
		return $this->tanggal_daftar;
	}

	/**
	 * @param string $tanggal_daftar
	 */
	public function setTanggalDaftar($tanggal_daftar)
	{
		$this->tanggal_daftar = $tanggal_daftar;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'l_keuangan';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['nomor_satker', 'nomor_surat', 'is_sekretaris', 'is_vera'], 'required'],
			[['is_sekretaris', 'is_vera'], 'string'],
			[['tanggal_daftar'], 'safe'],
			[['nomor_satker'], 'string', 'max' => 10],
			[['nomor_surat'], 'string', 'max' => 30],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_l_keuangan' => 'Id L Keuangan',
			'nomor_satker' => 'Nomor Satker',
			'nomor_surat' => 'Nomor Surat',
			'is_sekretaris' => 'Validasi Sekretaris',
			'is_vera' => 'Validasi Vera',
			'tanggal_daftar' => 'Tanggal Daftar',
		];
	}
}

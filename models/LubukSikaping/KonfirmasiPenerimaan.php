<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "konfirmasi_penerimaan".
 *
 * @property int $id_konfirmasi_penerimaan
 * @property string $satker
 * @property string $nomor_surat
 * @property string $is_sekretaris
 * @property string $is_bank
 * @property string $keterangan_bank
 * @property string $tanggal_daftar
 */
class KonfirmasiPenerimaan extends \yii\db\ActiveRecord
{
	/**
	 * @return int
	 */
	public function getIdKonfirmasiPenerimaan()
	{
		return $this->id_konfirmasi_penerimaan;
	}

	/**
	 * @param int $id_konfirmasi_penerimaan
	 */
	public function setIdKonfirmasiPenerimaan($id_konfirmasi_penerimaan)
	{
		$this->id_konfirmasi_penerimaan = $id_konfirmasi_penerimaan;
	}

	/**
	 * @return string
	 */
	public function getSatker()
	{
		return $this->satker;
	}

	/**
	 * @param string $satker
	 */
	public function setSatker($satker)
	{
		$this->satker = $satker;
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
	public function setNomorSurat($nomor_surat)
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
	public function setIsSekretaris($is_sekretaris)
	{
		$this->is_sekretaris = $is_sekretaris;
	}

	/**
	 * @return string
	 */
	public function getIsBank()
	{
		return $this->is_bank;
	}

	/**
	 * @param string $is_bank
	 */
	public function setIsBank($is_bank)
	{
		$this->is_bank = $is_bank;
	}

	/**
	 * @return string
	 */
	public function getKeteranganBank()
	{
		return $this->keterangan_bank;
	}

	/**
	 * @param string $keterangan_bank
	 */
	public function setKeteranganBank($keterangan_bank)
	{
		$this->keterangan_bank = $keterangan_bank;
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
		return 'konfirmasi_penerimaan';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['satker', 'nomor_surat'], 'required'],
			[['is_sekretaris', 'is_bank', 'keterangan_bank'], 'string'],
			[['tanggal_daftar'], 'safe'],
			[['satker', 'nomor_surat'], 'string', 'max' => 30],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_konfirmasi_penerimaan' => 'Id Konfirmasi Penerimaan',
			'satker' => 'Satker',
			'nomor_surat' => 'Nomor Surat',
			'is_sekretaris' => 'Validasi Sekretaris',
			'is_bank' => 'Validasi Bank',
			'keterangan_bank' => 'Keterangan Bank',
			'tanggal_daftar' => 'Tanggal Daftar',
		];
	}
}

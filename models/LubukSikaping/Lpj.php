<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "lpj".
 *
 * @property int $id_lpj
 * @property string $nomor_satker
 * @property string $nomor_surat
 * @property string $is_sekretaris
 * @property string $is_vera
 * @property string|null $keterangan_vera
 * @property string $is_kepala
 * @property string|null $keterangan_kepala
 * @property string $tanggal_daftar
 */
class Lpj extends \yii\db\ActiveRecord
{
	/**
	 * @return int
	 */
	public function getIdLpj()
	{
		return $this->id_lpj;
	}

	/**
	 * @param int $id_lpj
	 */
	public function setIdLpj($id_lpj)
	{
		$this->id_lpj = $id_lpj;
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
	public function setNomorSatker($nomor_satker)
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
	public function setIsSekretaris($is_sekretaris = null)
	{
		if ($is_sekretaris != null) {
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
		if ($is_vera != null) {
			$this->is_vera = $is_vera;
		} else {
			$this->is_vera = 'No';
		}
	}

	/**
	 * @return string|null
	 */
	public function getKeteranganVera()
	{
		return $this->keterangan_vera;
	}

	/**
	 * @param string|null $keterangan_vera
	 */
	public function setKeteranganVera($keterangan_vera)
	{
		$this->keterangan_vera = $keterangan_vera;
	}

	/**
	 * @return string
	 */
	public function getIsKepala()
	{
		return $this->is_kepala;
	}

	/**
	 * @param string $is_kepala
	 */
	public function setIsKepala($is_kepala)
	{
		if ($is_kepala != null) {
			$this->is_kepala = $is_kepala;
		} else {
			$this->is_kepala = 'No';

		}
	}

	/**
	 * @return string|null
	 */
	public function getKeteranganKepala()
	{
		return $this->keterangan_kepala;
	}

	/**
	 * @param string|null $keterangan_kepala
	 */
	public function setKeteranganKepala($keterangan_kepala)
	{
		$this->keterangan_kepala = $keterangan_kepala;
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
		return 'lpj';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['nomor_satker', 'nomor_surat', 'is_sekretaris', 'is_vera', 'is_kepala'], 'required'],
			[['is_sekretaris', 'is_vera', 'keterangan_vera', 'is_kepala', 'keterangan_kepala'], 'string'],
			[['tanggal_daftar'], 'safe'],
			[['nomor_satker'], 'string', 'max' => 30],
			[['nomor_surat'], 'string', 'max' => 50],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_lpj' => 'Id Lpj',
			'nomor_satker' => 'Nomor Satker',
			'nomor_surat' => 'Nomor Surat',
			'is_sekretaris' => 'Validasi Sekretaris',
			'is_vera' => 'Validasi Vera',
			'keterangan_vera' => 'Keterangan Vera',
			'is_kepala' => 'Validasi Kepala',
			'keterangan_kepala' => 'Keterangan Kepala',
			'tanggal_daftar' => 'Tanggal Daftar',
		];
	}
}

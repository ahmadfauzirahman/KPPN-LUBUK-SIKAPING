<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "koreksi_penerimaan".
 *
 * @property int $id_koreksi_penerimaan
 * @property string $satker
 * @property string $nomor_surat
 * @property string $is_sekretaris
 * @property string $is_fo_bank
 * @property string $alasan_penolakan_fo
 * @property string $is_kepala_kppn
 * @property string $alasan_penolakan_kepal_kppn
 * @property string $tanggal_daftar
 */
class KoreksiPenerimaan extends \yii\db\ActiveRecord
{
	/**
	 * @return int
	 */
	public function getIdKoreksiPenerimaan()
	{
		return $this->id_koreksi_penerimaan;
	}

	/**
	 * @param int $id_koreksi_penerimaan
	 */
	public function setIdKoreksiPenerimaan($id_koreksi_penerimaan)
	{
		$this->id_koreksi_penerimaan = $id_koreksi_penerimaan;
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
	public function getIsFoBank()
	{
		return $this->is_fo_bank;
	}

	/**
	 * @param string $is_fo_bank
	 */
	public function setIsFoBank($is_fo_bank)
	{
		$this->is_fo_bank = $is_fo_bank;
	}

	/**
	 * @return string
	 */
	public function getAlasanPenolakanFo()
	{
		return $this->alasan_penolakan_fo;
	}

	/**
	 * @param string $alasan_penolakan_fo
	 */
	public function setAlasanPenolakanFo($alasan_penolakan_fo)
	{
		$this->alasan_penolakan_fo = $alasan_penolakan_fo;
	}

	/**
	 * @return string
	 */
	public function getIsKepalaKppn()
	{
		return $this->is_kepala_kppn;
	}

	/**
	 * @param string $is_kepala_kppn
	 */
	public function setIsKepalaKppn($is_kepala_kppn)
	{
		$this->is_kepala_kppn = $is_kepala_kppn;
	}

	/**
	 * @return string
	 */
	public function getAlasanPenolakanKepalKppn()
	{
		return $this->alasan_penolakan_kepal_kppn;
	}

	/**
	 * @param string $alasan_penolakan_kepal_kppn
	 */
	public function setAlasanPenolakanKepalKppn($alasan_penolakan_kepal_kppn)
	{
		$this->alasan_penolakan_kepal_kppn = $alasan_penolakan_kepal_kppn;
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
		return 'koreksi_penerimaan';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['satker', 'nomor_surat'], 'required'],
			[['is_sekretaris', 'is_fo_bank', 'alasan_penolakan_fo', 'is_kepala_kppn', 'alasan_penolakan_kepal_kppn'], 'string'],
			[['tanggal_daftar'], 'safe'],
			[['satker'], 'string', 'max' => 10],
			[['nomor_surat'], 'string', 'max' => 60],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_koreksi_penerimaan' => 'Id Koreksi Penerimaan',
			'satker' => 'Satker',
			'nomor_surat' => 'Nomor Surat',
			'is_sekretaris' => 'Validasi Sekretaris',
			'is_fo_bank' => 'Validasi Fo Bank',
			'alasan_penolakan_fo' => 'Alasan Penolakan Fo',
			'is_kepala_kppn' => 'Validasi Kepala Kppn',
			'alasan_penolakan_kepal_kppn' => 'Alasan Penolakan Kepal Kppn',
			'tanggal_daftar' => 'Tanggal Daftar',
		];
	}
}

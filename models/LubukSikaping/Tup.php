<?php

namespace app\models\LubukSikaping;

use Yii;

/**
 * This is the model class for table "tup".
 *
 * @property int $id_tup
 * @property string $satker
 * @property int $nomor_surat
 * @property string $is_sekretaris
 * @property string $is_pdms
 * @property string $keterangan_pdms
 * @property string $is_kepala_kppn
 * @property string $keterangan_kepala_kppn
 * @property string $nomor_surat_ap
 */
class Tup extends \yii\db\ActiveRecord
{
	/**
	 * @return int
	 */
	public function getIdTup()
	{
		return $this->id_tup;
	}

	/**
	 * @param int $id_tup
	 */
	public function setIdTup($id_tup)
	{
		$this->id_tup = $id_tup;
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
	 * @return int
	 */
	public function getNomorSurat()
	{
		return $this->nomor_surat;
	}

	/**
	 * @param int $nomor_surat
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
		if ($is_sekretaris) {

			$this->is_sekretaris = $is_sekretaris;
		} else {
			$this->is_sekretaris = 'No';
		}
	}

	/**
	 * @return string
	 */
	public function getIsPdms()
	{
		return $this->is_pdms;
	}

	/**
	 * @param string $is_pdms
	 */
	public function setIsPdms($is_pdms = null)
	{
		if ($is_pdms == null) {
			$this->is_pdms = $is_pdms;
		} else {
			$this->is_pdms = 'No';
		}
	}

	/**
	 * @return string
	 */
	public function getKeteranganPdms()
	{
		return $this->keterangan_pdms;
	}

	/**
	 * @param string $keterangan_pdms
	 */
	public function setKeteranganPdms($keterangan_pdms)
	{
		$this->keterangan_pdms = $keterangan_pdms;
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
	public function setIsKepalaKppn($is_kepala_kppn = null)
	{
		if ($is_kepala_kppn == null) {
			$this->is_kepala_kppn = $is_kepala_kppn;
		} else {
			$this->is_kepala_kppn = 'No';
		}
	}

	/**
	 * @return string
	 */
	public function getKeteranganKepalaKppn()
	{
		return $this->keterangan_kepala_kppn;
	}

	/**
	 * @param string $keterangan_kepala_kppn
	 */
	public function setKeteranganKepalaKppn($keterangan_kepala_kppn)
	{

		$this->keterangan_kepala_kppn = $keterangan_kepala_kppn;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'tup';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['satker', 'nomor_surat'], 'required'],
			[['nomor_surat'], 'integer'],
			[['is_sekretaris', 'is_pdms', 'is_kepala_kppn', 'keterangan_kepala_kppn'], 'string'],
			[['keterangan_pdms'], 'safe'],
			[['satker'], 'string', 'max' => 10],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id_tup' => 'Id Tup',
			'satker' => 'Satker',
			'nomor_surat' => 'Nomor Surat',
			'is_sekretaris' => 'Validasi Sekretaris',
			'is_pdms' => 'Validasi Pdms',
			'keterangan_pdms' => 'Keterangan Pdms',
			'is_kepala_kppn' => 'Validasi Kepala Kppn',
			'keterangan_kepala_kppn' => 'Keterangan Kepala Kppn',
			'nomor_surat_ap' => 'Nomor Surat',
		];
	}

	/**
	 * @return string
	 */
	public function getNomorSuratAp()
	{
		return $this->nomor_surat_ap;
	}

	/**
	 * @param string $nomor_surat_ap
	 */
	public function setNomorSuratAp($nomor_surat_ap)
	{
		$this->nomor_surat_ap = $nomor_surat_ap;
	}
}

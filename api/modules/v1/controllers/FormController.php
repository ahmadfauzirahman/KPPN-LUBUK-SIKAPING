<?php


namespace app\api\modules\v1\controllers;

use app\models\LubukSikaping\KonfirmasiPenerimaan;
use app\models\LubukSikaping\KoreksiPenerimaan;
use app\models\LubukSikaping\LaporanKeuangan;
use app\models\LubukSikaping\Lpj;
use app\models\LubukSikaping\Skpp;
use app\models\LubukSikaping\Tup;
use app\models\Pengguna;
use Yii;

class FormController extends ControllerBase
{
    public function actionSaveSkpp()
    {
        $p = Yii::$app->request->post();

        $kode_stakeholder = $p['nomor_satker'];
        $nomor_surat = $p['nomor_surat'];
        $model = new Skpp();
        $model->nomor_satker = $kode_stakeholder;
        $model->nomor_skpp = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [Skpp::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', []);
        }

        // return $this->redirect(['view', 'id' => $model->id_skpp]);

    }

    public function actionSaveTup()
    {
        $p = Yii::$app->request->post();

        $model = new Tup();
        $kode_stakeholder = $p['satker'];
        $nomor_surat = $p['nomor_surat'];
        $model->satker = $kode_stakeholder;
        $model->nomor_surat = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [Tup::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', [$model->errors]);
        }
    }

    public function actionSaveLpj()
    {
        $p = Yii::$app->request->post();

        $kode_stakeholder = $p['nomor_satker'];
        $nomor_surat = $p['nomor_surat'];
        $model = new Lpj();
        $model->nomor_satker = $kode_stakeholder;
        $model->nomor_skpp = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [Lpj::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', []);
        }
    }

    public function actionSaveKoreksi()
    {
        $p = Yii::$app->request->post();

        $model = new KoreksiPenerimaan();
        $kode_stakeholder = $p['satker'];
        $nomor_surat = $p['nomor_surat'];
        $model->satker = $kode_stakeholder;
        $model->nomor_surat = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [KoreksiPenerimaan::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', [$model->errors]);
        }
    }

    public function actionSaveKonfirmasi()
    {
        $p = Yii::$app->request->post();

        $model = new KonfirmasiPenerimaan();
        $kode_stakeholder = $p['satker'];
        $nomor_surat = $p['nomor_surat'];
        $model->satker = $kode_stakeholder;
        $model->nomor_surat = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [KonfirmasiPenerimaan::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', [$model->errors]);
        }
    }

    public function actionSaveLaporan()
    {
        $p = Yii::$app->request->post();

        $kode_stakeholder = $p['nomor_satker'];
        $nomor_surat = $p['nomor_surat'];
        $model = new LaporanKeuangan();
        $model->nomor_satker = $kode_stakeholder;
        $model->nomor_skpp = $nomor_surat;
        if ($model->save()) {
            return $this->writeResponse(true, 'Berhasil Menyimpan', [LaporanKeuangan::findOne(['nomor_surat' => $nomor_surat])]);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil Menyimpan', []);
        }
    }
}

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

class ServiceController extends ControllerBase
{

    // untuk login
    public function actionLogin()
    {
        $p = Yii::$app->request->post();

        $kode = $p['kode'];
        $password = $p['password'];

        $data  = Pengguna::findOne(['username' => $kode]);
        // var_dump($data);
        // exit();
        if ($data) {
            if ($kode == $data->username && md5($password) == $data->password) {
                return $this->writeResponse(true, 'Berhasil', $data);
            } else {
                return $this->writeResponse(false, 'Data Tidak Ditemukan', []);
            }
        } else {
            return $this->writeResponse(false, 'Data Tidak Ditemukan', []);
        }
    }

    // laporan keuangan list

    public function actionListLaporanKeuangan($id = null)
    {

        if (is_null($id)) {
            $laporanKeuangan = LaporanKeuangan::find()->orderBy('tanggal_daftar DESC')->all();
        } else {
            $laporanKeuangan = LaporanKeuangan::find()->where(['nomor_satker' => $id])->orderBy('tanggal_daftar DESC')->all();
        }

        if (count($laporanKeuangan) > 0) {
            return $this->writeResponse(true, 'Berhasil', $laporanKeuangan);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }

    public function actionKonfirmasi($id = null)
    {
        if (is_null($id)) {
            $konfirmasi = KonfirmasiPenerimaan::find()->orderBy('tanggal_daftar DESC')->all();
        } else {
            $konfirmasi = KonfirmasiPenerimaan::find()->where(['satker' => $id])->orderBy('tanggal_daftar DESC')->all();
        }
        if (count($konfirmasi) > 0) {
            return $this->writeResponse(true, 'Berhasil', $konfirmasi);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }

    public function actionSkpp($id =  null)
    {
        if (is_null($id)) {
            $skpp = Skpp::find()->orderBy('tanggal_created DESC')->all();
        } else {
            $skpp = Skpp::find()->where(['nomor_satker' => $id])->orderBy('tanggal_created DESC')->all();
        }

        if (count($skpp) > 0) {
            return $this->writeResponse(true, 'Berhasil', $skpp);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }

    public function actionLpj($id = null)
    {
        if (is_null($id)) {
            $lpj = Lpj::find()->orderBy('tanggal_daftar DESC')->all();
        } else {
            $lpj = Lpj::find()->where(['nomor_satker' => $id])->orderBy('tanggal_daftar DESC')->all();
        }

        if (count($lpj) > 0) {
            return $this->writeResponse(true, 'Berhasil', $lpj);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }

    public function actionTup($id = null)
    {
        if (is_null($id)) {
            $Tup = Tup::find()->orderBy('id_tup DESC')->all();
        } else {
            $Tup = Tup::find()->where(['satker' => $id])->orderBy('id_tup DESC')->all();
        }

        if (count($Tup) > 0) {
            return $this->writeResponse(true, 'Berhasil', $Tup);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }

    public function actionKoreksi($id = null)
    {
        if (is_null($id)) {
            $koreksi = KoreksiPenerimaan::find()->orderBy('tanggal_daftar DESC')->all();
        } else {
            $koreksi = KoreksiPenerimaan::find()->where(['satker' => $id])->orderBy('tanggal_daftar DESC')->all();
        }

        if (count($koreksi) > 0) {
            return $this->writeResponse(true, 'Berhasil', $koreksi);
        } else {
            return $this->writeResponse(false, 'Tidak Berhasil', []);
        }
    }
}

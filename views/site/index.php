<?php

/* @var $this yii\web\View */

use app\models\LubukSikaping\KonfirmasiPenerimaan;
use app\models\LubukSikaping\KoreksiPenerimaan;
use app\models\LubukSikaping\LaporanKeuangan;
use app\models\LubukSikaping\Lpj;
use app\models\LubukSikaping\Skpp;
use app\widgets\App;

$this->title = 'Dashboard';

if (App::isStakeholder()) {
    $skpp = Skpp::find()->where(['nomor_satker' => Yii::$app->user->identity->kodeAkun])->count('id_skpp');
    $lpj = Lpj::find()->where(['nomor_satker' => Yii::$app->user->identity->kodeAkun])->count('id_lpj');
    $laporanKeuangan = LaporanKeuangan::find()->where(['nomor_satker' => Yii::$app->user->identity->kodeAkun])->count('id_l_keuangan');
    $konfirmasi = KonfirmasiPenerimaan::find()->where(['satker' => Yii::$app->user->identity->kodeAkun])->count('id_konfirmasi_penerimaan');
    $koreksi = KoreksiPenerimaan::find()->where(['satker' => Yii::$app->user->identity->kodeAkun])->count('id_koreksi_penerimaan');
} else {
    $skpp = Skpp::find()->count('id_skpp');
    $lpj = Lpj::find()->count('id_lpj');
    $laporanKeuangan = LaporanKeuangan::find()->count('id_l_keuangan');
    $konfirmasi = KonfirmasiPenerimaan::find()->count('id_konfirmasi_penerimaan');
    $koreksi = KoreksiPenerimaan::find()->count('id_koreksi_penerimaan');
}

?>
<div class="site-index">

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= $skpp ?></h2>
                    <h5>SKPP</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= $lpj ?></h2>
                    <h5>LPJ</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= $konfirmasi ?></h2>
                    <h5>KONFIRMASI SETORAN</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= $laporanKeuangan ?></h2>
                    <h5>LAPORAN KEUANGAN</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div class="text-center">
                    <h2 class="text-custom" data-plugin="counterup"><?= $koreksi ?></h2>
                    <h5>KOREKSI PENERIMAAN</h5>
                </div>
            </div>
        </div>
    </div>
</div>
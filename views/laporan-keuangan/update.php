<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\LaporanKeuangan */

$this->title = 'Update Laporan Keuangan: ' . $model->nomor_surat;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Keuangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_surat, 'url' => ['view', 'id' => $model->id_l_keuangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-keuangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

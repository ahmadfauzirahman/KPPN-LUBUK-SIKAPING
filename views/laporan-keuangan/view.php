<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\LaporanKeuangan */

$this->title = $model->nomor_surat;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Keuangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="laporan-keuangan-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_l_keuangan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_l_keuangan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_l_keuangan',
            'nomor_satker',
            'nomor_surat',
            'is_sekretaris',
            'is_vera',
            'tanggal_daftar',
        ],
    ]) ?>

</div>

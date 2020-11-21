<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KonfirmasiPenerimaan */

$this->title = $model->id_konfirmasi_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Konfirmasi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="konfirmasi-penerimaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_konfirmasi_penerimaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_konfirmasi_penerimaan], [
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
            'id_konfirmasi_penerimaan',
            'satker',
            'nomor_surat',
            'is_sekretaris',
            'is_bank',
            'keterangan_bank:ntext',
            'tanggal_daftar',
        ],
    ]) ?>

</div>

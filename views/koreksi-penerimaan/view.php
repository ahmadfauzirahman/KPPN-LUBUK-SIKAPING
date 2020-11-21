<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KoreksiPenerimaan */

$this->title = $model->id_koreksi_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Koreksi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="koreksi-penerimaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_koreksi_penerimaan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_koreksi_penerimaan], [
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
            'id_koreksi_penerimaan',
            'satker',
            'nomor_surat',
            'is_sekretaris',
            'is_fo_bank',
            'alasan_penolakan_fo:ntext',
            'is_kepala_kppn',
            'alasan_penolakan_kepal_kppn:ntext',
            'tanggal_daftar',
        ],
    ]) ?>

</div>

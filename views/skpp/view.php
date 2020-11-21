<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Skpp */

$this->title = $model->nomor_skpp;
$this->params['breadcrumbs'][] = ['label' => 'Skpps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skpp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_skpp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_skpp], [
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
            // 'id_skpp',
            'nomor_skpp',
            'nomor_satker',
            [
                'attribute' => 'is_mo',
                'value' => function ($model) {
                    if ($model->is_mo == 'Send') {
                        return 'Setuju Seksi PDMS';
                    }

                    if ($model->is_mo == 'No') {
                        return 'Tidak Setuju Seksi PDMS';
                    }
                }
            ],
            [
                'attribute' => 'is_kasi_pdms',
                'value' => function ($model) {
                    if ($model->is_kasi_pdms == 'Send') {
                        return 'Setuju Kasi PDMS';
                    }

                    if ($model->is_kasi_pdms == 'No') {
                        return 'Tidak Setuju Kasi PDMS';
                    }
                }
            ],
            'keterangan_tolak_mo:ntext',
            'keterangan_tolak_pdms:ntext',
            'tanggal_created',
        ],
    ]) ?>

</div>
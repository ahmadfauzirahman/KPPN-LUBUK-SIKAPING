<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Tup */

$this->title = $model->id_tup;
$this->params['breadcrumbs'][] = ['label' => 'Tups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tup], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tup], [
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
            'id_tup',
            'satker',
            'nomor_surat',
            'is_sekretaris',
            'is_pdms',
            'keterangan_pdms:ntext',
            'is_kepala_kppn',
            'keterangan_kepala_kppn:ntext',
            'nomor_surat_ap',
            'tanggal_daftar',
        ],
    ]) ?>

</div>

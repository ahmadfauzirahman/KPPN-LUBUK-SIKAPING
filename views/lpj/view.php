<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Lpj */

$this->title = $model->id_lpj;
$this->params['breadcrumbs'][] = ['label' => 'Lpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lpj-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lpj], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_lpj], [
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
            'id_lpj',
            'nomor_satker',
            'nomor_surat',
            'is_sekretaris',
            'is_vera',
            'keterangan_vera:ntext',
            'is_kepala',
            'keterangan_kepala:ntext',
            'tanggal_daftar',
        ],
    ]) ?>

</div>

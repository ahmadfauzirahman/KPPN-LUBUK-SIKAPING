<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\LaporanKeuangan */

$this->title = 'Create Laporan Keuangan';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Keuangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-keuangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

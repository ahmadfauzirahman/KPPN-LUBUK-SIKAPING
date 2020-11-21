<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Lpj */

$this->title = 'Update Lpj: ' . $model->nomor_surat;
$this->params['breadcrumbs'][] = ['label' => 'Lpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_surat, 'url' => ['view', 'id' => $model->id_lpj]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lpj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

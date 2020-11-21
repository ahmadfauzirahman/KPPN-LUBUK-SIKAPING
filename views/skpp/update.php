<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Skpp */

$this->title = 'Update Skpp: ' . $model->nomor_skpp;
$this->params['breadcrumbs'][] = ['label' => 'Skpps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_skpp, 'url' => ['view', 'id' => $model->id_skpp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skpp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

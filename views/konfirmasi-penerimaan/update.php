<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KonfirmasiPenerimaan */

$this->title = 'Update Konfirmasi Penerimaan: ' . $model->id_konfirmasi_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Konfirmasi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_konfirmasi_penerimaan, 'url' => ['view', 'id' => $model->id_konfirmasi_penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konfirmasi-penerimaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

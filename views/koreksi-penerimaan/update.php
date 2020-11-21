<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KoreksiPenerimaan */

$this->title = 'Update Koreksi Penerimaan: ' . $model->id_koreksi_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Koreksi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_koreksi_penerimaan, 'url' => ['view', 'id' => $model->id_koreksi_penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="koreksi-penerimaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

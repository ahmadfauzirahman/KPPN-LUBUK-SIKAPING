<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KonfirmasiPenerimaan */

$this->title = 'Create Konfirmasi Penerimaan';
$this->params['breadcrumbs'][] = ['label' => 'Konfirmasi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konfirmasi-penerimaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

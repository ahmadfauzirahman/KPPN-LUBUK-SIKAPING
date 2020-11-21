<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\KoreksiPenerimaan */

$this->title = 'Create Koreksi Penerimaan';
$this->params['breadcrumbs'][] = ['label' => 'Koreksi Penerimaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="koreksi-penerimaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

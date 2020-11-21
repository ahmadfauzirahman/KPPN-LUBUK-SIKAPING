<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Tup */

$this->title = 'Update Tup: ' . $model->id_tup;
$this->params['breadcrumbs'][] = ['label' => 'Tups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tup, 'url' => ['view', 'id' => $model->id_tup]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

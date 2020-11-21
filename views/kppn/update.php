<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kppn */

$this->title = 'Update Kppn: ' . $model->id_kppn;
$this->params['breadcrumbs'][] = ['label' => 'Kppns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kppn, 'url' => ['view', 'id' => $model->id_kppn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kppn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

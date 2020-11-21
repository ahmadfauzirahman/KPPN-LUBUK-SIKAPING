<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataStakeholder */

$this->title = 'Update Data Stakeholder: ' . $model->id_stakeholder;
$this->params['breadcrumbs'][] = ['label' => 'Data Stakeholders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stakeholder, 'url' => ['view', 'id' => $model->id_stakeholder]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-stakeholder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

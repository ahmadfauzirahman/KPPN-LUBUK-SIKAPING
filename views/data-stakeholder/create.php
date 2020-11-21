<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataStakeholder */

$this->title = 'Create Data Stakeholder';
$this->params['breadcrumbs'][] = ['label' => 'Data Stakeholders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-stakeholder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

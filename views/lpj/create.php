<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Lpj */

$this->title = 'Create Lpj';
$this->params['breadcrumbs'][] = ['label' => 'Lpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lpj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

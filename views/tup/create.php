<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Tup */

$this->title = 'Create Tup';
$this->params['breadcrumbs'][] = ['label' => 'Tups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

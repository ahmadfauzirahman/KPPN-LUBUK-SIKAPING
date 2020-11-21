<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Skpp */

$this->title = 'Form Skpp';
$this->params['breadcrumbs'][] = ['label' => 'Skpps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skpp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KppnSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kppn-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kppn') ?>

    <?= $form->field($model, 'nama_kppn') ?>

    <?= $form->field($model, 'no_staker') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'kepala_kantor') ?>

    <?php // echo $form->field($model, 'created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

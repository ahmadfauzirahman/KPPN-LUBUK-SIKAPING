<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\SkppSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skpp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_skpp') ?>

    <?= $form->field($model, 'nomor_skpp') ?>

    <?= $form->field($model, 'nomor_satker') ?>

    <?= $form->field($model, 'is_mo') ?>

    <?= $form->field($model, 'keterangan_tolak_mo') ?>

    <?php // echo $form->field($model, 'is_kasi_pdms') ?>

    <?php // echo $form->field($model, 'keterangan_tolak_pdms') ?>

    <?php // echo $form->field($model, 'tanggal_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

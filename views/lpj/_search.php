<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\LpjSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lpj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_lpj') ?>

    <?= $form->field($model, 'nomor_satker') ?>

    <?= $form->field($model, 'nomor_surat') ?>

    <?= $form->field($model, 'is_sekretaris') ?>

    <?= $form->field($model, 'is_vera') ?>

    <?php // echo $form->field($model, 'keterangan_vera') ?>

    <?php // echo $form->field($model, 'is_kepala') ?>

    <?php // echo $form->field($model, 'keterangan_kepala') ?>

    <?php // echo $form->field($model, 'tanggal_daftar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

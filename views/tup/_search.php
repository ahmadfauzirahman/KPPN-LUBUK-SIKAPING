<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\TupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_tup') ?>

    <?= $form->field($model, 'satker') ?>

    <?= $form->field($model, 'nomor_surat') ?>

    <?= $form->field($model, 'is_sekretaris') ?>

    <?= $form->field($model, 'is_pdms') ?>

    <?php // echo $form->field($model, 'keterangan_pdms') ?>

    <?php // echo $form->field($model, 'is_kepala_kppn') ?>

    <?php // echo $form->field($model, 'keterangan_kepala_kppn') ?>

    <?php // echo $form->field($model, 'nomor_surat_ap') ?>

    <?php // echo $form->field($model, 'tanggal_daftar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

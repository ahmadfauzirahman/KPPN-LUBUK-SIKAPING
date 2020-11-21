<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\LaporanKeuangan */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="laporan-keuangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_satker')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->kodeAkun, 'readonly' => true]) ?>

    <?= $form->field($model, 'nomor_surat')->textInput(['maxlength' => true]) ?>
    <?php if (!App::isStakeholder()) { ?>

        <?= $form->field($model, 'is_sekretaris')->dropDownList(['Yes' => 'Yes', 'No' => 'No', 'Send' => 'Send',], ['prompt' => '']) ?>

        <?= $form->field($model, 'is_vera')->dropDownList(['Yes' => 'Yes', 'No' => 'No',], ['prompt' => '']) ?>

        <?php $form->field($model, 'tanggal_daftar')->textInput() ?>

    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Skpp */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="skpp-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php if (App::isStakeholder()) { ?>
        <?= $form->field($model, 'nomor_satker')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->kodeAkun, 'readonly' => true]) ?>
        <?= $form->field($model, 'nomor_skpp')->textInput(['maxlength' => true]) ?>
    <?php  } ?>

    <?php if (!App::isStakeholder()) { ?>
        <?= $form->field($model, 'is_mo')->dropDownList(['Send' => 'Setuju Seksi PDMS', 'No' => 'Tidak Setuju Seksi PDMS'], ['prompt' => 'Pilih Persetujuan']) ?>

        <?= $form->field($model, 'keterangan_tolak_mo')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'is_kasi_pdms')->dropDownList(['Send' => 'Setuju Kasi PDMS', 'No' => 'Tidak Setuju Kasi PDMS'], ['prompt' => 'Pilih Persetujuan']) ?>

        <?= $form->field($model, 'keterangan_tolak_pdms')->textarea(['rows' => 6]) ?>

        <?php $form->field($model, 'tanggal_created')->textInput() ?>
    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
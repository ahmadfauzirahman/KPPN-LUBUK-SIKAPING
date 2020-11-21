<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Lpj */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="lpj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (App::isStakeholder()) { ?>

        <?= $form->field($model, 'nomor_satker')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->kodeAkun, 'readonly' => true]) ?>

        <?= $form->field($model, 'nomor_surat')->textInput(['maxlength' => true]) ?>

    <?php } ?>
    <?php if (!App::isStakeholder()) { ?>

        <?= $form->field($model, 'is_sekretaris')->dropDownList(['Send' => 'Send', 'No' => 'No',], ['prompt' => '']) ?>

        <?= $form->field($model, 'is_vera')->dropDownList(['Send' => 'Send', 'No' => 'No',], ['prompt' => '']) ?>

        <?= $form->field($model, 'keterangan_vera')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'is_kepala')->dropDownList(['Send' => 'Send', 'No' => 'No'], ['prompt' => '']) ?>

        <?= $form->field($model, 'keterangan_kepala')->textarea(['rows' => 6]) ?>

        <?php $form->field($model, 'tanggal_daftar')->textInput() ?>

    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
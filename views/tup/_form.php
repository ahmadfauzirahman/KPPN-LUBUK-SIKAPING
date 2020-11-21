<?php

use app\widgets\App;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Tup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="tup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satker')->textInput(['maxlength' => true,'value'=>Yii::$app->user->identity->kodeAkun,'readonly'=>true]) ?>

    <?= $form->field($model, 'nomor_surat')->textInput(['maxlength' => true]) ?>
    <?php if (!App::isStakeholder()) { ?>

        <?= $form->field($model, 'is_sekretaris')->dropDownList(['Yes' => 'Yes', 'No' => 'No', 'Send' => 'Send',], ['prompt' => '']) ?>

        <?= $form->field($model, 'is_pdms')->dropDownList(['Yes' => 'Yes', 'No' => 'No',], ['prompt' => '']) ?>

        <?= $form->field($model, 'keterangan_pdms')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'is_kepala_kppn')->dropDownList(['Yes' => 'Yes', 'No' => 'No',], ['prompt' => '']) ?>

        <?= $form->field($model, 'keterangan_kepala_kppn')->textarea(['rows' => 6]) ?>
    <?php } ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
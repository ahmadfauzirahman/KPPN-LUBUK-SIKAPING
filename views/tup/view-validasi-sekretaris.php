<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LubukSikaping\Tup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="tup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'satker')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Satker']) ?>

    <?= $form->field($model, 'nomor_surat')->textInput(['placeholder' => 'Nomor Surat']) ?>

    <?= $form->field($model, 'is_sekretaris')->dropDownList(['Yes' => 'Yes', 'No' => 'No',], ['prompt' => '']) ?>


    <?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php } ?>

    <?php ActiveForm::end(); ?>

</div>
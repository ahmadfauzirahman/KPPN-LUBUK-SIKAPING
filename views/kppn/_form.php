<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kppn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kppn-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kppn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_staker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepala_kantor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

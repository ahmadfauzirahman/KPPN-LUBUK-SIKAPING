<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengguna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'token_aktivasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Aktif' => 'Aktif', 'Non Aktif' => 'Non Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PermissionUser */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="permission-user-form">

	<?php $form = ActiveForm::begin(); ?>

	<?php $form->field($model, 'user_id')->textInput(['placeholder' => 'Nama User']) ?>
	<?= $form->field($model, 'user_id')->widget(\kartik\select2\Select2::classname(), [
			'data' => \yii\helpers\ArrayHelper::map(\app\models\Pengguna::find()->all(), 'userID', 'username'),
			'language' => 'en',
			'options' => ['placeholder' => 'Pilih User'],
			'pluginOptions' => [
					'allowClear' => true
			],
	]); ?>
	<?= $form->field($model, 'satker_kppn')->widget(\kartik\select2\Select2::classname(), [
			'data' => \yii\helpers\ArrayHelper::map(\app\models\Kppn::find()->all(), 'no_staker', 'nama_kppn'),
			'language' => 'en',
			'options' => ['placeholder' => 'Pilih User'],
			'pluginOptions' => [
					'allowClear' => true
			],
	]); ?>
	<?php $form->field($model, 'satker_kppn')->textInput(['maxlength' => true, 'placeholder' => 'Satker KPPN']) ?>

	<?php $form->field($model, 'created')->textInput() ?>


	<?php if (!Yii::$app->request->isAjax) { ?>
		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
	<?php } ?>

	<?php ActiveForm::end(); ?>

</div>

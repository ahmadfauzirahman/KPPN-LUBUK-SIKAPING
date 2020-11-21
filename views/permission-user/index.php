<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Modal;
use kartik\grid\GridView;
use app\components\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KppnSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permission Users';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>

<style>
	.close {

		padding: 0 !important;
		margin: 0 !important;
	}

	.modal-header {
		border-bottom-width: 2px !important;
		margin: 0 !important;
		padding: 10px !important;
		padding-bottom: 0px !important;
		padding-bottom: 15px !important;
	}
</style>

<style>
	.panel {
		border: none;
		margin-bottom: 20px;
		box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0.0) !important;
	}
</style>

<div class="kppn-index">
	<div id="ajaxCrudDatatable">
		<?= GridView::widget([
				'id' => 'crud-datatable',
				'dataProvider' => $dataProvider,
				'filterModel' => $searchModel,
				'pjax' => true,
				'columns' => require(__DIR__ . '/_columns.php'),
				'toolbar' => [
						[
								'content' =>
										false,
							// '{toggleData}',
							// '{export}'
						],
				],
				'striped' => true,
				'condensed' => true,
				'responsive' => true,
				'panel' => [
						'type' => 'primary',
						'heading' => '<i class="fa fa-list"></i> Data Master Permission Users',
						'before' => '<div class="btn-group" style="margin-bottom:20px">' .
								Html::a(
										'<i class="mdi mdi-database-plus"></i> Tambah Data',
										['create'],
										[
												'role' => 'modal-remote', 'title' => 'Tambah Data',
												'data-toggle' => 'tooltip',
												'data-placement' => 'right', 'class' => 'btn btn-info btn-rounded waves-effect waves-light btn-sm'
										]
								) . ' ' .
								//Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],
								//['role'=>'modal-remote','title'=> 'Create new Settings','class'=>'btn btn-default']).
								Html::a(
										'<i class="mdi mdi-reload"></i> Refresh Tabel',
										[''],
										[
												'data-pjax' => 1, 'class' => 'btn btn-info btn-trans btn-sm btn-rounded',
												'title' => 'Refresh Tabel'
										]
								) . '</div><br/>',
						'after' => BulkButtonWidget::widget([
										'buttons' => Html::a('<i class="fa fa-trash"></i>&nbsp; Delete All',
												["bulk-delete"],
												[
														"class" => "btn btn-danger btn-xs",
														'role' => 'modal-remote-bulk',
														'data-confirm' => false, 'data-method' => false,// for overide yii data api
														'data-request-method' => 'post',
														'data-confirm-title' => 'Are you sure?',
														'data-confirm-message' => 'Are you sure want to delete this item'
												]),
								]) .
								'<div class="clearfix"></div>',
				]
		]) ?>
	</div>
</div>
<?php Modal::begin([
		"id" => "ajaxCrudModal",
		"footer" => "",// always need it for jquery plugin
		'options' => ['tabindex' => ''],
]) ?>
<?php Modal::end(); ?>

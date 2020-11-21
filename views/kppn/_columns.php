<?php

use yii\helpers\Url;

return [
	[
		'class' => 'kartik\grid\CheckboxColumn',
		'width' => '20px',
	],
	[
		'class' => 'kartik\grid\SerialColumn',
		'width' => '30px',
	],
//	['class' => '\kartik\grid\DataColumn',
//		'attribute' => 'id_kppn',
//	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'nama_kppn',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'no_staker',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'address',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'phone',
	],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'provinsi',
	// ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'kepala_kantor',
	// ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'created',
	// ],
	[
		'class' => 'app\components\ActionColumn',
		'dropdown' => false,
		'vAlign' => 'middle',
		'width' => '140px',

		'urlCreator' => function ($action, $model, $key, $index) {
			return Url::to([$action, 'id' => $key]);
		},
		//        'viewOptions' => ['role' => 'modal-remote', 'title' => 'Detail', 'data-toggle' => 'tooltip', 'class' => 'btn btn-rounded btn-trans btn-sm btn-info'],
		'viewOptions' => ['icon' => "<span class='fa fa-list'></span>", 'role' => 'modal-remote', 'title' => 'Detail', 'data-toggle' => 'tooltip', 'class' => 'btn btn-rounded btn-trans btn-sm btn-info'],
		'updateOptions' => ['icon' => '<span class="mdi mdi-pencil"></span>', 'role' => 'modal-remote', 'title' => 'Edit', 'data-toggle' => 'tooltip', 'class' => 'btn btn-rounded btn-trans btn-sm btn-warning'],
		'deleteOptions' => [
			'icon' => '<span class="fa fa-trash"></span>',
			'class' => 'btn btn-rounded btn-trans btn-sm btn-danger',
			'role' => 'modal-remote', 'title' => 'Delete',
			'data-confirm' => false, 'data-method' => false, // for overide yii data api
			'data-request-method' => 'post',
			'data-toggle' => 'tooltip',
			'data-confirm-title' => 'Are you sure?',
			'data-confirm-message' => 'Are you sure want to delete this item'
		],
	],

];   

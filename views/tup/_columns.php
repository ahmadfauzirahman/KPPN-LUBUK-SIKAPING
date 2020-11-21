<?php

use yii\bootstrap4\Html;
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
	//        [
	//        'class'=>'\kartik\grid\DataColumn',
	//        'attribute'=>'id_tup',
	//    ],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'satker',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'nomor_surat',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'is_sekretaris',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'is_pdms',
	],
	//	[
	//		'class' => '\kartik\grid\DataColumn',
	//		'attribute' => 'keterangan_pdms',
	//	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'is_kepala_kppn',
	],
	//	[
	//		'class' => '\kartik\grid\DataColumn',
	//		'attribute' => 'keterangan_kepala_kppn',
	//	],
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

		// 'sekretarisOptions' => ['icon' => "<span class='fa fa-list'></span>", 'role' => 'modal-remote', 'title' => 'Detail', 'data-toggle' => 'tooltip', 'class' => 'btn btn-rounded btn-trans btn-sm btn-info'],

	],

];

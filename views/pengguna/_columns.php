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
//	[
//		'class' => '\kartik\grid\DataColumn',
//		'attribute' => 'userID',
//	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'username',
	],
//	[
//		'class' => '\kartik\grid\DataColumn',
//		'attribute' => 'password',
//	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'nama',
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'email',
	],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'telepon',
	// ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'foto',
	// ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'tanggal_pendaftaran',
	// ],
	 [
	 'class'=>'\kartik\grid\DataColumn',
	 'attribute'=>'role',
	 ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'token_aktivasi',
	// ],
	// [
	// 'class'=>'\kartik\grid\DataColumn',
	// 'attribute'=>'status',
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

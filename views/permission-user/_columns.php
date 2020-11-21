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
//        [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'id_per',
//    ],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'user_id',
		'value' => function ($model) {
			$user = \app\models\Pengguna::findOne($model->user_id)['nama'];
			return $user;
		}
	],
	[
		'class' => '\kartik\grid\DataColumn',
		'attribute' => 'satker_kppn',
		'value' => function ($model) {
			$kppn = \app\models\Kppn::find()->where(['no_staker'=>$model->satker_kppn])->one();
			return $kppn->nama_kppn;
		}
	],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'created',
//    ],
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

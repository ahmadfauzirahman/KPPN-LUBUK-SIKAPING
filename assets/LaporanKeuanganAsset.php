<?php


namespace app\assets;


use yii\web\AssetBundle;

class LaporanKeuanganAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $jsOptions = ['position' => \yii\web\View::POS_END];

	public $css = [

	];
	public $js = [
		'js/laporan-keuangan.js'

	];
	public $depends = [
		'yii\web\JqueryAsset',

	];
}

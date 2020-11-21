<?php


namespace app\assets;


use yii\web\AssetBundle;

class LpjAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $jsOptions = ['position' => \yii\web\View::POS_END];

	public $css = [

	];
	public $js = [
		'js/lpj.js'

	];
	public $depends = [
		'yii\web\JqueryAsset',

	];
}

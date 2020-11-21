<?php


namespace app\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web/themes';
	public $css = [
		"assets/css/bootstrap.min.css",
		"assets/css/icons.css",
		"assets/css/style.css",

		"assets/js/modernizr.min.js"
	];
	public $js = [
//		"assets/js/jquery.min.js",
		"assets/js/popper.min.js",
		"assets/js/bootstrap.min.js",
		"assets/js/detect.js",
		"assets/js/fastclick.js",
		"assets/js/jquery.blockUI.js",
		"assets/js/waves.js",
		"assets/js/jquery.nicescroll.js",
		"assets/js/jquery.slimscroll.js",
		"assets/js/jquery.scrollTo.min.js",

		"assets/js/jquery.core.js",
		"assets/js/jquery.app.js",
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapPluginAsset'
	];
}

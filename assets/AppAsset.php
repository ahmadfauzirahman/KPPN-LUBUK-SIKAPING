<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web/themes';
	public $css = [
		"assets/plugins/datatables/dataTables.bootstrap4.min.css",
		"assets/plugins/datatables/buttons.bootstrap4.min.css",
		"assets/plugins/datatables/responsive.bootstrap4.min.css",
		"assets/plugins/datatables/select.bootstrap4.min.css",
		"assets/css/bootstrap.min.css",
		"assets/css/icons.css",
		"assets/css/style.css",

		"assets/js/modernizr.min.js"
	];
	public $js = [
//		"assets/js/jquery.min.js",
		"assets/js/popper.min.js",
		"assets/js/bootstrap.min.js",
		"assets/js/bootstrap-notify.js",
		"assets/js/detect.js",
		"assets/js/fastclick.js",
		"assets/js/jquery.blockUI.js",
		"assets/js/waves.js",
		"assets/js/jquery.nicescroll.js",
		"assets/js/jquery.slimscroll.js",
		"assets/js/jquery.scrollTo.min.js",
		"assets/plugins/datatables/jquery.dataTables.min.js",
		"assets/plugins/datatables/dataTables.bootstrap4.min.js",
		"assets/plugins/datatables/dataTables.buttons.min.js",
		"assets/plugins/datatables/buttons.bootstrap4.min.js",
		"assets/plugins/datatables/jszip.min.js",
		"assets/plugins/datatables/pdfmake.min.js",
		"assets/plugins/datatables/vfs_fonts.js",
		"assets/plugins/datatables/buttons.html5.min.js",
		"assets/plugins/datatables/buttons.print.min.js",

		"assets/plugins/datatables/dataTables.keyTable.min.js",

		"assets/plugins/datatables/dataTables.responsive.min.js",
		"assets/plugins/datatables/responsive.bootstrap4.min.js",

		"assets/plugins/datatables/dataTables.select.min.js",
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

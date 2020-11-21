<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\components\Breadcrumbs;
use app\assets\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
        body,
        html,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        a {
            font-family: 'Quicksand', sans-serif !important;
        }
    </style>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="fixed-left">
<?php $this->beginBody() ?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<!-- end wrapper page -->

<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

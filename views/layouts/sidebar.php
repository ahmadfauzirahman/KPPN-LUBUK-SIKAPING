<?php

use app\models\PermissionUser;
use yii\helpers\Url;

error_reporting(0)
?>

<li class="text-muted menu-title">Navigation</li>
<li>
	<a href="<?= Url::to(['site/index']) ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span>
	</a>
</li>
<?php
$roles = Yii::$app->user->identity->roles;

// check  menu untuk user
$kode = Yii::$app->user->identity->roles;
if ($roles == 'super') :
?>
	<li>
		<a href="<?= Url::to(['pengguna/index']) ?>" class="waves-effect"><i class="fa fa-user"></i>
			<span> Data Pengguna </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['kppn/index']) ?>" class="waves-effect"><i class="mdi mdi-light-switch"></i>
			<span> Master Kppn </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['permission-user/index']) ?>" class="waves-effect"><i class="mdi mdi-light-switch"></i>
			<span> Permission User </span>
		</a>
	</li>
<?php endif; ?>

<?php
$perm = PermissionUser::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

?>
<?php if ($perm->satker_kppn === '040' || $roles == 'super') : ?>
	<li class="text-muted menu-title">Menu Lubuk Sikaping</li>
	<li>
		<a href="<?= Url::to(['pengguna/index']) ?>" class="waves-effect"><i class="fa fa-user"></i>
			<span> Data Pengguna </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['data-stakeholder/index']) ?>" class="waves-effect"><i class="fa fa-user"></i>
			<span> Data Stakeholder </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['skpp/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> SKPP </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['lpj/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> LPJ </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['laporan-keuangan/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> Laporan Keuangan </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['tup/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> Tup </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['konfirmasi-penerimaan/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> Konfirmasi Penerimaan </span>
		</a>
	</li>
	<li>
		<a href="<?= Url::to(['koreksi-penerimaan/index']) ?>" class="waves-effect"><i class="mdi mdi-view-list"></i>
			<span> Koreksi Penerimaan </span>
		</a>
	</li>
<?php endif; ?>
<?php

use yii\helpers\Url;
?>

<li class="text-muted menu-title">Navigation</li>
<li>
	<a href="<?= Url::to(['site/index']) ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span>
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
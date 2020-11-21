<?php

/* @var $this yii\web\View */

$this->title = 'Masuk | Service KPPN';

use yii\helpers\Url;

?>
<div class="wrapper-page">
	<div class="text-center">
		<a href="<?= Url::to(['masuk/index']) ?>" class="logo"><span>SILUSI<span> LUBUK SIKAPING</span></span></a>
		<h5 class="text-muted m-t-0 font-600"></h5>
	</div>
	<div class="m-t-40 card-box">
		<div class="text-center">
			<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
			<p><?= \app\widgets\Alert::widget() ?>

		</div>
		<div class="p-20">
			<form class="form-horizontal m-t-20" action="#" method="post">

				<div class="form-group">
					<div class="col-xs-12">
						<input class="form-control" type="text" name="Masuk[]" placeholder="Kode Akun">
					</div>
				</div>

				<div class="form-group">
					<div class="col-xs-12">
						<input class="form-control" type="password" name="Masuk[]" placeholder=" Password">
					</div>
				</div>

				<div class="form-group ">
					<div class="col-xs-12">
						<div class="checkbox checkbox-custom">
							<input id="checkbox-signup" name="Masuk[]" type="checkbox">
							<label for="checkbox-signup">
								Remember me
							</label>
						</div>

					</div>
				</div>

				<div class="form-group text-center m-t-30">
					<input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
						   value="<?= Yii::$app->request->csrfToken ?>">
					<div class="col-xs-12">
						<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log
							In
						</button>
					</div>
				</div>


			</form>

		</div>
	</div>
	<!-- end card-box-->

</div>

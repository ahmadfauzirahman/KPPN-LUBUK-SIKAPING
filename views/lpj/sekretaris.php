<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

\app\assets\LpjAsset::register($this);

$this->title = 'Validasi Sekretaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<h4 class="m-t-4  ml-2 header-title">    <?= Html::encode($this->title) ?>
				</h4>
				<table id="datatable" class="table table-bordered" width="100%">
					<thead>
					<tr>
						<th>No</th>
						<th>Aksi</th>
						<th>Nomor Satker</th>
						<th>Nomor Surat</th>
						<th>Validasi Sekretaris</th>
					</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal-title">Pengguna</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form name="sekretarisform" id="sekretarisform">

				<div class="modal-body">
					<input type="hidden" name="id_lpj" id="id_lpj">

					<div class="form-group">
						<label for="">Validasi Penerimaan</label>
						<select name="validasi" id="validasi" class="form-control">
							<option value="Send">Terima, Teruskan Ke Vera</option>
							<option value="Reject">Tolak</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
					<button type="submit" form="sekretarisform" id="save"
							class="btn btn-primary waves-effect waves-light">Save
					</button>
				</div>
			</form>

		</div>
	</div>
</div>
<?php
$js = <<< JS
$(document).ready(function () {
	$("#datatable").DataTable({
		"processing": true,
		"serverSide": true,
		"ajax": {
			"url": baseUrl + "service/get-lpj",
			"type": "POST"
		},
		"columnDefs": [
			{
				"width": "10px",
				"targets": [0,1]
			},
			{
				"class": "text-center",
				"targets": [0, 1, 2, 3, 4]
			}
		],

		"order": [
			[1, "ASC"]
		],
	});
	


})

JS;
$this->registerJs($js);
?>

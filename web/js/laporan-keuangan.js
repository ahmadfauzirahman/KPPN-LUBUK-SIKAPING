$(document).ready(function () {

	$("#sekretarisform").on('submit', function (e) {
		e.preventDefault();
		var data = new FormData(this);
		$.ajax({
			type: 'POST',
			url: baseUrl + 'api-laporan-keuangan/save',
			data: data,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			success: function (response) {
				if (response.con) {
					updateDataTable();

					showNotification(response.con, response.msg);
					$("#modal").modal("hide");

				} else {
					showNotification(response.con, response.msg);
				}

			}
		});
	})
	$("#alasan_penolakan_div").hide();

	$("#validasi").change(function () {
		var val = $("#validasi").val();
		if (val == 'Reject') {
			$("#alasan_penolakan_div").show();
		}else{
			$("#alasan_penolakan_div").hide();

		}
	})

})

function validasisekretaris(e) {
	$.post(baseUrl + "api-laporan-keuangan/get-one-by-id-laporan-keuangan", {id: $(e).data("value")}, function (response) {

		if (response.con) {
			console.log(response.data);
			// document.getElementById("display").style.display = "none";

			$.each(response.data, function (i, v) {
				if ($("#" + i) != undefined) {
					$("#" + i).val(v);
				}
			})
			$("#modal-title").html("<i class='fa fa-pencil'></i> &nbsp;Validasi Penerimaan LPJ");
			$("#modal").modal('show');
		} else {
			showNotification(false, e.msg);
		}
	}, 'JSON');
}

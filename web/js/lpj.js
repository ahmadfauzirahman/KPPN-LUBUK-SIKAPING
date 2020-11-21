$(document).ready(function () {
	$("#sekretarisform").on('submit', function (e) {
		e.preventDefault();
		var data = new FormData(this);
		$.ajax({
			type: 'POST',
			url: baseUrl + 'api-lpj/save',
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

	$("#fo_veraform").on('submit',function (e) {
		e.preventDefault();
		var dataFera = new FormData(this);
		$.ajax({
			type: 'POST',
			url: baseUrl + 'api-lpj/save',
			data: dataFera,
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

//validasi sekretaris
function validasi(e) {
	$.post(baseUrl + "api-lpj/get-one-by-id-lpj", {id: $(e).data("value")}, function (response) {

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

//validasi vera
function validasivera(e) {
	$.post(baseUrl + "api-lpj/get-one-by-id-lpj", {id: $(e).data("value")}, function (response) {

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

//validasi vera
function validasiseksivera(e) {
	$.post(baseUrl + "api-lpj/get-one-by-id-lpj", {id: $(e).data("value")}, function (response) {

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

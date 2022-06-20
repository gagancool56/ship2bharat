$(".gen-paylink").on("click", function () {
	contactno = $("#contact").val();
	var formdata = new FormData($(".payment")[0]);
	for (var pair of formdata.entries()) {
		if (pair[1] == "" || typeof pair[1] == "undefined") {
			swal(
				"Aww Snap!",
				pair[0].charAt(0).toUpperCase() + pair[0].slice(1) + " can't be blank!",
				"error"
			);
			return;
		}
	}

	if (contactno.length < 10) {
		swal("Aww Snap!", "Contact no should be 10 digits only!", "error");
		return;
	}
	$(this).text("Loading....").prop("disabled", true);

	$.ajax({
		url: site_url + "gen-payment-link",
		type: "POST",
		data: formdata,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			if (response.data.status == "created") {
				$(".gen-paylink").text("Generate Payment Link").prop("disabled", false);
				swal(
					"Good job!",
					"Payment Link has been sent successfully!!",
					"success"
				).then((_) => {
					location.reload();
				});
			} else {
				$(".gen-paylink").text("Generate Payment Link").prop("disabled", false);
				swal("Awww snap!", "Something went wrong!", "error");
			}
		},
	});
});

$("#contact").on("keyup keydown", function (e) {
	// console.log(e.which);
	if (e.which == "8" || e.which == "46" || e.which == "37" || e.which == "39" || e.which == "9") {
		return true;
	}

	len = $(this).val().length;
	if (len >= 10) {
		return false;
	}
});

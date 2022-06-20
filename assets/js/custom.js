$("#contact-us").on("submit", function (e) {
	e.preventDefault();
	$("#contact-submit-btn").text("Loading....").prop("disabled", true);
	var formdata = new FormData($(this)[0]);
	$.ajax({
		url: site_url + "contact-us",
		type: "POST",
		data: formdata,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (data) {
			$("#contact-submit-btn").text("Send Message").prop("disabled", false);
			console.log(data);
			if (!data.success) {
				if (data.errr != "undefined") {
					$.each(data.error, function (key, val) {
						$("#" + key).html(val);
					});
				} else if (data.msg != "") {
					swal(data.title, data.msg, data.icon);
				}
			} else {
				console.log("sdjflksjdflk");
				swal(data.title, data.msg, data.icon).then((_) => {
					$("#contact-us")[0].reset();
					location.reload();
				});
			}
		},
	});
});

setInterval(() => {
	$(".auto-remove").remove();
}, 5000);


// Removing the #from url.
$(function () {
	history.replaceState({}, document.title, window.location.href.split("#")[0]);
});

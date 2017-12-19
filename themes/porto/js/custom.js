
$(document).ready(function(){
	$("#save-akun, #save-info-dasar, #save-pendidikan, #save-keluarga").hide();
	$("#edit-akun, #edit-info-dasar, #edit-pendidikan, #edit-keluarga").show();

	$("#edit-akun").click(function(){

		$("#akun input").removeAttr("disabled");

		$("#save-akun").show();
		$("#edit-akun").hide();

	});

	$("#save-akun").click(function(){

		//$("#akun input").attr("disabled", "disabled");

		$("#save-akun").hide();
		$("#edit-akun").show();

	});

	$("#edit-info-dasar").click(function(){

		$("#info input").removeAttr("disabled");

		$("#save-info-dasar").show();
		$("#edit-info-dasar").hide();

	});

	$("#save-info-dasar").click(function(){

		//$("#info input").attr("disabled", "disabled");

		$("#save-info-dasar").hide();
		$("#edit-info-dasar").show();

	});

	$("#edit-pendidikan").click(function(){

		$("#pendidikan input").removeAttr("disabled");

		$("#save-pendidikan").show();
		$("#edit-pendidikan").hide();

	});

	$("#save-pendidikan").click(function(){

		//$("#pendidikan input").attr("disabled", "disabled");

		$("#save-pendidikan").hide();
		$("#edit-pendidikan").show();

	});

	$("#edit-keluarga").click(function(){

		$("#keluarga input").removeAttr("disabled");

		$("#save-keluarga").show();
		$("#edit-keluarga").hide();

	});

	$("#save-keluarga").click(function(){

		//$("#keluarga input").attr("disabled", "disabled");

		$("#save-keluarga").hide();
		$("#edit-keluarga").show();

	});


});

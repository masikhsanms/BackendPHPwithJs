$(document).ready(function() {

// tambah user

$("#btnTambah").click(function(e){
	e.preventDefault();

	var form_action = $("#create-user").find("form").attr("action");
	var nama 		= $("#create-user").find("#nama").val();
	var kategori	= $("#create-user").find("#kategori").val();

	if (nama !='' && kategori) 
	{
		$.ajax({
			dataType 	: "JSON",
			type 		: "POST",
			url 		: url + form_action,
			data 		: {nama:nama, id_kategori:kategori}
		}).done(function(){
			$("#create-user").find("#nama").val('');
			$("#create-user").find("#nama").val('');

			$(".modal").modal('hide');
			alert("data berhasil disimpan");
		})
	}
});

});
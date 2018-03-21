var simpan_method;

function data_edit(button)
{
	simpan_method = 'update';

	$("#form")[0].reset();
	$("#modal_form").modal('show');
	$(".modal-title").text("Data Edit");

	var id = parseInt(button.value);

	$.ajax({
		type : "GET",
		url  : "halaman/edit_item.php?id="+id,
		dataType : "JSON",
		success : function(data)
		{
          $('#id').val(data.id);
          $('#nama').val(data.nama);
          $('#kategori').val(data.id_kategori);
          $('#stok').val(data.stok);

		},
		error : function(jqXHR, textStatus, errorThrown)
        {
          alert('Edit data gagal');
          // console.log('Error response : '+jqXHR.responseText);
        }
	})

}

function data_simpan()
  {
    //ajax database
    $.ajax
    ({
      url   : "halaman/update_inventori.php",
      type  : "POST",
      data  : $('#form').serialize(),
      dataType : "JSON",
      success : function(data)
      {
        console.log(data);

        $('#modal_form').modal('hide');
        location.reload();
      },
      error : function (jqXHR , textStatus, errorThrown)
      {
        alert('Tambah atau update gagal');
        // console.log(jqXHR);
      }
    })
  }
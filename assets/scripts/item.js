  // $(function () {
  //  $('#tabel_item').DataTable();
  // });


var simpan_method;

  function data_tambah()
  {
    simpan_method = 'tambah';
    $('#form')[0].reset();
    $('#modal_form').modal('show');
    $('.modal-title').text('Tambah Data Barang');
  }

  function data_simpan()
  {
    var url;
    if (simpan_method == 'tambah') 
      {
        url = 'halaman/tambah_item.php';  
      }
    else
      {
        url = 'halaman/update_item.php'; 
      }

    //ajax database
    $.ajax
    ({
      url   : url,
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

  function data_edit(button)
  {
    // console.log(id);
    // var id = document.getElementById("editId").value;

    simpan_method = 'update';
    $('#form')[0].reset();
    $('#modal_form').modal('show');
    $('.modal-title').text('Data Edit Item');

    var id = parseInt(button.value);

    // var tr = $(el).closest("tr");
    // var id = $(el).attr('value');
    // var kategori = $(this).data('kategori');

   
    // $("#form input[name='id']").val(id);
    // $("#form #nama").val(tr.find("td:eq(1)").text());
    // $("#form #kategori").val(find("td"));

    // if(kategori == 'atk'){
    //   document.getElementById("kategori").selectedIndex = 1;
    // }else if (kategori == '') {}
     //Option 10
      
    // $("#form #kategori").val(kategori);



       // ajax load
      $.ajax({
        url : "halaman/edit_item.php?id="+id,
        type : "GET",
        dataType : "JSON",
        success : function(data)
        {
          // console.log('igiugiu');
          console.log(data);
          $('#id').val(data.id);
          $('#nama').val(data.nama);
          $('#kategori').val(data.id_kategori);

        },
        error : function(jqXHR, textStatus, errorThrown)
        {
          alert('Edit data gagal');
          // console.log('Error response : '+jqXHR.responseText);
        }
      })

  }

  function data_hapus(button)
  {
    var id = parseInt(button.value);

      if (confirm("Apakah anda Yakin ingin Menghapus")) 
      {
        $.ajax({
          url : "halaman/delete.php/",
          type : "POST",
          data : {id:id},
          dataType : "JSON",
          success : function(data)
          {
            console.log(data);
            location.reload();
          },
          error : function(jqXHR, textStatus, errorThrown)
          {
            alert("Hapus Data Gagal");
          }
        })
      }
  }



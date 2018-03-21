  var simpan_method;

  function data_tambah()
  {
  	simpan_method = 'tambah';
  	$('#form')[0].reset();
  	$('#modal_form').modal('show');
  	$('.modal-title').text('Tambah Data User');
  }

  function data_simpan()
  {
    var url;

    if (simpan_method == 'tambah') 
      {
        url = 'halaman/tambah_user.php';
      

              var password = $("#password").val();
              var confirmPassword = $("#passwordkonfirmasi").val();
              
              if (password != confirmPassword) 
                {
                  alert("Password Tidak Sama");
                  return false;
                }else {
          $.ajax({
          url : url,
          type : "POST",
          data : $('#form').serialize(),
          dataType : "JSON",
          success : function(data)
          {
        

                  $('#modal_form').modal('hide');
                  location.reload();
                  // console.log(data);
                  
                },
                error : function(jqXHR, textStatus, errorThrown)
                {
                  alert("Tambah atau Edit Data Gagal atau Username Telah Digunakan")
                }

        })
                }
         

      }
    else
      {
        url = 'halaman/update_user.php';

          $.ajax({
          url : url,
          type : "POST",
          data : $('#form').serialize(),
          dataType : "JSON",
          success : function(data)
          {    
            console.log(data);

            $('#modal_form').modal('hide');
            location.reload();
          },
          error : function(jqXHR, textStatus, errorThrown)
          {
            alert("Tambah atau Edit Data Gagal atau Username Telah Digunakan")
          }

        })
      }
  }

 function data_edit(button)
  {

    simpan_method = 'update';

    $('#form')[0].reset();
    $('#modal_form').modal('show');
    $('.modal-title').text('Data Edit Item');

    var id = parseInt(button.value);

       // ajax load
      $.ajax({
        url : "halaman/edit_user.php?id="+id,
        type : "GET",
        dataType : "JSON",
        success : function(data)
        {
          // console.log('igiugiu');
          console.log(data);
          $('#id').val(data.id);
          $('#username').val(data.username);
          // $('#password').val(data.password);

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
          url : "halaman/delete_user.php/",
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
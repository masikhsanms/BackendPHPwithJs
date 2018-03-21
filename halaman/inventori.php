  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-header">
              <!-- <button class="btn btn-success pull-right" onclick="data_tambah()"><i class="glyphicon glyphicon-plus"></i>Tambah Data</button> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>kategori</th>
                  <th>stok</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
              <?php 
                include 'koneksi.php';
                $sql = "SELECT tb_item.id, tb_item.nama, tb_kategori.kategori,tb_item.stok FROM tb_item INNER JOIN tb_kategori ON tb_kategori.id = tb_item.id_kategori";
                $hasil = mysqli_query($konek, $sql);

                $no =1;
                foreach ($hasil as $data) { 
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama'] ?></td>
                  <td><?php echo $data['kategori']; ?></td>
                  <td><?php echo $data['stok']; ?></td>
                  <td>
                    <button class="btn btn-success" id="btnEdit" value="<?php echo $data['id'] ?>" onclick="data_edit(this)"><i class="glyphicon glyphicon-pencil"></i></button>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!--  pop up tambah dan edit item     -->

<div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Edit Data</h3>
      </div>
      <div class="modal-body form">

          <!-- form start -->
            
            <form id="form" class="form-horizontal" action="#">
              <input type="hidden" value="" id="id" name="id"/>
              <div class="box-body">
              
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input id="nama" name="nama" type="text" class="form-control namatxt" placeholder="Nama Item" autocomplete="section-blue shipping address-level2" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">kategori</label>

                  <div class="col-sm-10">
                    <select class="form-control" id="kategori" name="kategori" disabled>
                    <option value="">Pilih Kategori</option>
                    

                    <?php 
                      include 'koneksi.php';

                      $sql = mysqli_query($konek, "SELECT * FROM tb_kategori");
                      foreach ($sql as $row) {
                    
                     ?>

                    <option value="<?php echo $row['id'] ?>"><?php echo $row['kategori']; ?></option>
                    <?php } ?>
                    
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input id="stok" name="stok" type="number" class="form-control namatxt" placeholder="Stok" autocomplete="section-blue shipping address-level2" required>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" id="btnSimpan" onclick="data_simpan();" class="btn btn-info pull-right" >Simpan</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!--  end - pop up tambah dan edit item     -->
<script src="assets/scripts/inventori.js"></script>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-header">
              <button class="btn btn-success pull-right" onclick="data_tambah()"><i class="glyphicon glyphicon-plus"></i>Tambah Data</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
              <?php 
                include 'koneksi.php';

                $sql = mysqli_query($konek,"SELECT * FROM tb_user WHERE id");
                $no = 1;
                foreach ($sql as $data) {

               ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['username'] ?></td>
                  <td>
                    <button class="btn btn-success" value="<?php echo $data['id'] ?>" onclick="data_edit(this)"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-danger" value="<?php echo $data['id'] ?>" onclick="data_hapus(this)"><i class="glyphicon glyphicon-remove"></i></button>
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
        <h3 class="modal-title">Tambah Data</h3>
      </div>
      <div class="modal-body form">

          <!-- form start -->
            
            <form id="form" class="form-horizontal" action="#">
              <input type="hidden" value="" id="id" name="id"/>
              <div class="box-body">
              
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input id="username" name="username" type="text" class="form-control namatxt" placeholder="Masukan Username" autocomplete="section-blue shipping address-level2" required>
                  </div>
                </div>
               
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input id="password" name="password" type="text" class="form-control namatxt" placeholder="Masukan Password" autocomplete="section-blue shipping address-level2" required>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">Password Konfirmasi</label>

                  <div class="col-sm-10">
                    <input id="passwordkonfirmasi" name="passwordkonfirmasi" type="password" class="form-control namatxt" placeholder="Masukan Password" autocomplete="section-blue shipping address-level2" required>
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
<script src="assets/scripts/user.js"></script>


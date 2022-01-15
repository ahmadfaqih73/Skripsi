 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Fuzzyfikasi</h1>
          <?php echo form_open_multipart('Fuzzyfikasi/prosesfuzifikasi') ?>
          <form method="post">

            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
              <!-- <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?> -->
            </div>

            <div class="form-group">
              <label>ipk</label>
              <input type="text" name="ipk" class="form-control" placeholder="ipk">
              <!-- <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?> -->
            </div>
            <div class="form-group">
              <label>Itaq</label>
              <input type="text" name="itaq" class="form-control" placeholder="itaq">

            </div>
            <div class="form-group">
              <label>Taat Pancasila</label>
              <input type="text" name="taat" class="form-control" placeholder="taat">

            </div>
            <div class="form-group">
              <label>visi_misi</label>
              <input type="text" name="visi" class="form-control" placeholder="visi">
            </div>


            <input type="submit" name="hitung" class="btn btn-primary float-right">
            <button type="button" class="btn btn-success" onclick="location.reload();">Refresh</button>
          </form>
          <?php echo form_close() ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Variable</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <?php echo form_open_multipart('View_user/tambah_variable') ?>
            <form class="surat_out" method="POST">
                <div class="form-group">
                    <label>variabel</label>
                    <input type="text" name="variabel" class="form-control" placeholder="Full name">
                    <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="username">
                    <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password">
                    <?= form_error('Password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Repassword</label>
                    <input type="password" name="repassword" class="form-control" placeholder="Retype password">
                    <?= form_error('Repassword', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>



                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                <button type="submit" class="btn btn-success float-right">Tambah data</button>

            </form>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
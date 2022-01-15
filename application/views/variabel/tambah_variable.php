<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Us</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <?php echo form_open_multipart('Data_variable/add_variabel') ?>
            <form class="surat_out" method="POST">
                <div class="form-group">
                    <label for="varchar">Variabel IPK</label>

                    <select class="form-control" name="ipk">
                        <?php foreach ($status_ipk as $key) : ?>
                            <option value="<?php echo $key->prioritas ?>"><?php echo $key->prioritas ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                <button type="submit" class="btn btn-success float-right">Tambah data</button>

            </form>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
    var_dump($kategori);
    ?>

</div>
<!-- /.content-wrapper -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Variable</h1>

                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>Data_variable/view_add" class="btn btn-primary">Tambah data</a>
                    </div>
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nama Variabel</th>
                                <th>kategori</th>
                                <th>prioritas</th>
                                <th>Nilai Minimum</th>
                                <th>Nilai Maksimum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($variables as $v) {
                            ?>
                                <tr>
                                    <td><?php echo ++$no ?></td>
                                    <td><?php echo $v['nama_variabel'] ?></td>
                                    <td><?php echo $v['kategori'] ?></td>
                                    <td><?php echo $v['prioritas'] ?></td>
                                    <td><?php echo $v['nilai_minimum'] ?></td>
                                    <td><?php echo $v['nilai_maksimum'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>


                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
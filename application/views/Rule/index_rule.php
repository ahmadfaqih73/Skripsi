<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Rule</h1>

                        <div class="col-md-6">
                            <a href="<?= base_url(); ?>Rules/addrule" class="btn btn-primary">Tambah data</a>
                        </div>


                        <table class="table table-bordered table-striped" id="mytable">
                            <thead>
                                <tr>
                                    <th width="80px">No</th>
                                    <th>Ipk</th>
                                    <th>Itaq</th>
                                    <th>Taat Pancasila</th>
                                    <th>Visi Misi</th>
                                    <th>Hasil</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($rules as $r) {
                                ?>
                                    <tr>
                                        <td><?php echo ++$no ?></td>
                                        <td><?php echo $r['IPK'] ?></td>
                                        <td><?php echo $r['Itaq'] ?></td>
                                        <td><?php echo $r['Taat_pancasila'] ?></td>
                                        <td><?php echo $r['Visi_misi'] ?></td>
                                        <td><?php echo $r['hasil'] ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            <?php endif; ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
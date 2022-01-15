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

            <?php echo form_open_multipart('Rules/tambahrule') ?>
            <form class="Rules" method="POST">

                <div class="form-group">
                    <label for="varchar">ipk</label>

                    <select class="form-control" name="ipk">
                        <?php foreach ($Status as $key) : ?>
                            <option value="<?php echo $key->Status ?>"><?php echo $key->Status ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="varchar">Taqwa dan Beriman</label>

                    <select class="form-control" name="itaq">
                        <?php foreach ($Status as $key) : ?>
                            <option value="<?php echo $key->Status ?>"><?php echo $key->Status ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="varchar">Taat Pada Pancasila dan UUD</label>

                    <select class="form-control" name="taat">
                        <?php foreach ($Status as $key) : ?>
                            <option value="<?php echo $key->Status ?>"><?php echo $key->Status ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="varchar">Visi dan Misi</label>

                    <select class="form-control" name="visi">
                        <?php foreach ($Status as $key) : ?>
                            <option value="<?php echo $key->Status ?>"><?php echo $key->Status ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="varchar">Hasil</label>

                    <select class="form-control" name="hasil">
                        <?php foreach ($nama_variabel as $key) : ?>
                            <option value="<?php echo $key->nama_variabel ?>"><?php echo $key->nama_variabel ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="varchar">Hasil</label>

                      <select class="form-control" id="selectvariabel" autofocus="true" name="nama_variabel">
                </div> -->
                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                <button type="submit" class="btn btn-success float-right">Tambah data</button>

            </form>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $('#selectvariabel').select2({
        theme: 'bootstrap4',
        placeholder: 'Status',
        ajax: {
            url: '<?php echo base_url('Rules/getstatushasil') ?>',
            type: 'POST',
            dataType: 'json',
            data: params => ({
                hasil: params.term
            }),
            processResults: data => ({
                results: data
            }),
            cache: true
        }
    });
</script>
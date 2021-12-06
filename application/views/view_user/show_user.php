<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->

                <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>password</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($users as $user) {
                        ?>
                            <tr>
                                <td><?php echo ++$no ?></td>
                                <td><?php echo $user['fullname'] ?></td>
                                <td><?php echo $user['username'] ?></td>
                                <td><?php echo $user['password'] ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>







            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Perkiraan Akuntansi
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>No. Identitas</th>
                                            <th>No Telp</th>
                                            <th>Alamat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arrayData as $key => $value) { ?>
                                    <tr>
                                            <td><?php echo $value->kode_pelanggan ?></td>
                                            <td><?php echo $value->nama_pelanggan?> </td>
                                            <td><?php echo $value->no_identitas?> </td>
                                            <td><?php echo $value->no_telp?> </td>
                                            <td><?php echo $value->alamat?> </td>
                                            <td><a href="<?php echo base_url() ?>pelanggan/delete_input?kode_pelanggan=<?php echo $value->kode_pelanggan ?> ">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->  
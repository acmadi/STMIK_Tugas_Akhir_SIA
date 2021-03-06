

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
                            Laporan Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Transaksi</th>
                                            <th>No Faktur</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Nama Barang</th>
                                            <th>Total Harga Transaksi</th>
                                            <th>Kode Pelanggan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arrayData as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value->tanggal ?></td>
                                        <td><?php echo $value->id ?></td>
                                        <td><?php echo $value->kode_barang ?></td>
                                        <td><?php echo $value->jumlah ?></td>
                                        <td><?php echo $value->nama_barang ?></td>
                                        <td><?php echo $value->total_harga ?></td>
                                        <td><?php echo $value->kode_pelanggan ?></td>
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
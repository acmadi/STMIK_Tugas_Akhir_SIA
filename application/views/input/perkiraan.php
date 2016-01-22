

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Perkiraan Akuntansi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="<?php echo base_url() ?>kode_perkiraan/postPerkiraan ">
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" name="kode" placeholder="Kode Perkiraan Akuntansi">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Perkiraan</label>
                                            <input class="form-control" name="perkiraan" placeholder="Nama Perkiraan Akuntansi">
                                        </div>
                                        <div class="form-group">
                                            <label>Saldo Normal</label>
                                            <select id="" name="saldoNormal" class="form-control">
                                                <option value="">...</option>
                                                <option value="D">Debit</option>
                                                <option value="K">Kredit</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="padding-rigth">
                                            <button type="submit" class="btn btn-default">Input</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>  
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Perkiraan Akuntansi
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Perkiraan</th>
                                            <th>Nama Perkiraan</th>
                                            <th>Saldo Normal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arrayData as $key => $value) { ?>
                                    <tr>
                                            <td><?php echo $value->kode ?></td>
                                            <td><?php echo $value->perkiraan?> </td>
                                            <td><?php echo $value->saldoNormal ?></td>
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
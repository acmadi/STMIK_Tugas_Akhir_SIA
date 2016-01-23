

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-3 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Perkiraan Akuntansi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>pelanggan/post_input ">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Kode Pelanggan</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="kode_pelanggan"  placeholder="Kode Pelanggan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Nama Pelanggan</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan">
                                            </div>
                                        </div>
                                        <div class="padding-right ">
                                            <button type="submit" class="btn btn-success pull-right col-md-3">Input</button>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->  
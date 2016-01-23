

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
                                    <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>barang/post_input ">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Kode</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="kode_barang"  id="kode_barang" placeholder="Kode barang">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Nama Barang</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Jumlah Barang Masuk</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Harga Satuan</label>
                                            <div class="col-md-8">
                                                <input class="form-control" name="harga_satuan" id="harga_satuan" placeholder="Harga Barang">
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

        <script>

        $('#kode_barang').change(function(){
            $kode_barang = $('#kode_barang').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url().'barang/ajax'?>", 
                data: {'data':$kode_barang},
                dataType: "json",  
                success: 
                  function(data){
                    $.each( data, function( key, val ) {
                        $('#nama_barang').val(val.nama_barang);
                        $('#harga_satuan').val(val.harga_satuan);
                    });
            });
        });</script>
        <!-- /#page-wrapper -->  
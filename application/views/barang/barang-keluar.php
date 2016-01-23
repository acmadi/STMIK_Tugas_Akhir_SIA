

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
                                    <form role="form" method="post" class="form-horizontal" action="<?php echo base_url() ?>barang/post_keluar ">
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Kode</label>
                                            <div class="col-md-8">
                                                <select name="barang_id" class="form-control" id="kode_barang">
                                                    <option value=""></option>
                                                    <?php foreach($arrayData as $barang){?>
                                                    <option value="<?php echo $barang->kode_barang ?>"><?php echo $barang->kode_barang ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="hide">
                                            <div class="form-group">
                                                <label  class="control-label col-md-4">Nama Barang</label>
                                                <div class="col-md-8">
                                                    <input disabled="true" class="form-control" name="nama_barang" id="nama_barang" value="" placeholder="Nama Barang">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label col-md-4">Jumlah Barang Keluar</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="jumlah" value="" id="barang_keluar" placeholder="Jumlah Barang">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="hidden" class="form-control" name="jumlah_barang" id="jumlah_barang" value="" placeholder="Jumlah Barang">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Pelanggan</label>
                                                <div class="col-md-8">
                                                    <select name="kode_pelanggan" class="form-control">
                                                        <option value=""></option>
                                                        <?php foreach($arrayData2 as $pelanggan){?>
                                                        <option value="<?php echo $pelanggan->kode_pelanggan ?>"><?php echo $pelanggan->kode_pelanggan.'-'.$pelanggan->nama_pelanggan ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label col-md-4">Harga Satuan</label>
                                                <div class="col-md-8">
                                                    <input disabled="true" class="form-control" name="harga_satuan" id="harga_satuan" value="" placeholder="Harga Barang">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label col-md-4">Harga Total</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" name="total_harga" id="total_harga" placeholder="Harga Barang">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="padding-rigth">
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
                        $('#jumlah_barang').val(val.jumlah_barang);
                        $('#harga_satuan').val(val.harga_satuan);
                        $('#barang_keluar').val("");
                        $('#total_harga').val("");
                    });
                   
                    $('div').removeClass('hide');
                  }
            });
        });

        $('#barang_keluar').change(function(){
            if ($('#jumlah_barang').val() < $('#barang_keluar').val()) {
                alert("stok tidak cukup");
            };
            return $('#total_harga').val($("#harga_satuan").val() * $('#barang_keluar').val());
        })
        </script>
        <!-- /#page-wrapper -->  
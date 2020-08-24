<!DOCTYPE html>
<html>
<head>
	<title>Point Of Sale</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="col-md-12 col-md-offset-1">
		<hr/>
			<form class="form-horizontal">
				<div class="form-group">
                    <label class="control-label col-xs-3" >Kode Barang</label>
                    <div class="col-xs-9">
                        <!-- <input name="kode" id="kode" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;"> -->
                        <select name="kode" id="kode" class="form-control" style="width:335px;">
                            
                            <?php foreach ($rekening as $key => $value) {
                                echo "<option value=$value->kode>$value->atas_nama </option>";
                            } ?>
                            
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >Nama Barang</label>
                    <div class="col-xs-9">
                        <input name="atas_nama" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >Alias</label>
                    <div class="col-xs-9">
                        <input name="alias" class="form-control" type="text" placeholder="Harga..." style="width:335px;" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >No rekening</label>
                    <div class="col-xs-9">
                        <input name="norek" class="form-control" type="text" placeholder="Satuan..." style="width:335px;" readonly>
                    </div>
                </div>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#kode').on('input',function(){
                
                var kode=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/transfer/get_rekening')?>",
                    dataType : "JSON",
                    data : {kode: kode},
                    cache:false,
                    success: function(data){
                        $.each(data,function(kode, atas_nama, alias, norek){
                            $('[name="atas_nama"]').val(data.atas_nama);
                            $('[name="alias"]').val(data.alias);
                            $('[name="norek"]').val(data.norek);
                            
                        });                        
                    }
                });
                return false;
           });

		});
	</script>
</body>
</html>
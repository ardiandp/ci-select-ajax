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
                    <label class="control-label col-xs-3" >Nik</label>
                    <div class="col-xs-9">
                        <!-- <input name="kode" id="kode" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;"> -->
                     <select name="nik" id="nik" class="form-control" style="width:335px;">
                     	<?php foreach ($bpjs as $key => $value) {
                     		echo "<option value=$value->nik>$value->nama </option>";
                     	}?>
                     	
                     </select>
                      </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >No Akun</label>
                    <div class="col-xs-9">
                        <input name="no_akun" class="form-control" type="text" placeholder="No Akun" style="width:335px;" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" >Nama Peserta</label>
                    <div class="col-xs-9">
                        <input name="nama" class="form-control" type="text" placeholder="Nama Peserta" style="width:335px;" readonly>
                    </div>
                </div>

                </form>
		</div>
	</div>


	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#nik').on('input',function(){
                
                var kode=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/bpjs/get_peserta')?>",
                    dataType : "JSON",
                    data : {nik: nik},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nik, no_akun, nama){
                            $('[name="no_akun"]').val(data.no_akun);
                            $('[name="nama"]').val(data.nama);
                                                     
                        });                        
                    }
                });
                return false;
           });

		});
	</script>
</body>
</html>
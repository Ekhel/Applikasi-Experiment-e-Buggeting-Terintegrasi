<div class="container-fluid">
						<br/>
						<div class="row">
							<div class="col-md-12">
								<?php echo $this->session->flashdata('msg');?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<p><i class="glyphicon glyphicon-plus"></i> Form Input Rab Belanja </p>
									</div>
									<div class="panel-body">
									<?php foreach($bel as $d){ ?>
									
									<!--<p> <?php echo $d->id_rek ?></p>!-->
									<hr/>
									<br/>
									<form method="post" action="<?php echo base_url('Belanja_langsung/SimpanRab'); ?>">
										<div class="form-horizontal">
											<div class="form-group">
										        <label class="col-sm-2 control-label">SSH </label>
										        <div class="col-sm-6">
										          <div class="input-group">
											          <input type="text" name="ssh" id="xnama" class="form-control" placeholder="SSH" readonly="true">
											          
											          <div class="input-group-btn">
											            <button data-toggle="modal" data-target="#modal_barang" type="button" class="btn btn-primary btn-sm"><i class="fa fa-folder-open-o"></i></button>
											          </div>
											        </div>
											        <input type="hidden" name="id_rek" id="id_rek" value="<?php echo $d->id_rek ?>" readonly="true">
										        	<input type="hidden" name="id_renja" id="id_renja" value="<?php echo $d->id_renja ?>" readonly="true">
										        </div>
										    </div>											
											

										    <div class="form-group">
										        <label class="col-sm-2 control-label">Volume :</label>
										        <div class="col-sm-6">
										            <input type="text" name="vol" id="vol" class="form-control">
										            
										        </div>
										    </div>
										    <div class="form-group">
										        <label class="col-sm-2 control-label">Satuan :</label>
										        
										        <div class="col-sm-6">
										        			        	
										            <input type="text" name="satuan" id="xsatuan" value="" readonly="true">				        	
										        </div>
										    </div>
										    <div class="form-group">
										        <label class="col-sm-2 control-label">Harga Satuan :</label>
										        
										        <div class="col-sm-6">
										        			        	
										            <input type="text" placeholder="Harga Satuan" readonly="true" name="harga" id="xharga" class="form-control" value="">				        	
										        </div>
										    </div>
										    <hr/>
										     <div class="form-group">
										        <label class="col-sm-2 control-label">Jumlah :</label>
										        <div class="col-sm-8">
										       		
										            <input type="text" placeholder="Jumlah" name="jumlah" id="jumlah" class="form-control">
										            <br/>
										            <button type="submit" title="Simpan" class="btn btn-primary xtooltip"><i class="fa fa-save fa-fw"></i> </button>
										            <a href="" class="btn btn-default xtooltip" title="kembali ke daftar Akun Rekenig"><i class="fa fa-backward"></i></a>	            
										        </div>
										    </div>
										    
										</div>
								            
								    </form>
								    <?php } ?>
								    <hr/>
								    
									</div>
								</div>
								<!-- PAGE CONTENT BEGINS -->
							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
		</div>
</div>




<div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-hdd-o fa-fw"></i>Standart Satuan Harga</h4>
          </div>
          <div class="modal-body">
            <div class="mailbox-messages table-responsive">
              <table class="table table-bordered" id="xssh">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Satuan</th>
                        <th>Harga Satuan</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 0;
                    foreach($ssh->result() as $r){
                        $no++;
                		?>
                    <tr onclick="pilih('<?php echo $r->nama ?>','<?php echo $r->satuan ?>','<?php echo $r->harga ?>')" data-dismiss="modal">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $r->nama ?></td>
                        <td><?php echo $r->satuan ?></td>
                        <td><?php echo $r->harga ?></td>                       
                        
                    </tr>
                <?php
                    }
                ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default btn-sm" type="button" data-dismiss="modal"><i class="fa fa-close fa-fw"></i> Close</button>
          </div>
      </div>
  </div>
</div>



<script type="text/javascript">
  $(function () {
    $('#xssh').css('cursor','pointer');
    $("#xssh").dataTable({
      "iDisplayLength": 10,
      "processing": true,
          "serverSide": true,
    });
        
    $('.xtooltip').tooltip(); 
  });

  

  function pilih(nama,satuan,harga){
    $("#xnama").val(nama);
    $("#xsatuan").val(satuan);
    $("#xharga").val(harga);
  }

</script>
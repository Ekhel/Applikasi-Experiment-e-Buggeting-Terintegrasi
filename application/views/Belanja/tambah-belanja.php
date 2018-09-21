 
<script type="text/javascript">
	$(document).ready(function() { 
    	$('#dt_belanja').addClass('active');
	});
</script>


<div class="content col-md-12">

<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<br/>
						<div class="row">
							<div class="col-md-12">
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<p><i class="glyphicon glyphicon-plus"></i> Tambah Belanja </p>
									</div>
									<div class="panel-body">
									<?php echo $this->session->flashdata('msg');?>
									<hr/>
									<br/>
									<form method="post" action="<?php echo base_url('Belanja_langsung/SimpanBelanja'); ?>">
										<div class="form-horizontal">
											
											<div class="form-group">
										        <label class="col-sm-2 control-label">program :</label>
										        
										        <div class="col-sm-6">		        	
										            <input type="text" name="program" id="program" value="<?php echo $hasil['program']?>" readonly="true">
										            <input type="hidden" name="id_rek" id="id_rek" readonly="true">						        	
										    	<input type="hidden" name="id_renja" id="id_renja" value="<?php echo $hasil['id_mus_forum_skpd']?>" readonly="true">
										        </div>
										    </div>

										    <div class="form-group">
										        <label class="col-sm-2 control-label">Kegiatan :</label>
										        <div class="col-sm-6">
										            <input type="text" name="kegiatan" id="kegiatan" value="<?php echo $hasil['kegiatan']?>" readonly="true">
										            <!--<h4><strong> <?php echo $hasil['kegiatan']?></strong></h4> !-->
										        </div>
										    </div>
										    <hr/>
										     <div class="form-group">
										        <label class="col-sm-2 control-label">Belanja</label>
										        <div class="col-sm-6">
										          <div class="input-group">
											          <input type="text" name="uraian" id="xnama" class="form-control" placeholder="Uraian" readonly="true" autofocus onkeypress="return event.charCode == 8">
											          <div class="input-group-btn">
											            <button data-toggle="modal" data-target="#modal_barang" type="button" class="btn btn-primary btn-sm"><i class="fa fa-folder-open-o"></i></button>
											          </div>
											        </div>
										        </div>
										    </div>
										     <div class="form-group">
										        <label class="col-sm-2 control-label">Kode :</label>
										        <div class="col-sm-8">
										       		<input type="hidden" name="id_sub_akun_rek" id="xidsub" readonly="true" class="form-control">
										       		<input type="hidden" name="id_rek_belanja" id="xidrek" readonly="true" class="form-control">
										            <input type="text" placeholder="kode" readonly="true" name="kode" id="xkode" class="form-control" value="">
										            <br/>
										            <button type="submit" title="Simpan" class="btn btn-primary xtooltip"><i class="fa fa-save fa-fw"></i> </button>	            
										        </div>
										    </div>
										    
										</div>
								            
								    </form>
								    <hr/>
								    
								   <div class="row">
								   		<div id="view_belanja"> <?php $this->load->view('belanja/form_belanja_v') ?></div>
								   		
								   </div>
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
              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-hdd-o fa-fw"></i>Akun Rekening Belanja</h4>
          </div>
          <div class="modal-body">
            <div class="mailbox-messages table-responsive">
              <table class="table table-bordered" id="xbrg">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Bel</th>
                        <th>ID</th>
                        <th>kode</th>
                        <th>Akun Belanja</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 0;
                    foreach($sub_akun_belanja->result() as $r1){
                        $no++;
                		?>
                    <tr onclick="pilih('<?php echo $r1->kode_4 ?>','<?php echo $r1->sub_akun_rek ?>','<?php echo $r1->id_rek_belanja ?>','<?php echo $r1->id_sub_akun_rek ?>')" data-dismiss="modal">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $r1->id_rek_belanja ?></td>
                        <td><?php echo $r1->id_sub_akun_rek ?></td>
                        <td><?php echo $r1->kode_4 ?></td>
                        <td><?php echo $r1->sub_akun_rek ?></td>
                        
                        
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
//Active Menu Sidebars
$(document).ready(function() { 
    $('#Tambah_Belanja').addClass('active');
});
</script>

<script type="text/javascript">
  $(function () {
    $('#xbrg').css('cursor','pointer');
    $("#xbrg").dataTable({
      "iDisplayLength": 10,
      "processing": true,
          "serverSide": true,
    });
        
    $('.xtooltip').tooltip(); 
  });

  

  function pilih(kd,nm,idsub,idrek){
    $("#xkode").val(kd);
    $("#xnama").val(nm);
    $("#xidsub").val(idsub);
    $("#xidrek").val(idrek);
  }

  

  function saless(kd,nm){
    $("#kodesales").val(kd);
    $("#namasales").val(nm);
  }
</script>





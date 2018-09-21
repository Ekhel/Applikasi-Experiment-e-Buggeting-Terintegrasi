<div class="col-md-12">
		<br/>

		<table class="table table-bordered" id="xbelanja">
			
			<thead>
				<tr>
					<th>KODE</th>
					<th class="col-md-8">Uraian</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<tr>				
				<?php 
					foreach($bel1 as $b){
						?>
						
						<tr>
						<td><?php echo $b->kode ?></td>
						<td width="30%"><?php echo $b->uraian ?></td>
						<td class="text-center" width="10%">
                    		<button type="submit" class="delete xtooltip" id="<?php echo $b->id_rek?>" title="hapus"><i class="fa fa-trash"></i></button>
                		</td>						
						</tr>
						<!--<a href="<?php echo base_url() ?>Belanja_langsung/hapus_rek_belanja/<?php echo $b->id_rek ?> " onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="btn btn-default btn-xs xtooltip" title="Hapus"><i class="fa fa-trash"></i></a>!-->
					<?php
					}				
				?>			
			<tr>		
			</tbody>
			
		</table>

    
	</div>

  <!--<div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <p>Pagu</p>
        </div>
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-md-2"> Pagu</label>
              <input type="text" id="pagu" value="<?php echo number_format($hasil['apbd_dau']) ?>" readonly="true">
            </div>
          </div>
        <div class="form-horizontal">
          <div class="form-group">
            <label class="col-md-2"> Total</label>
              <input type="text" id="pagu" value="" readonly="true">
            </div>
          </div>
      </div>
    </div>
  </div>!-->

<script type="text/javascript">
  //$(function () {
    //$('#xbelanja').css('cursor','pointer');
    //$("#xbelanja").dataTable({
      //"iDisplayLength": 10,
      //"processing": true,
          "serverSide": true,
    //});
        
    //$('.xtooltip').tooltip(); 
  //});


  </script>

  <script>
  	$(document).on('click', '.delete', function (){  
           var id_rek = $(this).attr("id"); 
           if(confirm("Apakah Anda yakin untuk Menghapus Data ini?"))  
           {  
                $.ajax({  
                     url:"<?php echo base_url('Belanja_langsung/hapus_rek'); ?>",  
                     method:"POST",  
                     data:{id_rek:id_rek},  
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#xbelanja').tableBootstrap('refresh', {silent: true});  
                     }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      });  

  </script>

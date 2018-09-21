<div class="col-md-12">
		<br/>

		<table class="table table-bordered table-striped" id="xbelanja">
			
			<thead>
				<tr>
					<th rowspan="2" scope="rowgroup" class="text-center">KODE REKENING</th>
					<th rowspan="2" scope="rowgroup" class="text-center">URAIAN</th>
          <th colspan="3" scope="colgroup" class="text-center">RINCIAN PERHITUNGAN</th>
          <th rowspan="2" scope="rowgroup" class="text-center">JUMLAH</th>
					<th rowspan="2" scope="rowgroup" class="text-center"></th>
          <th rowspan="2" scope="rowgroup" class="text-center"></th>
				</tr>
        <tr class="small">
          <th class="text-center">Vol</th>
          <th class="text-center">Satuan</th>
          <th class="text-center">Harga</th>
        </tr>
			</thead>
			<tbody>
			<tr>				
				<?php 

          foreach($bel1 as $r1){
            echo "<tr>";
            echo "<td>";
            echo $r1->kode_1;
            echo "</td>";
            echo "<td>";
            echo $r1->jenis_belanja;
            echo "</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $r1->kode_2;
            echo "</td>";
            echo "<td><span class='col-xs-1'></span>";
            echo $r1->sub_jenis_belanja;
            echo "</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $r1->kode_3;
            echo "</td>";
            echo "<td><span class='col-xs-2'></span>";
            echo $r1->akun_rek_belanja;
            echo "</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $r1->kode;
            echo "</td>";
            echo "<td> <span class='col-xs-3'></span>";
            echo $r1->uraian;
            echo "</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td class='text-center'>";
            echo anchor('Belanja_langsung/Tambah_Rab/'.$r1->id_rek,
                                    '<i class="fa fa-plus-circle"></i>');
            echo "</td>";
            echo "</tr>";
            foreach ($rabb as $r2) {
              if($r2->id_rek==$r1->id_rek){
                echo "<tr>";
                echo "<td>";
                
                echo "</td>";
                echo "<td class='text-muted text-light'><span class='col-xs-3'></span> ---- ";
                echo $r2->ssh;
                echo "</td>";
                echo "<td class='text-center text-muted'>";
                echo $r2->vol; 
                echo "</td>";
                echo "<td class='text-center text-muted'>";
                echo $r2->satuan;
                echo "</td>";
                echo "<td class='text-center text-muted'>";
                echo number_format($r2->Harga);
                echo "</td>";
                echo "<td class='text-center text-muted'>";
                echo number_format($r2->jumlah);
                echo "</td>";
                echo "<td class='text-center'>";
                echo anchor('Belanja_langsung/Tambah_Rab/'.$r1->id_rek,
                                    '<i class="fa fa-edit"></i>');
                
                echo "</td>";
                echo "</td>";
                echo "<td class='text-center'>";
                echo anchor('Belanja_langsung/Tambah_Rab/'.$r1->id_rek,
                                    '<i class="fa fa-remove"></i>');
                echo "</td>";
                echo "</tr>";
              }
              
            }
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

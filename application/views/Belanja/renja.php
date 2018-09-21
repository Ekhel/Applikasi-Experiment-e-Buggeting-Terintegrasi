<br/>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
					<form class="" method="GET" name="" action="<?php echo base_url().'Belanja_langsung/renjalist'?>">
										<div class="col-md-12">
										<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"> Cari</button>
										<div id="demo" class="collapse">

										<div class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun RENJA </label>

									<div class="col-sm-9">
										<select name="tahun" id="form-field-1" required="required" class="col-xs-10 col-sm-5">
											<option value="">--- Pilih Tahun ---</option>
										<?php for ($i=2015; $i <=date(Y)+5 ; $i++) {
										echo "<option value='".$i."'>  ";
										echo $i;
										echo "</option>";
										} ?>
										</select>
									</div>
								</div>
								<br/>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Perangkat Daerah </label>

									<div class="col-sm-9">
										<select class="form-control" name="id_skpd" id="id_skpd">
													 <option value="">-- Pilih PD --</option>
													 <?php
													 foreach($opd as $op)
													 {
															?>
															<option value="<?php echo $op['id_skpd'];?>"><?php echo $op['skpd']; ?></option>
															<?php
													 }

													?>
									 </select>
										<br/>
										<input type="submit" value="Filter" name="" class="btn btn-primary">
										<hr/>
									</div>
								</div>
							</div>

										</div>

										</div>

							</form>
              				<!-- <pre><?php print_r($hasil2);?></pre> -->
							<div class="col-md-12">
								<div class="table-responsive" id="renja">
									<br/>
									<table class="table table-sm table-sm table-bordered">
										<thead>
											<tr class="small">
												<th class="text-center" rowspan="2" scope="rowgroup" class="text-center">KODE</th>
												<th rowspan="2" scope="rowgroup">Kegiatan</th>
												<th colspan="5" scope="colgroup" class="text-center">SUMBER DANA</th>

												<th class="text-center" rowspan="2" scope="rowgroup"></th>
												<th class="text-center" rowspan="2" scope="rowgroup"></th>
											</tr>
											<tr class="small">
												<th class="text-center"> DAU</th>
												<th class="text-center"> DAK</th>
												<th class="text-center"> OTSUS</th>
												<th class="text-center"> PROVINSI</th>
												<th class="text-center"> JUMLAH</th>
											<tr/>
										</thead>
                    					<tbody>
  												<tr class="small">
  													<?php
  												    $no = 1;
  												    $total_kegiatan = 0;
  												    
  												    foreach ($hasil2 as $p){
  														echo "<tr>";
  														echo "<th class='text-uppercase bg-danger' colspan='9' scope='colgroup'>";
  														echo $p['program'];
  														echo "</th>";
  														echo "</tr>";
                              							$id_program = $p['id_program'];
  														foreach ($hasil as $key){
  															if($key['id_program']==$id_program){
  																echo "<tr>";
  																echo "<td>";
  																echo $key['kode_urusan'] . "." .$key['kode_bidang'] . "." .$key['kode_program'] . "." .$key['kode_kegiatan'];
  																echo "</td>";
  																echo "<td>";
  																echo anchor('econtrolling/detail_renja/'.$key['id_mus_forum_skpd'],
  																	$key['kegiatan']);

  																echo "</td>";
  																echo "<td class='text-center'>";
  																echo number_format($key['apbd_dau']) ;
  																echo "</td>";
  																echo "<td class='text-center'>";
  																echo number_format($key['apbd_dak']);
  																echo "</td>";
  																echo "<td class='text-center'>";
  																echo number_format($key['apbd_otsus']);
  																echo "</td>";
  																echo "<td class='text-center'>";
  																echo number_format($key['apbd_provinsi']);
  																echo "</td>";
  																echo "<td>";
  																echo "";
  																echo "</td>";
  																//echo "<td>";
  																//echo $key['volume'];
  																//echo "</td>";
																//echo "<td>";
  																//echo $key['satuan'];
  																//echo "</td>";
  																echo "<td class='center'>";
  																echo anchor('Belanja_langsung/Tambah_Belanja/'.$key['id_mus_forum_skpd'],
  																	'<i class="fa fa-plus-circle"></i>');
  																
  																echo "</td>";
  																echo "<td>";
  																echo anchor('Belanja_langsung/akunrekbelanja/'.$key['id_mus_forum_skpd'],
  																	'<i class="fa fa-list"></i>');
  																echo "</td>";
  																echo "</tr>";
  															}
  														}
                            						}?>
  												</tr>
  												
  												<tr class="small">
  													<td colspan="4"> Total</td>
  													<td colspan="4"> 
  												</tr>
  											</tbody>
							</table>
		
	</div>

</div><!-- /.span -->

</div><!-- /.row -->
</div>
</div>
</div>

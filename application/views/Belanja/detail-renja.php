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
							<div class="col-xs-12">

								<div class="panel panel-default">
									<div class="panel-heading">
										<p><i class="glyphicon glyphicon-plus"></i> Detail Renja </p>
									</div>
									<div class="panel-body">
									
										<table class="table table-bordered">
											
											<?php
											echo "<tr>";
											echo "<td> PD </td>";
											echo "<td>";
											echo $hasil['kode_skpd'] . "." .$hasil['skpd'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Kode </td>";
											echo "<td>";
											echo $hasil['kode_urusan'] . "." .$hasil['kode_bidang'] . "." .$hasil['kode_program']. "." .$hasil['kode_kegiatan'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Program </td>";
											echo "<td>";
											echo $hasil['program'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Kegiatan </td>";
											echo "<td>";
											echo $hasil['kegiatan'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Prioritas Daerah </td>";
											echo "<td>";
											echo $hasil['prioritas_daerah'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Lokasi Kegiatan </td>";
											echo "<td>";
											echo $hasil['lokasi_kegiatan'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Indikator Keluaran Kegiatan </td>";
											echo "<td>";
											echo $hasil['indikator_keluarankegiatan_tolakukur'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Indikator Target Kegiatan </td>";
											echo "<td>";
											echo $hasil['indikator_keluarankegiatan_target'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Indikator Hasil Kegiatan </td>";
											echo "<td>";
											echo $hasil['indikator_hasilkegiatan_tolakukur'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> DAU </td>";
											echo "<td>";
											echo number_format($hasil['apbd_dau']);
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> DAK </td>";
											echo "<td>";
											echo number_format($hasil['apbd_dak']);
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> OTSUS </td>";
											echo "<td>";
											echo number_format($hasil['apbd_otsus']);
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Provinsi </td>";
											echo "<td>";
											echo number_format($hasil['apbd_provinsi']);
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Volume </td>";
											echo "<td>";
											echo $hasil['volume'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Satuan </td>";
											echo "<td>";
											echo $hasil['satuan'];
											echo "</td>";
											echo "</tr>";
											?>
											
										</table>

										<!-- tambah belanja -->
																				
									</div>
								</div>
								<!-- PAGE CONTENT BEGINS -->
								
								<div class="hr hr-18 dotted hr-double"></div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
</div>
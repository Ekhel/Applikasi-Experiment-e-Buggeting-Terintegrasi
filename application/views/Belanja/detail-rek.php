						<br/>
						<div class="row">
						<div class="container-fluid">
							<div class="col-md-12">

								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="pull-right">
											
										</div>
										<p><i class="glyphicon glyphicon-plus"></i> Detail Renja </p>
									</div>
									<div class="panel-body">
									
										<table class="table table-condensed table-striped">
											
											<?php
											echo "<tr>";
											echo "<td> Urusan Pemerintahan </td>";
											echo "<td>";
											echo $hasil['kode_urusan'];
											echo "</td>";
											echo "<td>";
											echo $hasil['urusan'] ;
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Bidang Pemerintahan </td>";
											echo "<td>";
											echo $hasil['kode_urusan'] . '.' .$hasil['kode_bidang'];
											echo "</td>";
											echo "<td>";
											echo $hasil['bidang'] ;
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Unit Organisasi </td>";
											echo "<td>";
											echo $hasil['kode_urusan'] . '.' .$hasil['kode_bidang'] . '.' .$hasil['kode_skpd'] ;
											echo "</td>";
											echo "<td>";
											echo $hasil['skpd'] ;
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											
											echo "<tr>";
											echo "<td> Program </td>";
											echo "<td>";
											echo $hasil['kode_urusan'] . '.' .$hasil['kode_bidang'] . '.' .$hasil['kode_skpd'] . '.' .$hasil['kode_program'] ;
											echo "</td>";
											echo "<td>";
											echo $hasil['program'];
											echo "</td>";
											echo "</tr>";
											echo "<tr>";
											echo "<td> Kegiatan </td>";
											echo "<td>";
											echo $hasil['kode_urusan'] . '.' .$hasil['kode_bidang'] . '.' .$hasil['kode_skpd'] . '.' .$hasil['kode_program'] . '.' .$hasil['kode_kegiatan'] ;
											echo "</td>";
											echo "<td>";
											echo $hasil['kegiatan'];
											echo "</td>";
											echo "</tr>";
											
											?>
											
										</table>

										<hr/>
										<P class="text-center"><strong>INDIKATOR & DAN TOLAK UKUR KINERJA BELANJA</strong> </P>
										<hr/>

										<table class="table table-bordered">
										<thead>
											<th class="text-center">INDIKATOR</th>
											<th class="text-center">TOLAK UKUR KINERJA</th>
											<th class="text-center">TARGET KINERJA</th>
										</thead>
										<tbody>
											<?php 
												echo "<tr>";
												echo "<td> MASUKAN </td>";
												echo "<td>";
												echo "Jumlah Dana";
												echo "</td>";
												echo "<td> Rp .";
												echo number_format($hasil['apbd_dau']);
												echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td> KELUARAN </td>";
												echo "<td>";
												echo $hasil['indikator_keluarankegiatan_tolakukur'];
												echo "</td>";
												echo "<td>";
												echo $hasil['indikator_keluarankegiatan_target'];
												echo "</td>";
												echo "</tr>";
												echo "<tr>";
												echo "<td> HASIL </td>";
												echo "<td>";
												echo $hasil['indikator_hasilkegiatan_tolakukur'];
												echo "</td>";
												echo "<td>";
												echo $hasil['indikator_keluarankegiatan_target'];
												echo "</td>";
												echo "</tr>";

											?>
										</tbody>
											
										</table>

										<hr/>
										<P class="text-center"><strong>RINCIAN BELANJA PROGRAM DAN PER KEGIATAN PERANGKAT DAERAH</strong> </P>
										<hr/>
										<!-- tambah belanja -->
										<div id="view_belanja"> <?php $this->load->view('belanja/table-rek') ?></div>								
									</div>


								</div>
								<!-- PAGE CONTENT BEGINS -->

								
								
								<div class="hr hr-18 dotted hr-double"></div>



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div>
						</div>
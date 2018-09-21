<div class="row">
	<div class="col-md-12">
		<table class="table-condensed table-striped">
			<thead>
				<tr>
					<th>KODE</th>
					<th>Uraian</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php 
					foreach($itemjenisbelanja as $jb){
						echo "<tr>";
						echo "<td>";
						echo $jb->kode;
						echo "</td>";
						echo $jb->jenis_belanja;
						echo "</tr>";
						foreach ($itemsubjenisbelanja->result() as $sjb) {
							if($sjb->id_jenis_belanja==$jb->id_jenis_belanja){
								echo "<tr>";
								echo "<td>";
								echo $sjb->kode;
								echo "</td>";
								echo "<td>";
								echo $sjb->sub_jenis_belanja;
								echo "</td>";
								echo "</tr>";
								foreach ($itemrekbelanja->result() as $rk) {
									if($rk->id_sub_jenis_belanja==$sjb->id_sub_jenis_belanja){
										echo "<tr>";
										echo "<td>";
										echo $rk->kode;
										echo "</td>";
										echo "<td>";
										echo $rk->akun_rek_belanja;
										echo "</td>";
										echo "</tr>";
									}
								}
							}
							
						}
					}


				?>
			</tr>
			</tbody>
			
		</table>
	</div>
</div>

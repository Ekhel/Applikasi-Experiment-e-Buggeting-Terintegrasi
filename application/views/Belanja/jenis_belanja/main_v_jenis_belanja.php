<div id="respon1"></div>
<div class="container-fluid">
<?php echo $this->session->flashdata('msg');?>
	<div class="row">
		<br/>
    	<div id="jenis_dt" class="col-md-8"><?php $this->load->view('Belanja/jenis_belanja/jenis_belanja_dt') ?></div>
    	<div id="jenis_fm" class="col-md-4"><?php $this->load->view('Belanja/jenis_belanja/jenis_belanja_fm') ?></div>
	</div>
</div>


<script type="text/javascript">
//Active Menu Sidebars
$(document).ready(function() { 
    $('#index').addClass('active');
    $('#barang').addClass('active');
});
</script>
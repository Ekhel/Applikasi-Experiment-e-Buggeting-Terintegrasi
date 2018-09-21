<div id="respon1"></div>
<div class="container-fluid">
<?php echo $this->session->flashdata('msg');?>
	<div class="row">
		<br/>
    	<div id="sub_dt" class="col-md-8"><?php $this->load->view('Belanja/sub_jenis_belanja/sub_dt') ?></div>
    	<div id="sub_fm" class="col-md-4"><?php $this->load->view('Belanja/sub_jenis_belanja/sub_fm') ?></div>
	</div>
</div>


<script type="text/javascript">
//Active Menu Sidebars
$(document).ready(function() { 
    $('#index').addClass('active');
    $('#barang').addClass('active');
});
</script>
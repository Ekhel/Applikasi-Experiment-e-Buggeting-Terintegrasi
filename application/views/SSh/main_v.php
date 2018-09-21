

<div id="respon1"></div>
<div class="container-fluid">
<?php echo $this->session->flashdata('msg');?>
	<div class="row">
		<br/>
    	<div id="ssh_dt" class="col-md-8"><?php $this->load->view('SSh/ssh_data_v') ?></div>
    	<div id="ssh_fm" class="col-md-4"><?php $this->load->view('SSh/ssh_fm_dt') ?></div>
	</div>
</div>


<script type="text/javascript">
//Active Menu Sidebars
$(document).ready(function() { 
    $('#index').addClass('active');
    $('#barang').addClass('active');
});
</script>
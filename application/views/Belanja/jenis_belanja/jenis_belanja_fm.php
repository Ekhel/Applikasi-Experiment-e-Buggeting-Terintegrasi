

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Form Jenis Belanja</h3>
  </div>
  <div class="panel-body">
  <form action="<?php echo base_url() ?>jenis_belanja/inc_jenis_belanja" method="post">
    <!--<div class="form-group">
      <label>ID :</label>
      <input type="hidden" name="id_ssh" id="id_ssh" class="form-control" placeholder="ID" readonly>
    </div>!-->
    <div class="form-group">
      <label>KODE :</label>
      <input type="text" name="kode_1" id="kode_1" class="form-control" placeholder="KODE" autofocus>
    </div>
    <div class="form-group">
      <label>Jenis Belanja :</label>
      <input type="text" name="jenis_belanja" id="jenis_belanja" class="form-control" placeholder="Jenis Belanja">
    </div>
    <input type="hidden" name="act" id="act">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="reset" id="reset" class="btn btn-default"><i class="fa fa-refresh fa-fw"></i></button>
  </div>
  </form>
</div>
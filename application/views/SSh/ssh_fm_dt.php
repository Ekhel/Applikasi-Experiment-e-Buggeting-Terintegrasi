

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Form SSH</h3>
  </div>
  <div class="panel-body">
  <form action="<?php echo base_url() ?>Ssh/inc_ssh" method="post">
    <!--<div class="form-group">
      <label>ID :</label>
      <input type="hidden" name="id_ssh" id="id_ssh" class="form-control" placeholder="ID" readonly>
    </div>!-->
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" autofocus>
    </div>
    <div class="form-group">
      <label>Deskripsi :</label>
      <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi">
    </div>
    <div class="form-group">
      <label>Satuan :</label>
      <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Satuan">
    </div>
    <div class="form-group">
      <label>Harga :</label>
      <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga">
    </div>
    <input type="hidden" name="act" id="act">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="reset" id="reset" class="btn btn-default"><i class="fa fa-refresh fa-fw"></i></button>
  </div>
  </form>
</div>
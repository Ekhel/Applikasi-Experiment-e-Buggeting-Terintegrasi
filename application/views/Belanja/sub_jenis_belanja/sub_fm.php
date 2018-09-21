

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Form Sub Jenis Belanja</h3>
  </div>
  <div class="panel-body">
  <form action="<?php echo base_url() ?>sub_jenis_belanja/inc_sub_jenis_belanja" method="post">
    <!--<div class="form-group">
      <label>ID :</label>
      <input type="hidden" name="id_ssh" id="id_ssh" class="form-control" placeholder="ID" readonly>
    </div>!-->
    <div class="form-group">
      <label>KODE :</label>
      <select class="form-control" name="id_distrik" id="id_distrik">
          <option value="">-- Jenis Belanja --</option>
            <?php 
            foreach($jenis_b->result() as $b)
            {
            ?>
              <option value="<?php echo $b->id_jenis_belanja;?>"><?php echo $b->jenis_belanja; ?></option>
            <?php
            }

          ?>
      </select>
    </div>
    <div class="form-group">
      <label>KODE :</label>
      <input type="text" name="kode_2" id="kode_2" class="form-control" placeholder="KODE" autofocus>
    </div>
    <div class="form-group">
      <label>Sub Jenis Belanja :</label>
      <input type="text" name="sub_jenis_belanja" id="sub_jenis_belanja" class="form-control" placeholder="Sub Jenis Belanja">
    </div>
    <input type="hidden" name="act" id="act">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="reset" id="reset" class="btn btn-default"><i class="fa fa-refresh fa-fw"></i></button>
  </div>
  </form>
</div>
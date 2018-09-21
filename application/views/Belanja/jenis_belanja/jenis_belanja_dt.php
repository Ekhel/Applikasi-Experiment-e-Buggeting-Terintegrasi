<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Data Jenis Belanja</h3>
  </div>
  <div class="panel-body">
    <div class="mailbox-messages table-responsive">
      <table class="table table-bordered table-striped" id="jenis">
        <thead>
            <tr>
                <th width="5%">#</th>
                <th>KODE</th>
                <th>Jenis Belanja</th>
                <th class="text-center">Option</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 0;
            foreach($jenis_b->result() as $r1){
                $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r1->kode_1 ?></td>
                <td><?php echo $r1->jenis_belanja ?></td>
                <td class="text-center" width="12%">
                    <a href="javascript:;" class="btn btn-default btn-xs xtooltip" title="Edit"><i class="fa fa-edit" onclick="edit('<?php echo $r1->kode_1 ?>','<?php echo $r1->jenis_belanja ?>')"></i></a>
                    <a href="<?php echo base_url() ?>jenis_belanja/hapus_jenis_belanja/<?php echo $r1->id_jenis_belanja ?> " onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="btn btn-danger btn-xs xtooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.box-body -->
</div>

<script type="text/javascript">
  $(function () {
    $("#jenis").dataTable({
      "iDisplayLength": 10,
      "processing": true,
          "serverSide": true,
    });
        
    $('.xtooltip').tooltip(); 
  });

function edit(kode_1,jenis_belanja){
  //$("#id_ssh").val(id_ssh);
  $('#kode_1').val(kode_1);
  $('#jenis_belanja').val(jenis_belanja);
}
</script>
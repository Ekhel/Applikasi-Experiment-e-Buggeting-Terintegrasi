<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Data Sub Jenis Belanja</h3>
  </div>
  <div class="panel-body">
    <div class="mailbox-messages table-responsive">
      <table class="table table-bordered table-striped" id="sub">
        <thead>
            <tr>
                <th width="5%">#</th>
                <th>KODE</th>
                <th>Sub Jenis Belanja</th>
                <th class="text-center">Option</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 0;
            foreach($sub_j->result() as $r1){
                $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r1->kode_2 ?></td>
                <td><?php echo $r1->sub_jenis_belanja ?></td>
                <td class="text-center" width="12%">
                    <a href="javascript:;" class="btn btn-default btn-xs xtooltip" title="Edit"><i class="fa fa-edit" onclick="edit('<?php echo $r1->id_jenis_belanja ?>','<?php echo $r1->kode_2 ?>','<?php echo $r1->sub_jenis_belanja ?>')"></i></a>
                    <a href="<?php echo base_url() ?>sub_jenis_belanja/hapus_sub_jenis_belanja/<?php echo $r1->id_sub_jenis_belanja ?> " onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="btn btn-danger btn-xs xtooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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
    $("#sub").dataTable({
      "iDisplayLength": 10,
      "processing": true,
          "serverSide": true,
    });
        
    $('.xtooltip').tooltip(); 
  });

function edit(id_jenis_belanja,kode_2,sub_jenis_belanja){
  //$("#id_ssh").val(id_ssh);
  $('#id_jenis_belanja').val(id_jenis_belanja);
  $('#kode_2').val(kode_2);
  $('#sub_jenis_belanja').val(sub_jenis_belanja);
}
</script>
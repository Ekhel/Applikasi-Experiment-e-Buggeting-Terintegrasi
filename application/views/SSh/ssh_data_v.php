<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Data SSH</h3>
  </div>
  <div class="panel-body">
    <div class="mailbox-messages table-responsive">
      <table class="table table-bordered table-striped" id="brg">
        <thead>
            <tr>
                <th width="5%">#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th class="text-center">Option</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 0;
            foreach($ssh->result() as $r1){
                $no++;
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r1->nama ?></td>
                <td><?php echo $r1->deskripsi ?></td>
                <td><?php echo $r1->satuan ?></td>
                <td><?php echo number_format($r1->harga)?></td>
                <td class="text-center" width="12%">
                    <a href="javascript:;" class="btn btn-default btn-xs xtooltip" title="Edit"><i class="fa fa-edit" onclick="edit('<?php echo $r1->nama ?>','<?php echo $r1->deskripsi ?>','<?php echo $r1->satuan ?>','<?php echo $r1->harga ?>')"></i></a>
                    <a href="<?php echo base_url() ?>Ssh/hapus_ssh/<?php echo $r1->id_ssh ?> " onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="btn btn-danger btn-xs xtooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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
    $("#brg").dataTable({
      "iDisplayLength": 10,
      "processing": true,
          "serverSide": true,
    });
        
    $('.xtooltip').tooltip(); 
  });

function edit(nama,deskripsi,satuan,harga){
  //$("#id_ssh").val(id_ssh);
  $('#nama').val(nama);
  $('#deskripsi').val(deskripsi);
  $('#satuan').val(satuan);
  $('#harga').val(harga);
  $('#act').val('edit');
}
</script>
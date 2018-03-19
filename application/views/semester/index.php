<?php 
// var_dump($data['versi_borang']);
// exit();
?>
<script type="text/javascript" language="javascript" >
  var dTable;
  $(document).ready(function() {
    dTable = $('#lookup').DataTable({
      responsive: true
    });
  });
</script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>DATA <?php echo strtoupper($modul); ?></font></strong></h4>
  </div><!-- /.box-header -->

    <div class="box-body">

    <div class="form-group">
      
      <a href='<?php echo base_url('universal/' . "tambah/" . $modul); ?>'><button class="btn btn-success"><i class="fa fa-plus"></i> <?php echo ucwords($modul); ?></button></a>
    </div>

    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
                    <th>SEMESTER</th>
                    <th>PROSES</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($data[$modul] as $item) {
          ?>
          <tr>
            <th><?php echo $item->semester; ?></th>
              <th>
                <a class="btn btn-info" href="<?php echo base_url('universal/' . "ubah/" . $modul . '/' . $item->id); ?>"><i class="fa fa-pencil"></i> </a>
                <a class="btn btn-danger" onclick="hapus('<?php echo $item->id; ?>')"><i class="fa fa-trash"></i> </a>
              </th>
          </tr>
          <?php
        }
        ?>
      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div><!-- /.box -->

<script type="text/javascript">
function hapus(id) {
  if (confirm("Yakin hapus ?")) {
    window.location = "<?php echo base_url('universal/' . "aksi_hapus/" . $modul . '/'); ?>" + id;
  }
}
</script>

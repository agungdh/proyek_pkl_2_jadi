<?php
// var_dump($data[$modul]); exit();
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH <?php echo strtoupper($modul); ?></font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('universal/' . "aksi_ubah/" . $modul); ?>">
    <div class="box-body">

    <input type="hidden" name="data['id']" value="<?php echo $data[$modul]->id; ?>">

    <div class="form-group">
      <label for="semester">Semester</label>
          <input value="<?php echo $data[$modul]->semester; ?>" required type="text" class="form-control" id="semester" placeholder="Isi Semester" name="data[semester]">          
    </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('universal/' . 'index/' . $modul); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">
$(function () {
  $('.select2').select2()
});
</script>
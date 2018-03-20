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
                    <th>KEGIATAN</th>
                    <th>TINGKAT</th>
                    <th>KATEGORI</th>
                    <th>TAHUN AJAR</th>
                    <th>SEMESTER</th>
                    <th>TANGGAL LOMBA</th>
                    <th>TEMPAT LOMBA</th>
                    <th>PROSES</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($data[$modul] as $item) {
          ?>
          <tr>
            <th><?php echo $item->nama_kegiatan; ?></th>
            <th><?php echo $this->db->get_where('tingkat', array('id' => $item->tingkat_id))->row()->tingkat; ?></th>
            <th><?php echo $this->db->get_where('kategori', array('id' => $item->kategori_id))->row()->kategori; ?></th>
            <th><?php echo $item->tahun_ajar_awal . '/' . $item->tahun_ajar_akhir; ?></th>
            <th><?php echo $this->db->get_where('semester', array('id' => $item->semester_id))->row()->semester; ?></th>
            <th><?php echo $this->pustaka->tanggal_indo($item->tanggal_awal_lomba) . ' - ' . $this->pustaka->tanggal_indo($item->tanggal_akhir_lomba); ?></th>
            <th><?php echo $item->tempat_lomba; ?></th>
              <th>
                <a class="btn btn-primary" href="<?php echo base_url('universal/' . "ubah/" . $modul . '/' . $item->id); ?>"><i class="fa fa-share"></i>  Detail</a>
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

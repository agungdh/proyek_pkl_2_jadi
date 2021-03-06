<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH <?php echo strtoupper($modul); ?></font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('universal/' . "aksi_tambah/" . $modul); ?>">
    <div class="box-body">

      <input type="hidden" name="data[user_id]" value="<?php echo $this->session->id; ?>">
      <input type="hidden" name="data[created_at]" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <div class="form-group">
      <label for="nama_kegiatan">Nama Kegiatan</label>
          <input required type="text" class="form-control" id="nama_kegiatan" placeholder="Isi Nama Kegiatan" name="data[nama_kegiatan]">          
    </div>

    <div class="form-group">
      <label for="tingkat_id">Tingkat</label>
          <select id="tingkat_id" class="form-control select2" name="data[tingkat_id]">
            <?php
            foreach ($this->db->get('tingkat')->result() as $item) {
              ?>
              <option value="<?php echo $item->id; ?>"><?php echo $item->tingkat; ?></option>
              <?php
            }
            ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="kategori_id">Kategori</label>
          <select id="kategori_id" class="form-control select2" name="data[kategori_id]">
          <?php
          foreach ($this->db->get('kategori')->result() as $item) {
            ?>
            <option value="<?php echo $item->id; ?>"><?php echo $item->kategori; ?></option>
            <?php
          }
          ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="tahun_ajar_awal">Tahun Ajar</label>
          <input required type="number" min="1900" max="2900" id="tahun_ajar_awal" placeholder="Tahun Awal" name="data[tahun_ajar_awal]">
          /          
          <input required type="number" min="1900" max="2900" id="tahun_ajar_akhir" placeholder="Tahun Akhir" name="data[tahun_ajar_akhir]">          
    </div>

    <div class="form-group">
      <label for="semester_id">Semester</label>
          <select id="semester_id" class="form-control select2" name="data[semester_id]">
          <?php
          foreach ($this->db->get('semester')->result() as $item) {
            ?>
            <option value="<?php echo $item->id; ?>"><?php echo $item->semester; ?></option>
            <?php
          }
          ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="tanggal_awal_lomba">Tanggal Lomba</label>
          <input required type="date" id="tanggal_awal_lomba" placeholder="Isi tanggal_awal_lomba" name="data[tanggal_awal_lomba]">
          -  
          <input required type="date" id="tanggal_akhir_lomba" placeholder="Isi tanggal_akhir_lomba" name="data[tanggal_akhir_lomba]">          
    </div>

    <div class="form-group">
      <label for="tempat_lomba">Tempat Lomba</label>
          <input required type="text" class="form-control" id="tempat_lomba" placeholder="Isi Tempat Lomba" name="data[tempat_lomba]">          
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
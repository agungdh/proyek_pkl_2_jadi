<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH <?php echo strtoupper($modul); ?></font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('universal/' . "aksi_ubah/" . $modul); ?>">
    <div class="box-body">

      <input type="hidden" name="data[id]" value="<?php echo $data[$modul]->id; ?>">

    <div class="form-group">
      <label for="nama_kegiatan">Nama Kegiatan</label>
          <input value="<?php echo $data[$modul]->nama_kegiatan; ?>" required type="text" class="form-control" id="nama_kegiatan" placeholder="Isi Nama Kegiatan" name="data[nama_kegiatan]">          
    </div>

    <div class="form-group">
      <label for="tingkat_id">Tingkat</label>
          <select id="tingkat_id" class="form-control select2" name="data[tingkat_id]">
            <?php
            foreach ($this->db->get('tingkat')->result() as $item) {
              if ($item->id == $data[$modul]->tingkat_id) {
                ?>
                <option selected value="<?php echo $item->id; ?>"><?php echo $item->tingkat; ?></option>
                <?php
              } else {
                ?>
                <option value="<?php echo $item->id; ?>"><?php echo $item->tingkat; ?></option>
                <?php
              }
            }
            ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="kategori_id">Kategori</label>
          <select id="kategori_id" class="form-control select2" name="data[kategori_id]">
          <?php
          foreach ($this->db->get('kategori')->result() as $item) {
            if ($item->id == $data[$modul]->kategori_id) {
              ?>
              <option selected value="<?php echo $item->id; ?>"><?php echo $item->kategori; ?></option>
              <?php
            } else {
              ?>
              <option value="<?php echo $item->id; ?>"><?php echo $item->kategori; ?></option>
              <?php
            }
          }
          ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="tahun_ajar_awal">Tahun Ajar</label>
          <input value="<?php echo $data[$modul]->tahun_ajar_awal; ?>" required type="number" min="1900" max="2900" id="tahun_ajar_awal" placeholder="Tahun Awal" name="data[tahun_ajar_awal]">
          /          
          <input value="<?php echo $data[$modul]->tahun_ajar_akhir; ?>" required type="number" min="1900" max="2900" id="tahun_ajar_akhir" placeholder="Tahun Akhir" name="data[tahun_ajar_akhir]">          
    </div>

    <div class="form-group">
      <label for="semester_id">Semester</label>
          <select id="semester_id" class="form-control select2" name="data[semester_id]">
          <?php
          foreach ($this->db->get('semester')->result() as $item) {
            if ($item->id == $data[$modul]->semester_id) {
              ?>
              <option selected value="<?php echo $item->id; ?>"><?php echo $item->semester; ?></option>
              <?php
            } else {
              ?>
              <option value="<?php echo $item->id; ?>"><?php echo $item->semester; ?></option>
              <?php
            }
          }
          ?>
          </select>          
    </div>

    <div class="form-group">
      <label for="tanggal_awal_lomba">Tanggal Lomba</label>
          <input value="<?php echo $data[$modul]->tanggal_awal_lomba; ?>" required type="date" id="tanggal_awal_lomba" placeholder="Isi tanggal_awal_lomba" name="data[tanggal_awal_lomba]">
          -  
          <input value="<?php echo $data[$modul]->tanggal_akhir_lomba; ?>" required type="date" id="tanggal_akhir_lomba" placeholder="Isi tanggal_akhir_lomba" name="data[tanggal_akhir_lomba]">          
    </div>

    <div class="form-group">
      <label for="tempat_lomba">Tempat Lomba</label>
          <input value="<?php echo $data[$modul]->tempat_lomba; ?>" required type="text" class="form-control" id="tempat_lomba" placeholder="Isi Tempat Lomba" name="data[tempat_lomba]">          
    </div>

    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('universal/' . 'index/' . $modul); ?>" class="btn btn-info">Batal</a>
      <a class="btn btn-danger" onclick="hapus('<?php echo $data['kegiatan']->id; ?>')">Hapus</a>
    </div>
  </form>

<?php
if ($modul == "kegiatan") {
  ?>
  <div class="box-header with-border">
    <h4><strong><font color=blue>DATA TEAM</font></strong></h4>
  </div><!-- /.box-header -->
  <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
            <th>TEAM</th>
            <th>JUMLAH ANGGOTA</th>
            <th>PRESTASI</th>
            <th>BUKTI</th>
            <th>FOTO</th>
            <th>PROSES</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <form enctype="multipart/form-data" method="post" id="formq" action="<?php echo base_url('universal/aksi_tambah_team'); ?>">
            <input required type="hidden" name="data[kegiatan_id]" value="<?php echo $data['kegiatan']->id; ?>">
            <th><input required class="form-control" type="text" name="data[nama_team]" style="width: 150px"></th>
            <th><input required class="form-control" type="number" min="1" max="100" name="data[jumlah_anggota]"></th>
            <th>
              <select class="form-control select2" name="data[prestasi_id]" style="width: 150px">
                <?php
                foreach ($this->db->get('prestasi')->result() as $item) {
                  ?>
                  <option value="<?php echo $item->id; ?>"><?php echo $item->prestasi; ?></option>
                  <?php
                }
                ?>
              </select>
            </th>
            <th><input class="form-control" type="file" name="bukti" style="width: 200px"></th>
            <th><input class="form-control" type="file" name="foto" style="width: 200px"></th>
            <th><a class="btn btn-success" onclick="$('#formq').submit()"><i class="glyphicon glyphicon-plus"></i></a></th>
          </form>
        </tr>
        <?php
        foreach ($this->db->get_where('team', array('kegiatan_id' => $data['kegiatan']->id))->result() as $item) {
          ?>
          <form id="team<?php echo $item->id; ?>" method="post" enctype="multipart/form-data" action="<?php echo base_url('universal/' . "aksi_ubah_team/" . $item->id); ?>">
          <tr>
            <td><input required class="form-control" type="text" name="data[nama_team]" value="<?php echo $item->nama_team; ?>"></td>
            <td><input required class="form-control" type="number" min="1" max="100" name="data[jumlah_anggota]" value="<?php echo $item->jumlah_anggota; ?>"></td>
            <td>
              <select class="form-control select2" name="data[prestasi_id]" style="width: 150px">
                <?php
                foreach ($this->db->get('prestasi')->result() as $prestasi) {
                  if ($prestasi->id == $item->prestasi_id) {
                    ?>
                    <option selected value="<?php echo $prestasi->id; ?>"><?php echo $prestasi->prestasi; ?></option>
                    <?php
                  } else {
                    ?>
                    <option value="<?php echo $prestasi->id; ?>"><?php echo $prestasi->prestasi; ?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </td>
              <?php 
              if (file_exists('uploads/bukti/' . $item->id)) {
                $bukti = base_url('uploads/bukti/' . $item->id);
              } else {
                $bukti = base_url('uploads/noimage');
              }
              if (file_exists('uploads/foto/' . $item->id)) {
                $foto = base_url('uploads/foto/' . $item->id);
              } else {
                $foto = base_url('uploads/noimage');
              }
              ?>
            <center>
              <td>
                <a target="_blank" href="<?php echo $bukti; ?>"><img width="100px" height="100px" src="<?php echo $bukti; ?>"></a>
                <input type="file" class="form-control" name="bukti">
              </td>
              <td>
                <a target="_blank" href="<?php echo $foto; ?>"><img width="100px" height="100px" src="<?php echo $foto; ?>"></a>
                <input type="file" class="form-control" name="foto">
              </td>
            </center>
            <td>
              <a class="btn btn-primary" onclick="$('#team<?php echo $item->id; ?>').submit()"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-danger" onclick="hapus_team('<?php echo $item->id; ?>')"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          </form>
          <form id="anggota<?php echo $item->id; ?>" method="post" enctype="multipart/form-data" action="<?php echo base_url('universal/' . "aksi_tambah_anggota/" . $item->id); ?>">
          <tr>
            <th></th>
            <th></th>
            <th>ANGGOTA</th>
            <th>
              <select class="form-control select2" name="mahasiswa">
                <?php
                foreach ($this->m_kegiatan->ambil_mahasiswa($item->id) as $value) {
                  ?>
                  <option value="<?php echo $value->id; ?>"><?php echo $value->nim; ?> | <?php echo $value->nama; ?></option>
                  <?php
                }
                ?>
              </select>
            </th>
            <th></th>
            <th>
              <a class="btn btn-success" onclick="$('#anggota<?php echo $item->id; ?>').submit()"><i class="glyphicon glyphicon-plus"></i></a>
            </th>
          </tr>
          </form>
          <?php
          $i = 1;
          foreach ($this->db->get_where('detail_team', array('team_id' => $item->id))->result() as $values) {
            ?>
            <tr>
              <td></td>
              <td></td>
              <td><?php echo $i; ?></td>
              <td><?php echo $this->db->get_where('mahasiswa', array('id' => $values->mahasiswa_id))->row()->nim; ?></td>
              <td><?php echo $this->db->get_where('mahasiswa', array('id' => $values->mahasiswa_id))->row()->nama; ?></td>
              <td>
                <a class="btn btn-danger" onclick="hapus_anggota('<?php echo $values->id; ?>')"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php
            $i++;
          }
          ?>


          <?php
        }
        ?>
      </tbody>
      
    </table>
  <?php
}
?>

</div><!-- /.box -->

<script type="text/javascript">
$(function () {
  $('.select2').select2();
  $('#lookup').DataTable({
    responsive: true,
    orderCellsTop: true
  });
});

function hapus(id) {
  if (confirm("Yakin hapus ?")) {
    window.location = "<?php echo base_url('universal/' . "aksi_hapus/" . $modul . '/'); ?>" + id;
  }
}

function hapus_team(id) {
  if (confirm("Yakin hapus ?")) {
    window.location = "<?php echo base_url('universal/' . "aksi_hapus_team/"); ?>" + id;
  }
}

function hapus_anggota(id) {
  if (confirm("Yakin hapus ?")) {
    window.location = "<?php echo base_url('universal/' . "aksi_hapus_anggota/"); ?>" + id;
  }
}
</script>
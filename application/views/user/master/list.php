                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="breadcome-heading">
                                            <h1><?= $subtitle; ?></h1>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                  


                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <?php 
                            if( $this->session->flashdata('sukses') ) {
                                echo '<div class="alert-wrap2 shadow-reset wrap-alert-b">';
                                echo    '<div class="alert alert-success">';
                                echo        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                echo        "<strong>Berhasil! </strong>".$this->session->flashdata('sukses')."</div></div>";
                            }
                            if( $this->session->flashdata('gagal') ) {
                                echo '<div class="alert-wrap2 shadow-reset wrap-alert-b">';
                                echo    '<div class="alert alert-danger">';
                                echo        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                echo        "<strong>Gagal! </strong>".$this->session->flashdata('gagal')."</div></div>";
                            }
                        ?>
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Berkas Kelompok Ternak</h1>
                                    </div>
                                </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <?php if ($berkas['sertifikat'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Sertifikat *(jpg/jpeg/png)</label>
                                                    <?php include_once('add-sertifikat.php') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Screenshot Lokasi Kandang</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('assets/upload/berkas/img/'.$berkas['sertifikat']); ?>" data-lightbox='image' data-title="Sertifikat Ternak dari <?= $berkas['sertifikat'] ?>"><img src="<?= base_url('assets/upload/berkas/img/thumbs/'.$berkas['sertifikat']); ?>" alt="foto kandang Tidak Ada" class="img img-responsive img-thumbnail" width="60"></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-sertifikat.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?= form_open_multipart(base_url('user/info/upload_berkas')); ?>
                                    <div class="static-table-list">
                                    <?php if ($berkas['prop_klp'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Proposal Kelompok *(pdf)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="prop_klp" onchange="document.getElementById('prop_klp').value = this.value;">
                                                            </div>
                                                            <input type="text" id="prop_klp" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Proposal Kelompok</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('user/info/open_file') ?>?file=<?= $berkas['prop_klp'] ?>" target="_blank"><?= $berkas['prop_klp']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-proposal.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['akta_pengukuhan'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Akta Pengukuhan *(pdf)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="akta_pengukuhan" onchange="document.getElementById('akta_pengukuhan').value = this.value;">
                                                            </div>
                                                            <input type="text" id="akta_pengukuhan" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Akta Pengukuran</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('user/info/open_file') ?>?file=<?= $berkas['akta_pengukuhan'] ?>" target="_blank"><?= $berkas['akta_pengukuhan']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-akta-pengukuhan.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['akta_notaris'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Akta Notaris *(pdf)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="akta_notaris" onchange="document.getElementById('akta_notaris').value = this.value;">
                                                            </div>
                                                            <input type="text" id="akta_notaris" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Akta Notaris</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('user/info/open_file') ?>?file=<?= $berkas['akta_notaris'] ?>" target="_blank"><?= $berkas['akta_notaris']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-akta-notaris.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if ($berkas['sk_terdaftar'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Surat Keterangan Terdaftar *(pdf)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="sk_terdaftar" onchange="document.getElementById('sk_terdaftar').value = this.value;">
                                                            </div>
                                                            <input type="text" id="sk_terdaftar" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Surat Keterangan Terdaftar</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('user/info/open_file') ?>?file=<?= $berkas['sk_terdaftar'] ?>" target="_blank"><?= $berkas['sk_terdaftar']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-sk-terdaftar.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['foto_kandang'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Foto Kandang *(jpg/jpeg/png)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="foto_kandang" onchange="document.getElementById('foto_kandang').value = this.value;">
                                                            </div>
                                                            <input type="text" id="foto_kandang" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Foto Kandang</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('assets/upload/berkas/img/'.$berkas['foto_kandang']); ?>" data-lightbox='image' data-title="Sertifikat Ternak dari <?= $berkas['foto_kandang'] ?>"><img src="<?= base_url('assets/upload/berkas/img/thumbs/'.$berkas['foto_kandang']); ?>" alt="foto kandang Tidak Ada" class="img img-responsive img-thumbnail" width="60"></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-foto-kandang.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['ss_lokasi'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">Screenshot Lokasi Kandang *(jpg/jpeg/png)</label>
                                                    <br><br>
                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                        <div class="input append-big-btn">
                                                            <div class="file-button">
                                                                Browse
                                                                <input type="file" name="ss_lokasi" onchange="document.getElementById('ss_lokasi').value = this.value;">
                                                            </div>
                                                            <input type="text" id="ss_lokasi" placeholder="no file selected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Screenshot Lokasi Kandang</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('assets/upload/berkas/img/'.$berkas['ss_lokasi']); ?>" data-lightbox='image' data-title="Sertifikat Ternak dari <?= $berkas['ss_lokasi'] ?>"><img src="<?= base_url('assets/upload/berkas/img/thumbs/'.$berkas['ss_lokasi']); ?>" alt="foto kandang Tidak Ada" class="img img-responsive img-thumbnail" width="60"></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <?php include('edit-ss-lokasi.php'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($status == 0) : ?>
                                        <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="login-horizental cancel-wp pull-left">
                                                    <button type="submit" class="form-control btn btn-primary btn-sm">
                                                        <i class="fa fa-plus"></i> Simpan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    
                                    
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Static Table End -->

            <div class="col-lg-12">
                        <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad input-knob-dial-wrap">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1"><i class="fa fa-plus"></i> Tambah Anggota</a>
                                                </div>
                                                <div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">

                                                                    <div class="row">
                        <div class="col-lg-12">
                            
                                <div class="sparkline12-graph">
                                    <div class=" date-picker-inner">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <?= form_open_multipart(base_url('user/info/tambah_anggota')); ?>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">NIK</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Nama Anggota</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Tempat Lahir</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner data-custon-pick" id="data_1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Tanggal Lahir</label>
                                                                </div>
                                                                <div class="col-lg-8 input-group date">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control" value="01/01/2000" id="tanggal_lahir" name="tanggal_lahir" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Agama</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="agama" id="agama" class="form-control">
                                                                        <option value="">- Pilih Agama -</option>
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Kristen">Kristen</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Katholik">Katholik</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Alamat Lengkap</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Status Perkawinan</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="st_perkawinan" id="st_perkawinan" class="form-control">
                                                                        <option value="">- Pilih Status Perkawinan -</option>
                                                                        <option value="Belum kawin">Belum kawin</option>
                                                                        <option value="Kawin">Kawin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Pekerjaan</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Sertifikat Ternak</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="file" class="form-control" name="sertifi_ternak" id="sertifi_ternak">
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-7"></div>
                                                                    <div class="col-lg-5">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            <button class="btn btn-white" data-dismiss="modal" type="button">Batal</button>
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?= form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Basic Form End-->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- </div>
                    </div>
                    </div> -->

                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Daftar Kelompok</h1>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NIK</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Tempat/Tanggal Lahir</th>
                                                    <th>Agama</th>
                                                    <th>Alamat</th>
                                                    <th>Status Perkawinan</th>
                                                    <th>Pekerjaan</th>
                                                    <th width="150px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $x = 1; foreach ($anggota as $row) { ?>
                                                <tr>
                                                    <td><?= $x++; ?></td>
                                                    <td><?= $row['nik']; ?></td>
                                                    <td><?= $row['nama_anggota']; ?></td>
                                                    <td><?= $row['ttl']; ?></td>
                                                    <td><?= $row['agama']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td><?= $row['st_perkawinan']; ?></td>
                                                    <td><?= $row['pekerjaan']; ?></td>
                                                    <td>
                                                        <?php 
                                                            $nik = $row['nik'];
                                                            $ttl = $row['ttl'];
                                                            $var = explode( ',', $ttl); 
                                                        ?>
                                                        <?php include('edit-anggota.php'); ?>
                                                        
                                                        <?php include('delete-anggota.php'); ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Static Table End -->
<script src="<?= base_url(); ?>assets/templates/admin/js/vendor/jquery-1.11.3.min.js"></script>
<script>

$('div.inline-checkbox-cs.required :checkbox:checked').length > 0

</script>
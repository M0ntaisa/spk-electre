                    
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
                        <div class="col-lg-12">
                        <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Tambah Data Kelompok</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad input-knob-dial-wrap">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1"><i class="fa fa-plus"></i> Tambah Data Kelompok</a>
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
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                <?php 

                                                $a = '';
                                                for ($i = 0; $i<3; $i++) 
                                                {
                                                    $a .= mt_rand(0,9);
                                                }
                                                $kd_alternatif = "ALT0".$a;
                                                
                                                ?>
                                                    <?= form_open_multipart(base_url('admin/peternak/tambah_klp_ternak')); ?>
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9">
                                                                    <input type="hidden" class="form-control" value="<?= $kd_alternatif ?>" name="kd_alternatif"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Ketua Kelompok</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="id_user" id="id_user" class="form-control" onchange="isiOtomatis()">
                                                                        <option value="">- Pilih Ketua Kelompok -</option>
                                                                        <?php foreach ($users_pas as $row) { ?>
                                                                            <option value="<?= $row['id_users']; ?>" title="tes"><?= $row['nama']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Nama Kelompok</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="kel_ternak" name="kel_ternak" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Alamat</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">No. Telepon Kelompok</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control input-medium bfh-phone" id="telepon" name="telepon" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Status Kelompok</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="st_kelompok" id="st_kelompok" class="form-control">
                                                                        <option value="">- Pilih Status Kelompok -</option>
                                                                        <?php foreach ($st_kelompok as $row) { ?>
                                                                            <option value="<?= $row['kd_subkriteria']; ?>" title="tes"><?= $row['nm_subkriteria']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Sistem Pemeliharaan</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="sys_pemeliharaan" id="sys_pemeliharaan" class="form-control">
                                                                        <option value="">- Pilih Sistem Pemeliharaan -</option>
                                                                        <?php foreach ($sys_pemeliharaan as $row) { ?>
                                                                            <option value="<?= $row['kd_subkriteria']; ?>"><?= $row['nm_subkriteria']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Pelayanan Kesehatan</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="pel_kesehatan" id="pel_kesehatan" class="form-control">
                                                                        <option value="">- Pilih Pelayanan Kesehatan -</option>
                                                                        <?php foreach ($pel_kesehatan as $row) { ?>
                                                                            <option value="<?= $row['kd_subkriteria']; ?>"><?= $row['nm_subkriteria']; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Sertifikat Ternak</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <select name="sertifikat" id="sertifikat" class="form-control">
                                                                        <option value="">- Pilih -</option>
                                                                        <option value="Ada">Ada</option>
                                                                        <option value="Tidak Ada">Tidak Ada</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                        <h1>Daftar Kelompok</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kode</th>
                                                    <th>Nama Kelompok Ternak</th>
                                                    <th>Nama Ketua</th>
                                                    <th>Alamat</th>
                                                    <th>Telepon</th>
                                                    <th>Sertifikat Ternak</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $x = 1; foreach ($peternak as $row) { ?>
                                                <tr>
                                                    <td><?= $x++; ?></td>
                                                    <td><?= $row['kd_alternatif']; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= $row['nm_ketua']; ?></td>
                                                    <td><?= $row['alamat']; ?></td>
                                                    <td><?= $row['telepon']; ?></td>
                                                    <td><?= $row['sertifikat']; ?></td>
                                                    <td>
                                                        <?php 
                                                            $id_user = $row['id_user']; 
                                                            $kd_alternatif = $row['kd_alternatif']; 
                                                            $eval_st_kelompok = $row['eval']['st_kelompok']['kd_subkriteria'];
                                                            $eval_sertifi = $row['eval']['sertifi']['kd_subkriteria'];
                                                            $eval_sys_pem = $row['eval']['sys_pem']['kd_subkriteria'];
                                                            $eval_sys_kes = $row['eval']['sys_kes']['kd_subkriteria'];
                                                            $sertifikat = $row['sertifikat'];
                                                        ?>
                                                        <a type="button" href="<?= base_url('admin/peternak/anggota')?>/?id_user=<?= $row['id_user'] ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-group"></i> Daftar Anggota
                                                        </a>
                                                        <a type="button" href="<?= base_url('admin/peternak/berkas')?>/?id_user=<?= $row['id_user'] ?>" class="btn btn-success btn-sm">
                                                            <i class="fa fa-file"></i> Berkas
                                                        </a>
                                                        <?php include('edit.php'); ?>
                                                        
                                                        <?php include('delete.php'); ?>
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
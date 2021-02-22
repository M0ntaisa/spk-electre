                    
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
                        <!-- <div class="col-lg-12">
                        <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Tambah Data Anggota</h1>
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
                                    </div> -->
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
                                                    <th>NIK</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Tempat/Tanggal Lahir</th>
                                                    <th>Agama</th>
                                                    <th>Alamat</th>
                                                    <th>Status Perkawinan</th>
                                                    <th>Pekerjaan</th>
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
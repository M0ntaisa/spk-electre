                    
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

                <?php if ($cek == 0) : ?>
                            
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
                                                <!-- <div class="modal-bootstrap">
                                                    <span><i><b>Informasi Kelompok Ternak Belum Diinput Oleh Admin.</b></i></span>
                                                </div> -->
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
                                                    <?= form_open(base_url('user/info/tambah_info_user')); ?>
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-9">
                                                                    <input type="hidden" class="form-control" value="<?= $_SESSION['id_user'] ?>" name="id_user"/>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<?php  else:  ?>

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
                                        <h1>Info Kelompok</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="static-table-list">
                                        <style>
                                            #cssTable
                                            {
                                                text-align: center; 
                                                vertical-align: middle;
                                            }

                                            #tableKlp th {
                                                padding: 15px;
                                            }

                                            #tableKlp td {
                                                padding-left: 10px;
                                            }
                                        </style>
                                        <table id="tableKlp">
                                            <tr>
                                                <th>Nama Kelompok</th>
                                                <td> : <?= $info[0]['nama_kelp']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td> : <?= $info[0]['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telepon</th>
                                                <td> : <?= $info[0]['telepon']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php include_once('edit.php'); ?>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <th>Sertifikat</th>
                                                <td> : <a href="<?= base_url('assets/upload/image/sertifikat/'.$info[0]['sertifikat']); ?>" data-lightbox='image' data-title="Sertifikat Ternak dari <?= $info[0]['nama'] ?>"><img src="<?= base_url('assets/upload/image/sertifikat/thumbs/'.$info[0]['sertifikat']); ?>" alt="Sertifikat Tidak Ada" class="img img-responsive img-thumbnail" width="60"></a></td>
                                            </tr> -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            
            <!-- Static Table End -->
        <?php endif; ?>
            <!-- Static Table End -->
<script src="<?= base_url(); ?>assets/templates/admin/js/vendor/jquery-1.11.3.min.js"></script>
<script>

$('div.inline-checkbox-cs.required :checkbox:checked').length > 0

</script>
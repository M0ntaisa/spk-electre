                    
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
                                    <?php if ($berkas['sertifikat'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Sertifikat</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Sertifikat</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: 
                                                        <a href="<?= base_url('assets/upload/berkas/img/'.$berkas['sertifikat']); ?>" data-lightbox='image' data-title="Sertifikat Ternak dari <?= $berkas['sertifikat'] ?>"><img src="<?= base_url('assets/upload/berkas/img/thumbs/'.$berkas['sertifikat']); ?>" alt="Sertifikat Tidak Ada" class="img img-responsive img-thumbnail" width="60"></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($berkas['prop_klp'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Proposal Kelompok</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                        <a href="<?= base_url('admin/peternak/open_file') ?>?file=<?= $berkas['prop_klp'] ?>" target="_blank"><?= $berkas['prop_klp']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['akta_pengukuhan'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Akta Pengukuhan</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                        <a href="<?= base_url('admin/peternak/open_file') ?>?file=<?= $berkas['akta_pengukuhan'] ?>" target="_blank"><?= $berkas['akta_pengukuhan']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['akta_notaris'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Akta Notaris</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                        <a href="<?= base_url('admin/peternak/open_file') ?>?file=<?= $berkas['akta_notaris'] ?>" target="_blank"><?= $berkas['akta_notaris']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['foto_kandang'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Foto Kandang</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['sk_terdaftar'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Surat Keterangan Terdaftar</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                        <a href="<?= base_url('admin/peternak/open_file') ?>?file=<?= $berkas['sk_terdaftar'] ?>" target="_blank"><?= $berkas['sk_terdaftar']; ?></a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($berkas['ss_lokasi'] == NULL) : ?>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="login2 pull-left pull-left-pro">Screenshot Lokasi Kandang</label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="login2 pull-left pull-left-pro">: <i>Tidak ada</i>
                                                    </label>
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
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

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
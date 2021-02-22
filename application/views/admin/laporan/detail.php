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
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="sparkline10-list shadow-reset mg-t-30">
                                <div class="sparkline10-hd">
                                    <div class="main-sparkline10-hd">
                                        <h1>Aksi</h1>
                                        <div class="sparkline10-outline-icon">
                                            <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline10-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="basic-login-inner inline-basic-form">
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <a href="<?= base_url() ?>admin/laporan" type="button" class="btn btn-custon-four btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Kelompok Ternak</h1>
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
                                                <td> : <?= $klp_ternak[0]['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td> : <?= $klp_ternak[0]['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Telepon</th>
                                                <td> : <?= $klp_ternak[0]['telepon']; ?></td>
                                            </tr>
                                        </table>
                                        <br><hr>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                    <th colspan="<?= count($kriteria) ?>" id="cssTable">Kriteria</th>
                                                </tr>
                                                <tr>
                                                    <?php foreach ($kriteria as $row) { ?>
                                                        <th><?= $row['nm_kriteria']; ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                                
                                                    <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                        <tr>
                                                            <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                            <?php for ($j=0; $j < count($klp_ternak[$i]['evaluasi']) ; $j++) { ?>
                                                                <td><?= $klp_ternak[$i]['evaluasi'][$j]['nm_subkriteria']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php } ?>
                                                
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Static Table End -->

            <!-- Static Table Start -->
            <div class="static-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Hasil Evaluasi</h1>
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
                                            <tbody>
                                                <tr>
                                                    <th>Waktu Evaluasi</th>
                                                    <td><?= date( "d/m/Y H:i:s", strtotime($rank[0]['time_proc'])); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Poin</th>
                                                    <td><?= $rank[0]['point']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Rank</th>
                                                    <td><?= $rank[0]['rank']; ?></td>
                                                </tr>
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
            
                                                    
           
                    
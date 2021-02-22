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
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Evaluasi Kelompok Ternak</h1>
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
                                            </style>
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Membentuk Perbandingan Berpasangan (X)</h1>
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
                                            </style>
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
                                                                    <td><?= $klp_ternak[$i]['evaluasi'][$j]['X']; ?></td>
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Perbandingan Berpasangan Ternormalisasi (R)</h1>
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
                                            </style>
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
                                                                    <td><?= $klp_ternak[$i]['evaluasi'][$j]['R']; ?></td>
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Menentukan Bobot tiap-tiap Kriteria (W)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="<?= count($kriteria) ?>" id="cssTable">Kriteria</th>
                                                    </tr>
                                                    <tr>
                                                        <?php foreach ($kriteria as $row) { ?>
                                                            <th id="cssTable"><?= $row['nm_kriteria']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < 1 ; $i++) { ?>
                                                            <tr>
                                                                <?php for ($j=0; $j < count($klp_ternak[$i]['evaluasi']) ; $j++) { ?>
                                                                    <td id="cssTable"><?= $klp_ternak[$i]['evaluasi'][$j]['weight']; ?></td>
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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

                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Membentuk Matrik Preferensi (V)</h1>
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
                                            </style>
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
                                                                    <td><?= $klp_ternak[$i]['evaluasi'][$j]['V']; ?></td>
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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

                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Menentukan Concordance Index (Ckl)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <?php if ($klp_ternak[$i]['Ckl'][$j] == "-") : ?>
                                                                        <td><?= $klp_ternak[$i]['Ckl'][$j]; ?></td>
                                                                    <?php else: ?>
                                                                        <td><?= implode(", ", $klp_ternak[$i]['Ckl'][$j]); ?></td>
                                                                    <?php endif; ?>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Menentukan Discordance Index (Dkl)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <?php if ($klp_ternak[$i]['Dkl'][$j] == "-") : ?>
                                                                        <td><?= $klp_ternak[$i]['Dkl'][$j]; ?></td>
                                                                    <?php else: ?>
                                                                        <td><?= implode(", ", $klp_ternak[$i]['Dkl'][$j]); ?></td>
                                                                    <?php endif; ?>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Membentuk Matriks Concordance (C)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <td><?= $klp_ternak[$i]['C'][$j]; ?></td>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Threshold c</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><?= $threshold_c ?></th>
                                                    </tr>
                                                </thead>
                                                        
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
                                            <h1>Membentuk Matrix Discordance (D)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <td><?= $klp_ternak[$i]['D'][$j]; ?></td>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Threshold d</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><?= $threshold_d ?></th>
                                                    </tr>
                                                </thead>
                                                        
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
                                            <h1>Membentuk Matrik Concordance Dominan (F)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <td><?= $klp_ternak[$i]['F'][$j]; ?></td>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Membentuk Matrik Discordance Dominan (G)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <td><?= $klp_ternak[$i]['G'][$j]; ?></td>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline8-list shadow-reset">
                                    <div class="sparkline8-hd">
                                        <div class="main-sparkline8-hd">
                                            <h1>Membentuk Matrik Agregasi Dominan (E)</h1>
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
                                            </style>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" width="300" id="cssTable">Alternatif</th>
                                                        <?php foreach ($klp_ternak as $row) { ?>
                                                            <th><?= $row['nama']; ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                    
                                                        <?php for ($i=0; $i < count($klp_ternak) ; $i++) { ?>
                                                            <tr>
                                                                <th><?= $klp_ternak[$i]['nama']; ?></th>
                                                                <?php for ($j=1; $j <= count($klp_ternak) ; $j++) { ?>
                                                                    <td><?= $klp_ternak[$i]['E'][$j]; ?></td>
                                                                    
                                                                <?php } ?>
                                                            </tr>
                                                        <?php } ?>
                                                    
                                                <tbody>
                                                    
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
                        
                <!-- Static Table Start -->
                <div class="static-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Ranking</h1>
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
                                                    <th>Rank</th>
                                                    <th>Nama Kelompok Ternak</th>
                                                    <th>Poin</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($hasil as $key => $value) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $key ?></td>
                                                    <td><?= $value ?></td>
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
                    
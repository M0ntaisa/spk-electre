<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style type="text/css" media="print">
        body {
            font-family : Arial;
            font-size : 12px;
        }

        .cetak {
            width : 19cm;
            height : 27cm;
            padding : 1cm;
        }
        
        table {
            border : solid thin #000;
            border-collapse : collapse;
        }

        td, th {
            padding : 3mm 6mm;
            text-align : left;
            vertical-align : top;
        }

        th {
            background-color : #f5f5f5;
            font-weight : bold;
        }

        h1 {
            text-align : center;
            font-size : 18px;
            text-transform : uppercase;
        }
    </style>
    <style type="text/css" media="screen">
        body {
            font-family : Arial;
            font-size : 12px;
        }

        .cetak {
            width : 19cm;
            height : 27cm;
            padding : 1cm;
        }
        
        table {
            border : solid thin #000;
            border-collapse : collapse;
        }

        td, th {
            padding : 3mm 6mm;
            text-align : left;
            vertical-align : top;
        }

        th {
            background-color : #f5f5f5;
            font-weight : bold;
        }

        h1 {
            text-align : center;
            font-size : 18px;
            text-transform : uppercase;
        }

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
</head>
<body onload="print()">
    
<div class="row">
    <div class="cetak">
        <h4>Data Kelompok</h4>
        <table id="tableKlp" class="table table-bordered" id="example3" align="center">
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
        <br>
        <h4>Data Evaluasi</h4>
        <table class="table table-bordered" id="example3" align="center">
            <thead>
                <tr>
                    <th rowspan="2" width="150" id="cssTable">Alternatif</th>
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
        <br>
        <h4>Hasil Evaluasi</h4>
        <table class="table table-bordered" id="example3" align="center">
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
        <br>
        <table align="center" style="border:0px;">
            <tr>
                <td width="600" align="justify">
                <p>
                    Berdasarkan hasil perhitungan yang telah dilakukan, didapatlah hasil akhir seperti yang tertera diatas. <b></b>.
                </p>
                </td>
            </tr>
            </table>
            <br />
    
    
            
    
            <table style="border:0px;">
            <tr>
                <td width="400"></td>
                <td>
                <p>Pinrang, </p>
                <p>Menyetujui,</p>
                <p>Kepala Dinas Peternakan Dan Perkebunan Kabupaten Pinrang</p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <p class="nama">NIP</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
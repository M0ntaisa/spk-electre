</div>
	<!-- //banner -->

	<!-- page details -->
	<div class="breadcrumb-agile">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?= base_url('home') ?>">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Hasil</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- about -->
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">List Hasil</h3>
			
			<div class="row pt-lg-4">
				<div class="col-xl-4 aboutright">
					<!-- <img src="images/about.jpg" alt="" class="img-fluid"> -->
				</div>
				
				<div class="col-xl-6 aboutleft ml-xl-4 mt-lg-3 mt-4">
					<style>
						#cssTable {
							padding: 15px;
						}
					</style>
				<table border="1">
					<thead>
						<tr>
							<th id="cssTable">#</th>
							<th id="cssTable">Waktu Evaluasi</th>
							<th id="cssTable">Nama Kelompok</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($top_rank as $row) { ?>
							<tr>
								<td id="cssTable"><?= $no++; ?></td>
								<td id="cssTable"><?= date( "d/m/Y H:i:s", strtotime($row['time_proc'])) ?></td>
								<td id="cssTable"><?= $row['nama']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-<?= $nik; ?>">
    <i class="fa fa-edit"></i> Edit
</button>

<div id="edit-<?= $nik; ?>" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#" style="background-color:orange;"><i class="fa fa-close"></i></a>
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
                                                    <?= form_open_multipart(base_url('user/info/edit_anggota')); ?>
                                                    <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">NIK</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $row['nik'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Nama Anggota</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?= $row['nama_anggota'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 pull-left pull-left-pro">Tempat Lahir</label>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $var[0] ?>" required>
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
                                                                    <input type="text" class="form-control" value="<?= $var[1] ?>" id="tanggal_lahir" name="tanggal_lahir" required>
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
                                                                        <option value="Islam" <?php echo $row['agama'] == "Islam" ? 'selected' : ''; ?>>Islam</option>
                                                                        <option value="Kristen" <?php echo $row['agama'] == "Kristen" ? 'selected' : ''; ?>>Kristen</option>
                                                                        <option value="Hindu" <?php echo $row['agama'] == "Hindu" ? 'selected' : ''; ?>>Hindu</option>
                                                                        <option value="Budha" <?php echo $row['agama'] == "Budha" ? 'selected' : ''; ?>>Budha</option>
                                                                        <option value="Katolik" <?php echo $row['agama'] == "Katolik" ? 'selected' : ''; ?>>Katolik</option>
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
                                                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat'] ?>" required>
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
                                                                        <option value="Belum kawin" <?php echo $row['st_perkawinan'] == "Belum kawin" ? 'selected' : ''; ?>>Belum kawin</option>
                                                                        <option value="Kawin" <?php echo $row['st_perkawinan'] == "Kawin" ? 'selected' : ''; ?>>Kawin</option>
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
                                                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $row['pekerjaan'] ?>" required>
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
                                    <!-- </div> -->
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
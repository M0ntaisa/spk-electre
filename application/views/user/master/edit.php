
<button type="button" class="form-control btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">
    <i class="fa fa-edit"></i> Edit
</button>

<div id="edit" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
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
                                                <?= form_open_multipart(base_url('user/info/tambah_berkas')); ?>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label class="login2 pull-left pull-left-pro">Proposal Kelompok *pdf</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                        <div class="input append-big-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input type="file" name="prop_klp" onchange="document.getElementById('append-big-btn').value = this.value;">
                                                                            </div>
                                                                            <input type="text" id="append-big-btn" placeholder="no file selected">
                                                                        </div>
                                                                    </div>
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
                                                                            <button class="btn btn-sm btn-warning login-submit-cs" type="submit">Edit</button>
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
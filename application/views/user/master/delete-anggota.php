
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-<?= $nik; ?>">
    <i class="fa fa-trash"></i> Hapus
</button>

<div id="delete-<?= $nik; ?>" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
                <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                <h2>Hapus Data!</h2>
                <p>Anda Yakin Ingin Menghapus Data Ini?</p>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Batal</a>
                <a href="<?= base_url('user/info/hapus_anggota/'.$nik) ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md mt-3">
            <h3>Detail AKun</h3>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data<strong> akun</strong></strong> Berhasil <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-5 mb-3">
        <div class="col-md-6">
            <a href="<?= base_url('akun/index'); ?>" class="btn btn-success">BACK</a>
            <a href="<?= base_url('akun/editakun/' . $detail_akun->id_akun) . ''; ?>" class="btn btn-success">EDIT</a>
            <a href="<?= base_url('akun/hapusakun/' . $detail_akun->id_akun); ?>" class="btn btn-danger" onclick="confirm('Yakin')">HAPUS</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail_akun->nama_akun; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $detail_akun->id_akun; ?></h6>
                    <p class="card-text"><?= $detail_akun->ket_akun; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
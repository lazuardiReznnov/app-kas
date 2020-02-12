<div class="container">
    <div class="row mt-2 mb-2">
        <div class="col-md">
            <h3>DAFTAR AKUN</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h3>List Akun</h3>
            <hr>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formAkun">
                TAMBAH AKUN
            </button>
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
    <?php if (validation_errors()) : ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= validation_errors(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mb-4">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($list_akun as $la) :; ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $la['id_akun'] . "-" . $la['nama_akun']; ?>
                        <a href="<?= base_url('akun/detailakun/' . $la['id_akun'] . ''); ?>" class="badge badge-primary badge-pill">DETAIL</a>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formAkun" tabindex="-1" role="dialog" aria-labelledby="Form AKun" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formAkun">FORM TAMBAH AKUN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="Kode Akun">Kode Akun</label>
                        <input type="text" class="form-control" id="Kode Akun" placeholder="Masukan Kode akun" name="id_akun">
                    </div>
                    <div class="form-group">
                        <label for="Nama Akun">Nama Akun</label>
                        <input type="text" class="form-control" id="Nama Akun" placeholder="Masukan Nama akun" name="nama_akun">
                    </div>
                    <div class="form-group">
                        <label for="ket_akun">Keterangan</label></label>
                        <textarea class="form-control" id="ket_akun" rows="3" name="ket_akun"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
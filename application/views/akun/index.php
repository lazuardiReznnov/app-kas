<div class="container">
    <div class="row mt-2 mb-2">
        <div class="col-md">
            <h3>DAFTAR AKUN</h3>
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
    <div class="row mb-4">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach ($list_akun as $la) :; ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $la['id_akun'] . "-" . $la['nama_akun']; ?>
                        <a href="akun/detail/<?= $la['id_akun']; ?>" class="badge badge-primary badge-pill">DETAIL</a>

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
                        <input type="text" class="form-control" id="Kode Akun" placeholder="Kode akun">
                    </div>
                    <div class="form-group">
                        <label for="Nama Akun">Nama Akun</label>
                        <input type="text" class="form-control" id="Nama Akun" placeholder="Nama akun">
                    </div>
                    <div class="form-group">
                        <label for="ket_akun">Example textarea</label>
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
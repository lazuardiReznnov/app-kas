<div class="container">
    <div class="row mt-5">
        <div class="col mt-5">
            <a href="<?= base_url('akun/detailakun/' . $list_akun->id_akun . ''); ?>" class="btn btn-success">BACK</a>
        </div>
    </div>
    <div class="row mt-2 mb-3">
        <div class="col mt-4">
            <h3>EDIT AKUN</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="">
                <input type="hidden" name="id_akun" value="<?= $list_akun->id_akun; ?>">
                <div class="form-group">
                    <label for="Kode Akun">Kode Akun</label>
                    <input type="text" class="form-control" id="Kode Akun" placeholder="Masukan Kode akun" name="id_akun" value="<?= $list_akun->id_akun; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="Nama Akun">Nama Akun</label>
                    <input type="text" class="form-control" id="Nama Akun" placeholder="Masukan Nama akun" name="nama_akun" value="<?= $list_akun->nama_akun; ?>">
                </div>
                <div class="form-group">
                    <label for="ket_akun">Keterangan</label></label>
                    <textarea class="form-control" id="ket_akun" rows="3" name="ket_akun"><?= $list_akun->ket_akun; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="simpan" value="UPDATE" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
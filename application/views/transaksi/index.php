<div class="container">
    <div class="row mt-5">
        <div class="col-md mt-3">
            <h3>Transaksi Kas</h3>
            <hr>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addTrans">Add Transaksi</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- <a class="btn btn-primary" href="<?= base_url('transaksi/addtrans'); ?>">Add Transaksi</a> -->
        </div>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-md">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Akun</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col" class="text-right">Debit</th>
                        <th scope="col" class="text-right">Kredit</th>
                        <th scope="col" class="text-right">saldo</th>
                        <th scope="col" class="text-center">#</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_trans as $lt) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $lt['id_akun'] . "&nbsp" . $lt['nama_akun']; ?></td>
                            <td><?= $this->pustaka->tgl_indo($lt['tgl_kas']); ?></td>
                            <td><?= $lt['ket_kas']; ?></td>

                            <?php if ($lt['type'] == 'D') {
                                $debit = $lt['jml'];
                                $kredit = 0;
                            } elseif ($lt['type'] == 'K') {
                                $debit = 0;
                                $kredit = $lt['jml'];
                            }
                            ?>
                            <td class="text-right">
                                <?= $this->pustaka->rupiah($debit); ?>
                            </td>
                            <td class="text-right">
                                <?= $this->pustaka->rupiah($kredit); ?>
                            </td>
                            <?php
                            $saldo = 0;
                            $saldo = $saldo + $kredit - $debit; ?>
                            <td class="text-right"><?= $this->pustaka->rupiah($saldo); ?></td>
                            <td class="text-center"><a href="#">Edit</a> | <a href="#">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addTrans" tabindex="-1" role="dialog" aria-labelledby="addTrans" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddTrans">FORM ADD TRANSAKSI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" placeholder="YYYY-MM-DD" name="tgl">
                    </div>
                    <div class="form-group">
                        <label for="akun">Pilih Akun</label>
                        <select class="form-control" id="akun" name="akun">
                            <?php foreach ($akun as $kn) :; ?>
                                <option value="<?= $kn['id_akun']; ?>"><?= $kn['nama_akun']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>keterangan</label>
                        <input type="text" class="form-control" id="ket" placeholder="keterangan Transaksi" name="ket">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="type" value="k" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">kredit</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="type" value="d" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Debit</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" id="ket" placeholder="Jumlah" name="jumlah">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button></button>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
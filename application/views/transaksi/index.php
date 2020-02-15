<div class="container">
    <div class="row mt-5">
        <div class="col-md mt-3">
            <h3>Transaksi Kas</h3>
            <hr>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a class="btn btn-primary" href="<?= base_url('transaksi/addtrans'); ?>">Add Transaksi</a>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
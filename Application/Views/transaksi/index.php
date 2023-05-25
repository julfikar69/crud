<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
    <a href="<?= BASE_URL ?>/<?= $data['judul'] ?>/create">
        <button class='btn btn-primary'>Tambah</button>
    </a>
</div>
<div class="table-responsive">
    <table class="table" class="table table-striped table-sm" aria-label="tabel rekening">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kategori</th>
                <th scope="col">Rekening</th>
                <th scope="col">Jumlah</th>
                <th scope="col">keterangan</th>
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data['data'] as $d) {
            ?>
                <tr>
                    <td><?= $no++ ?></th>
                    <td><?= $d->kategori ?></td>
                    <td><?= $d->rekening ?></td>
                    <td><?= $d->jumlah ?></td>
                    <td><?= $d->keterangan ?></td>
                    <td><?= $d->tanggal ?></td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

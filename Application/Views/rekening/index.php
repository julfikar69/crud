<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
    <a href="<?= BASE_URL ?>/<?= $data['judul']?>/create">
        <button class='btn btn-primary'>Tambah</button>
    </a>
</div>
<div class="table-responsive">
    <table class="table" class="table table-striped table-sm" aria-label="tabel rekening">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Rekening</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diubah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data['data'] as $d) {
            ?>
                <tr>
                    <td><?= $no++ ?></th>
                    <td><?= $d->rekening ?></td>
                    <td><?= $d->created_at ?></td>
                    <td><?= $d->updated_at ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/rekening/destroy/<?= $d->id ?>">Hapus</a>
                        <a href="<?= BASE_URL ?>/rekening/edit/<?= $d->id ?>">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
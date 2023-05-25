<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
</div>

<form action="<?= BASE_URL ?>/kategori/update" method="post">
    <input type="hidden" name="id" value="<?= $data['data']->id ?>">
    <div class="form-group">
        <label for="Rekening">Rekening</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $data['data']->kategori ?>">
    </div>
    <br />
    <div class="form-group">
        <label for="Tipe">Tipe</label>
        <select class="form-control" name="tipe" id="tipe">
            <?php
            if (isset($data['data']->tipe)) {
            ?>
                <option value="<?= $data['data']->tipe ?>"><?= $data['data']->tipe ?></option>
            <?php } else { ?>
                <option value="">== Tipe ==</option>
            <?php } ?>
            <option value="pendapatan">pendapatan</option>
            <option value="pengeluaran">pengeluaran</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <button type="submit">Edit</button>
    </div>
</form>
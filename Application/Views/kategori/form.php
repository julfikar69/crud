<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
</div>
<form action="<?= BASE_URL ?>/kategori/store" method="post">
    <div class="form-group">
        <label for="Kategori">Kategori</label>
        <input type="text" class="form-control" id="kategori"
         name="kategori">
    </div>
    <br />
    <div class="form-group">
        <label for="Tipe">Tipe</label>
        <select class="form-control" name="tipe" id="tipe">
            <option value="">== Tipe ==</option>
            <option value="pendapatan">pendapatan</option>
            <option value="pengeluaran">pengeluaran</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <button type="submit">Tambah</button>
    </div>
</form>

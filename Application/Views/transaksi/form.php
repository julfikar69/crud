<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
</div>
<form action="<?= BASE_URL ?>/transaksi/store" method="post">
    <div class="form-group">
        <label for="Kategori">Kategori</label>
        <select class="form-control" name="kategori" id="kategori">
            <option value="">== Kategori ==</option>
            <?php foreach ($data['kategori'] as $k) { ?>
                <option value="<?= $k->id ?>"><?= $k->kategori ?></option>
            <?php } ?>
        </select>
    </div>
    <br />
    <div class="form-group">
        <label for="Rekening">Rekening</label>
        <select class="form-control" name="rekening" id="rekening">
            <option value="">== Rekening ==</option>
            <?php foreach ($data['rekening'] as $r) { ?>
                <option value="<?= $r->id ?>"><?= $r->rekening ?></option>
            <?php } ?>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="Jumlah">Jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah">
    </div>
    <br />
    <div class="form-group">
        <label for="Keterangan">Keterangan</label>
        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
    </div>
    <br />
    <div class="row">
        <div class="form-group col-6">
            <label for="Tanggal">Tanggal</label>
            <input class="form-control" type="date" name="tanggal" id="tanggal">
        </div>
        <div class="form-group col-6">
            <label for="Jam">Jam</label>
            <input class="form-control" type="time" name="jam" id="jam">
        </div>
    </div>
    <br>
    <div class="form-group">
        <button type="submit">Tambah</button>
    </div>
</form>
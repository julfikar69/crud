<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
</div>
<form action="<?= BASE_URL ?>/rekening/store" method="post">
    <div class="form-group">
        <label for="Rekening">Rekening</label>
        <input type="text" class="form-control" id="rekening"
         name="rekening" placeholder="Contoh: BNI, Gopay, LinkAja, etc.">
    </div>
    <br />
    <div class="form-group">
        <label for="Saldo Awal">Saldo Awal</label>
        <input type="number" class="form-control" id="saldo_awal"
         name="saldo_awal" placeholder="Contoh: 1000000">
    </div>
    <br>
    <div class="form-group">
        <button type="submit">Tambah</button>
    </div>
</form>

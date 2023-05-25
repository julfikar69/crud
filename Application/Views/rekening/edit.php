<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
       align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $data['judul'] ?></h1>
</div>

<form action="<?= BASE_URL ?>/rekening/update" method="post">
    <input type="hidden" name="id" value="<?= $data['data']->id ?>">
    <div class="form-group">
        <label for="Rekening">Rekening</label>
        <input type="text" class="form-control" id="rekening" name="rekening" value="<?= $data['data']->rekening ?>">
    </div>
    <br>
    <div class="form-group">
        <button type="submit">Edit</button>
    </div>
</form>

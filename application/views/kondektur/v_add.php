<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/kondektur/createData" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Kondektur</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
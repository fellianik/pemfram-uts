<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/driver/createData" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Kondektur</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="no_sim" class="form-label">No SIM</label>
        <input type="text" class="form-control" name="no_sim" placeholder="no sim">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="alamat">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/driver/update" method="post">
    <div class="mb-3">
        <!-- <label for="id_driver" class="form-label">id driver</label> -->
        <input type="hidden" class="form-control" name="id_driver" value="<?php echo $result->id_driver; ?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Driver</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $result->nama; ?>">
    </div>
    <div class="mb-3">
        <label for="no_sim" class="form-label">No SIM</label>
        <input type="text" class="form-control" name="no_sim" value="<?php echo $result->no_sim; ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $result->alamat; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
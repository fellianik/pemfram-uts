<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/bus/createData" method="post">
    <div class="mb-3">
        <label for="plat" class="form-label">plat</label>
        <input type="text" class="form-control" name="plat" placeholder="plat">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">status</label>
        <input type="text" class="form-control" name="status" placeholder="status">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
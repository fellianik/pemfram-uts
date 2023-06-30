<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/bus/update" method="post">
    <div class="mb-3">
        <!-- <label for="plat" class="form-label">plat</label> -->
        <input type="hidden" class="form-control" name="id_bus" value="<?php echo $result->id_bus; ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="plat" class="form-label">Plat</label>
        <input type="text" class="form-control" name="plat" value="<?php echo $result->plat; ?>">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <!-- <input type="text" class="form-control" name="status" value="<?php echo $result->status; ?>"> -->
        <select class="form-select" name="status">
            <option value="<?php echo $result->status; ?>"><?php echo $result->status; ?></option>
            <option>Pilih status</option>
            <option value="1">Aktif / Beroperasi</option>
            <option value="2">Cadangan</option>
            <option value="0">Perbaikan / Rusak</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">edit</button>
</form>
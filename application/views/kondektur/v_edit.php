<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/kondektur/update" method="post">

    <div class="mb-3">
        <!-- <label for="nama" class="form-label">Nama Kondektur</label> -->
        <input type="hidden" class="form-control" name="id_kondektur" value="<?php echo $result->id_kondektur; ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Kondektur</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $result->nama; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>
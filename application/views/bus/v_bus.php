<!-- <div class="pt-3"> -->

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-primary me-2" onclick="window.location.href='<?php echo base_url('index.php/bus/tambah') ?>';">Tambah <?php echo $title ?></button>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            This week
        </button>
    </div>
</div>

<form action="<?php echo base_url() ?>/index.php/Bus/filter" method="post">
    <div class="row mb-3">
        <div class="col">

            <select class="form-select" name="status">
                <option value="*">Pilih status</option>
                <option value="1">Aktif / Beroperasi</option>
                <option value="2">Cadangan</option>
                <option value="0">Perbaikan / Rusak</option>
            </select>
        </div>
        <div class="col-1">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
        <div class="col-1">
            <a type="button" class="btn btn-danger" href="<?php echo base_url('index.php/bus') ?>">Reset</a>
        </div>
    </div>
</form>


<table class="table table-bordered table-hover table-sm text-center">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">Id Bus</th> -->
            <th scope="col">Plat</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($bus as $key) {
            $count = $count + 1;
        ?>
            <?php if ($key->status == 1) : ?>
                <tr class="table-success">
                <?php elseif ($key->status == 2) : ?>
                <tr class="table-info">
                <?php elseif ($key->status == 0) : ?>
                <tr class="table-danger">
                <?php endif ?>

                <td><?php echo $count ?></td>
                <!-- <td><?php echo $key->id_bus ?></td> -->

                <td><?php echo $key->plat ?></td>

                <?php if ($key->status == 1) : ?>
                    <td><?php echo $key->status = "Aktif" ?></td>
                <?php elseif ($key->status == 2) : ?>
                    <td><?php echo $key->status = "Cadangan" ?></td>
                <?php elseif ($key->status == 0) : ?>
                    <td><?php echo $key->status = "Rusak / Perbaikan" ?></td>
                <?php endif ?>

                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-warning me-2" href="<?php echo site_url('bus/edit/' . $key->id_bus); ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo site_url('bus/delete/' . $key->id_bus); ?>">Hapus</a>
                </td>
                </tr>
            <?php  } ?>
    </tbody>
</table>
<!-- </div> -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-primary me-2" onclick="window.location.href='<?php echo base_url('index.php/kondektur/tambah') ?>';">Tambah <?php echo $title ?></button>
    </div>
</div>

<table class="table table-bordered table-striped table-hover table-sm text-center">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">ID Kondektur</th> -->
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($kondektur as $key) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <!-- <td><?php echo $key->id_kondektur ?></td> -->
                <td><?php echo $key->nama ?></td>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-warning me-2" href="<?php echo site_url('kondektur/edit/' . $key->id_kondektur); ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo site_url('kondektur/delete/' . $key->id_kondektur); ?>">Hapus</a>
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>
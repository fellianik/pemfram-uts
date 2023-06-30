<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard <?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-primary me-2" onclick="window.location.href='<?php echo base_url('index.php/transupn/tambah') ?>';">Tambah <?php echo $title ?></button>
    </div>
</div>

<table class="table table-bordered table-hover table-sm text-center table-striped">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">ID Trans UPN</th> -->
            <th scope="col">Kondektur</th>
            <th scope="col">Bus</th>
            <th scope="col">Driver</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($transupn as $key) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <!-- <td><?php echo $key->id_trans_upn ?></td> -->
                <td><?php echo $key->id_kondektur ?></td>
                <td><?php echo $key->id_bus ?></td>
                <td><?php echo $key->id_driver ?></td>
                <td><?php echo $key->tanggal ?></td>
                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-info me-2" href="<?php echo site_url('transupn/detail/' . $key->id_trans_upn); ?>">Detail</a>
                    <a class="btn btn-sm btn-warning me-2" href="<?php echo site_url('transupn/edit/' . $key->id_trans_upn); ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo site_url('transupn/delete/' . $key->id_trans_upn); ?>">Hapus</a>
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>
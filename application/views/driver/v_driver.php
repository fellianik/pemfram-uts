<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-outline-primary me-2" onclick="window.location.href='<?php echo base_url('index.php/driver/tambah') ?>';">Tambah <?php echo $title ?></button>
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

<table class="table table-bordered table-striped table-hover table-sm text-center">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">ID Driver</th> -->
            <th scope="col">Nama</th>
            <th scope="col">Nomor SIM</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($driver as $key) {
            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $count ?></td>
                <!-- <td><?php echo $key->id_driver ?></td> -->

                <td><?php echo $key->nama ?></td>

                <td><?php echo $key->no_sim ?></td>

                <td><?php echo $key->alamat ?></td>

                <td class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-warning me-2" href=" <?php echo site_url('driver/edit/' . $key->id_driver); ?>">Edit</a>
                    <a class=" btn btn-sm btn-danger" href="<?php echo site_url('driver/delete/' . $key->id_driver); ?>">Hapus</a>
                </td>
            </tr>
        <?php  } ?>
    </tbody>
</table>
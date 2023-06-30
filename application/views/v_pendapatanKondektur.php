<?php
$arr = [];
foreach ($transupn as $key) {
    array_push($arr, $key->jumlah_km);
};
$total = 0;
foreach ($arr as $item) {
    $total += $item;
};
$pendapatan = $total * 1500;

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menghitung Pendapatan <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/PendapatanKondektur/filter" method="post">
    <div class="mb-3">
        <select name="id_kondektur" class="form-select">
            <option>Pilih Kondektur</option>
            <?php foreach ($kondektur as $item) : ?>
                <option value="<?php echo $item->id_kondektur ?>">
                    <?php echo $item->nama ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary mb-3">Filter</button>
    <a type="button" class="btn btn-danger mb-3" href="<?php echo base_url('index.php/pendapatan/kondektur') ?>">Reset</a>
</form>

<h5>Jumlah KM yang telah ditempuh: <?php echo $total ?> KM </h5>
<h5>Pendapatan yang didapat: Rp. <?php echo $pendapatan ?></h5>

<table class="table table-bordered table-hover table-sm text-center table-striped">
    <thead class="table-secondary">
        <tr>
            <th scope="col">No</th>
            <!-- <th scope="col">ID Trans UPN</th> -->
            <th scope="col">Kondektur</th>
            <th scope="col">Bus</th>
            <th scope="col">Driver</th>
            <th scope="col">Jumlah KM</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (base_url('/index.php')) : ?>
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
                    <td><?php echo $key->jumlah_km ?></td>
                    <td class="d-flex justify-content-center">
                        <a class="btn btn-sm btn-info me-2" href="<?php echo site_url('transupn/detail/' . $key->id_trans_upn); ?>">Detail</a>
                        <a class="btn btn-sm btn-warning me-2" href="<?php echo site_url('transupn/edit/' . $key->id_trans_upn); ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="<?php echo site_url('transupn/delete/' . $key->id_trans_upn); ?>">Hapus</a>
                    </td>
                </tr>
            <?php  } ?>
        <?php else : ?>
            <?php
            $count = 0;
            foreach ($transupn as $key) {
                $count = $count + 1;
            ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <!-- <td><?php echo $transupn->id_trans_upn ?></td> -->
                    <td><?php echo $key->id_kondektur ?></td>
                    <td><?php echo $key->id_bus ?></td>
                    <td><?php echo $key->id_driver ?></td>
                    <td><?php echo $key->jumlah_km ?></td>
                    <td class="d-flex justify-content-center">
                        <a class="btn btn-sm btn-info me-2" href="<?php echo site_url('transupn/detail/' . $key->id_trans_upn); ?>">Detail</a>
                        <a class="btn btn-sm btn-warning me-2" href="<?php echo site_url('transupn/edit/' . $key->id_trans_upn); ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="<?php echo site_url('transupn/delete/' . $key->id_trans_upn); ?>">Hapus</a>
                    </td>
                </tr>
            <?php  } ?>
        <?php endif ?>
    </tbody>
</table>
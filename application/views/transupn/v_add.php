<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data <?php echo $title ?></h1>
</div>

<form action="<?php echo base_url() ?>index.php/transupn/createData" method="post">
    <div class="mb-3">
        <label for="id_kondektur" class="form-label"> Kondektur</label>
        <select name="id_kondektur" class="form-select">
            <option>Pilih</option>
            <?php foreach ($kondektur as $item) : ?>
                <option value="<?php echo $item->id_kondektur ?>">
                    <?php echo $item->nama ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="id_bus" class="form-label">bus</label>
        <select name="id_bus" class="form-select">
            <option>Pilih</option>
            <?php foreach ($bus as $item) : ?>
                <option value="<?php echo $item->id_bus ?>">
                    <?php echo $item->plat ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="id_driver" class="form-label">driver</label>
        <select name="id_driver" class="form-select">
            <option>Pilih</option>
            <?php foreach ($driver as $item) : ?>
                <option value="<?php echo $item->id_driver ?>">
                    <?php echo $item->nama . " : " . $item->alamat ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="jumlah_km" class="form-label">jumlah km</label>
        <input type="text" class="form-control" name="jumlah_km" placeholder="jumlah km">
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" name="tanggal">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
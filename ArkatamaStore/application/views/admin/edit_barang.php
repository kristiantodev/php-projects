<?= form_open_multipart('admin/update_barang/' . $admin[0]['id_barang']); ?>
<div class="mb-3">

    <label for="nama_barang">Nama Produk/Layanan</label>
    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= $admin[0]['nama_barang']; ?>">
    <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="mb-3">
    <label for="keterangan_barang">Keterangan</label>
    <input type="text" name="keterangan_barang" id="keterangan_barang" class="form-control" value="<?= $admin[0]['keterangan_barang']; ?>">
    <?= form_error('keterangan_barang', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="mb-3">
    <label for="nama_kategori">Kategori</label>
    <select class="form-control" name="id_kategori" id="id_kategori" required>
        <?php foreach ($isiKategori as $key => $value) { ?>
            <option value="<?= $value['id_kategori']; ?>" <?= ($value['id_kategori'] == $admin[0]['id_kategori']) ? 'selected' : ''; ?>><?= $value['nama_kategori']; ?></option>
        <?php } ?>
    </select>
</div>
<div class="mb-3">
    <label for="harga_barang">Harga</label>
    <input type="text" name="harga_barang" id="harga_barang" class="form-control" value="<?= $admin[0]['harga_barang']; ?>">
    <?= form_error('harga_barang', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="mb-3">
    <label for="gambar_barang">Gambar</label>
    <input class="form-control" type="file" id="gambar_barang" name="gambar_barang" value="<?= $admin[0]['gambar_barang']; ?>">
</div>
</div>
<div class="mb-5">
    <a href="<?= base_url('admin'); ?>" class="btn btn-danger">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
<?= form_close() ?>
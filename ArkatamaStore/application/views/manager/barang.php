<?php
// Notif gagal input
echo validation_errors('<div class="alert alert-danger">', '</div>');

// notif data masuk db
if ($this->session->flashdata('pesan')) {
    echo $this->session->flashdata('pesan');
}
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk/Layanan</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($admin as $key => $value) { ?>



            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['nama_barang']; ?></td>
                <td><?= $value['keterangan_barang']; ?></td>
                <td>Rp. <?= number_format($value['harga_barang'], 0, ',', '.');  ?></td>
                <td><?= $value['nama_kategori']; ?></td>
                <td><img src="<?= base_url('uploads/') . $value['gambar_barang']; ?>" alt="gambar Produk" width="200" height="180"></td>
                <td>
                    <?php if ($value['status_produk'] == 'BS') { ?>
                        <a class='btn btn-primary' href='<?= base_url('manager/setujui_produk/' . $value['id_barang']); ?>'>Setujui</a>
                    <?php } ?>
                    <a onclick='return confirm("Apakah anda yakin menghapus data ini?")' class='btn btn-danger' href='<?= base_url('admin/delete_barang/' . $value['id_barang']); ?>'>Hapus</i></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>
<?php
// Notif gagal input
echo validation_errors('<div class="alert alert-danger">', '</div>');

// notif data masuk db
if ($this->session->flashdata('pesan')) {
    echo $this->session->flashdata('pesan');
}
?>
<table class="table table-hover">
    <thead align="center">
        <tr>
            <th>No</th>
            <th>Judul </th>
            <th>Teks </th>
            <th>Gambar </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($hero as $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td style="width: 300px;"><?= $value->judul_hero; ?></td>
                <td style="width: 300px;"><?= $value->teks_hero; ?></td>
                <td><img src="<?= base_url('gambar/hero/') . $value->gambar_hero; ?>" alt="gambar hero" width="200" height="180"></td>
                <td>
                    <a onclick='return confirm("Apakah anda yakin menghapus data ini?")' class='btn btn-danger' href='<?= base_url('hero/hapus_hero/' . $value->id_hero); ?>'>Hapus</a>
                    <?php if ($value->status_hero == 'BS') { ?>
                        <a class='btn btn-primary' href='<?= base_url('manager/setujui/' . $value->id_hero); ?>'>Setujui</i></a>
                    <?php } ?>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>
<link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" />
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h3 class="page-title"><b><i class="fas fa-shopping-bag"></i>&nbsp; Riwayat Pembelian</b></h3>
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item active">Lapak Toko Sayur Mayur Om Hendrik</li> -->
                        </ol>

                        <div class="state-information d-none d-sm-block">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <form action="<?php echo site_url('adm/pembelian'); ?>" method="post">
                                <table class="table table-striped table-bordered dt-responsive nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <td>
                                                Pilih Bulan : <select name="bulan" id="select" required class="form-control">
                                                    <option value="">-- Pilih Bulan --</option>
                                                    <?php

                                                    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


                                                    for ($i = 0; $i < 12; $i++) {

                                                    ?>
                                                        <option value="<?php echo $i + 1; ?>"><?php echo $bulan[$i]; ?></option>
                                                    <?php } ?>

                                            </td>
                                            <td>Pilih Tahun : <select name="tahun" id="select" required class="form-control">
                                                    <option value="">-- Pilih Tahun --</option>
                                                    <?php

                                                    for ($u = 2015; $u <= 2025; $u++) {

                                                    ?>
                                                        <option value="<?php echo $u; ?>"><?php echo $u; ?></option>
                                                    <?php } ?>
                                                </select></td>
                                            <td>
                                                <button type="submit" class="btn btn-primary" style="background-color: #00ff2a;color:#fff;border:none;">
                                                    <i class="fa fa-search"></i>&nbsp; Filter
                                                </button>

                            </form>


                            <a href="<?php echo site_url(); ?>adm/pembelian">
                                <button type="button" class="btn btn-primary waves-effect waves-light" style="background-color: #00ff2a;color:#fff;border:none;">
                                    <i class="fa fa-print"></i> Reset Filter</button>
                            </a>

                            </td>
                            </tr>
                            </thead>
                            </table>
                            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="9"><b>No</b></th>
                                        <th><b>ID Transaksi</b></th>
                                        <th><b>Tanggal Transaksi</b></th>
                                        <th><b>Sayur yang dibeli</b></th>
                                        <th><b>Total</b></th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $no = 1;
                                    $totalTransaksi = 0;
                                    foreach ($transaksiku as $t) : ?>

                                        <?php
                                        $listSayur = $this->db->query("SELECT*FROM keranjang LEFT JOIN sayur ON sayur.id_sayur=keranjang.id_sayur WHERE keranjang.status=2 AND id_transaksi='$t->id_transaksi' AND keranjang.deleted=0")->result();
                                        
                                        $totalTransaksi += $t->total;
                                        ?>


                                        <tr>
                                            <td width="7" align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $t->id_transaksi ?></td>
                                            <td><?php echo $t->tgl_transaksi ?></td>
                                            <td>
                                                <?php foreach ($listSayur  as $s) : ?>
                                                    <ul>
                                                        <li><?php echo $s->nm_sayur ?> | Qty : <?php echo $s->qty ?> | Rp. <?php echo $s->harga ?> </li>
                                                    </ul>
                                                <?php endforeach; ?>
                                            </td>
                                            <td align="center">Rp. <?php echo $t->total ?></td>

                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td align="left" colspan="4"> <b>Total Transaksi</b></td>
                                        <td align="center">Rp . <?= $totalTransaksi; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->






    </div>
    <!-- end page content-->

</div> <!-- container-fluid -->

</div> <!-- content -->

<?php $no = 1;
foreach ($transaksiku as $t) : ?>
    <div class="modal fade text-left" id="bb-see<?= $t->id_transaksi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h6 class="modal-title">
                        <font color='white'>Bukti Pembayaran</font>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <?php if ($t->file_pembayaran == "default.png") { ?>
                        <center>
                            <img src="<?php echo base_url('assets/images/bukti/' . $t->file_pembayaran) ?>" height="450"><br>Tidak ada file pembayaran yang dilampirkan
                        </center>
                    <?php } else { ?>
                        <embed src="<?php echo base_url('assets/images/bukti/' . $t->file_pembayaran) ?>" width="750px" height="450px" />
                    <?php } ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal" value="close">
                        <i class="fas fa-times"></i>&nbsp;Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<!-- modal -->
<div class="modal modal-success fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">
                    <font color='white'>Konfirmasi Pembayaran</font>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan mengkonfirmasi pembayaran ini ?</p>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" data-dismiss="modal">
                    <font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font>
                </a>
                <a href="#" id="btn-delete" type="button" class="btn btn-success mr-1"><i class="fas fa-check"></i>&nbsp;Konfirmasi</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
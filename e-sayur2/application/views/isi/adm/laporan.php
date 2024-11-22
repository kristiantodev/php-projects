<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
    function printDiv(elementId) {
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>
<link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" />
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h3 class="page-title"><b><i class="fas fa-folder-open"></i>&nbsp; Laporan Penjualan</b></h3>
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

                            <form action="<?php echo site_url('adm/laporan'); ?>" method="post">
                                <table class="table table-striped table-bordered dt-responsive nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <td>
                                                Pilih Bulan : <select name="bulan" id="select" class="form-control">
                                                    <option value="">-- Pilih Bulan --</option>
                                                    <?php

                                                    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


                                                    for ($i = 0; $i < 12; $i++) {

                                                    ?>
                                                        <option value="<?php echo $i + 1; ?>"><?php echo $bulan[$i]; ?></option>
                                                    <?php } ?>
                                                </select>

                                                <br>
                                                    Dari Tanggal :
                                                    <input type="date" name="start" value="<?=date('Y-m-d')?>" class="form-control">

                                            </td>
                                            <td>Pilih Tahun : <select name="tahun" id="select" class="form-control">
                                                    <option value="">-- Pilih Tahun --</option>
                                                    <?php

                                                    for ($u = 2015; $u <= 2025; $u++) {

                                                    ?>
                                                        <option value="<?php echo $u; ?>"><?php echo $u; ?></option>
                                                    <?php } ?>
                                                </select>
<br>
                                                    Sampai Tanggal :
                                                    <input type="date" name="end" value="<?=date('Y-m-d')?>" class="form-control">
                                            </td>
                                            <td>
                                                <input type="hidden" name="action" value="search" class="form-control">
                                                <button type="submit" class="btn btn-primary" style="background-color: #00ff2a;color:#fff;border:none;"> 
                                                    <i class="fa fa-search"></i>&nbsp; Filter
                                                </button>

                            </form>
                            <a href="javascript:printDiv('box');">
                                <button type="button" class="btn btn-primary waves-effect waves-light" style="background-color: #00ff2a;color:#fff;border:none;">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                            </a>

                            <a href="<?php echo site_url(); ?>adm/laporan" style="background-color: #00ff2a;color:#fff;border:none;">
                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> Reset Filter</button>
                            </a>

                            </td>
                            </tr>
                            </thead>
                            </table>

                            <div id="box">
                                <center>
                                    <h4 style="font-weight: bold;">LAPORAN PENJUALAN SAYUR <br> Sayur Mayur Om Hendrik - Jakarta Timur<br></h4>
                                </center><br>
                                <table class="table" border="1" style="border-collapse: collapse; border-spacing: 1; width: 100%;">
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
                                        foreach ($transaksiku as $t) : ?>

                                            <?php
                                            $listSayur = $this->db->query("SELECT*FROM keranjang LEFT JOIN sayur ON sayur.id_sayur=keranjang.id_sayur WHERE keranjang.status=2 AND id_transaksi='$t->id_transaksi' AND keranjang.deleted=0")->result();
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
                                </table>
                            </div>
                            <a href="javascript:printDiv('box');">
                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    <!-- end page content-->

</div> <!-- container-fluid -->

</div> <!-- content -->
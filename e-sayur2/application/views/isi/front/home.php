<link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" />

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<style>
    .btn-kategori {
        background-color: #fff;
        border-radius: 6px;
        border: solid 1px #00ff2a;
        color: #00ff2a;
    }
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h3 class="page-title"><b><i class="fas fa-box-open"></i>&nbsp; <?php if ($this->session->userdata('level') == "Konsumen") { ?>
                                    Hallo <?php echo $this->session->userdata('nm_user'); ?>, Selamat Datang di Sistem Penjualan Sayur
                                <?php } else { ?>
                                    Selamat Datang di Sistem Penjualan Sayur
                                <?php } ?>
                            </b></h3>
                        <ol class="breadcrumb">
                            <!--  <li class="breadcrumb-item active">Lapak Toko Sayur Mayur Om Hendrik</li> -->
                        </ol>

                        <div class="state-information d-none d-sm-block">

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">

                <div class="row">


                    <div class="col-12">
                        <!-- Simple card -->
                        <div class="card m-b-30" style="padding:30px;">
                            <center>
                                <img style="max-width:1000px;border-radius:8px; height:400px;object-fit: cover;" src="<?php echo base_url(); ?>assets/images/sayur2.jpg">
                            </center>
                        </div>


                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">

                    <?php $no = 1;
                    foreach ($sayurku as $sayur) : ?>
                        <!--  <form action="<?php echo site_url('informasi/addKeranjang'); ?>" method="post"> -->
                        <input type="hidden" readonly value="<?= $sayur->id_sayur; ?>" name="id_sayur" class="form-control">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <!-- Simple card -->
                            <div class="card m-b-30" style="height: 500px;">
                                <div class="card-body">
                                    <div class="card-img-top" style="height:180px;">
                                        <img style="border-radius: 8px;" src="<?php echo base_url('assets/images/sayur/' . $sayur->foto) ?>" height="150" alt="Card image cap">
                                    </div>
                                    <div class="card-title">
                                        <h4 class="font-16 mt-0" style="font-weight: bold;color:#000;"><?php echo $sayur->nm_sayur ?></h4>
                                        <span class="badge badge-pill badge-success noti-icon-badge" style="font-size: 16px;background-color: #00ff2a;">Rp. <?php echo $sayur->harga ?></span>
                                    </div>
                                    <div class="card-text" style="height: 150px;">
                                        <p class=""><?php echo $sayur->keterangan ?></p>
                                    </div>
                                    <div class="detail">
                                        <button class="btn-kategori"><i class="fas fa-info-circle"></i> <?php echo $sayur->nm_kategori ?></button>
                                        <!-- <p class="card-text"> -->
                                        <div class="row mt-3">
                                            <div class="col-sm-5">
                                                <span style="font-weight: bold;color:#000">Stock : <?php echo $sayur->stock ?></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="https://api.whatsapp.com/send?phone=6285159550048&text=Selamat%20datang%20di%20Toko%20Sayur%20Om%20Hendrik.%20Mau%20beli%20sayur%20apa%20?%20" target="blank">
                                                    <span class="btn btn-success waves-effect waves-light"><i class="fas fa-phone"></i> Whatsapp</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div><!-- end col -->
                        <!--  </form> -->
                    <?php endforeach; ?>




                </div>
                <!-- end row -->






                <!-- end row -->

            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- modal -->
    <div class="modal modal-success fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">
                        <font color='white'>Masukan ke Keranjang</font>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin memasukan sayur ini ke keranjang ?</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">
                        <font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font>
                    </a>
                    <a href="#" id="btn-delete" type="button" class="btn btn-success mr-1"><i class="fas fa-cart-arrow-down"></i>&nbsp;Masukan Keranjang</a>
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
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

                        <h3 class="page-title"><b><i class="fas fa-phone"></i>&nbsp;
                                Kontak Kami
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



                <div class="col-xl-12 ">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div>
                                        <div class='alert alert-success col-12' style="background-color: #00ff2a; color: #fff;">
                                            <center>
                                                <font color="#fff"><i class='fas fa-map-marker-alt'></i>&nbsp;&nbsp;&nbsp;<b>Lokasi</b></font>
                                            </center>
                                        </div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.76373345361!2d106.8604759!3d-6.2054222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4c0da7de8c789df!2sPasar%20Palmeriam!5e0!3m2!1sid!2sid!4v1674565518023!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="550" height="380"></iframe>
                                    </div>
                                </div>



                                <div class="col">

                                    <div class='alert alert-success' style="background-color: #00ff2a; color: #fff;">
                                        <center>
                                            <font color="#fff"><i class='fas fa-phone-square'></i>&nbsp;&nbsp;&nbsp;<b>Telepone</b></font>
                                        </center>
                                    </div>

                                    +6285159550048<br><br>

                                    <div class='alert alert-success' style="background-color: #00ff2a; color: #fff;">
                                        <center>
                                            <font color="#fff"><i class='mdi mdi-email'></i>&nbsp;&nbsp;&nbsp;<b>Email</b></font>
                                        </center>
                                    </div>

                                    om-hendrik.sayur@gmail.com<br><br>

                                    <div class='alert alert-success' style="background-color: #00ff2a; color: #fff;">
                                        <center>
                                            <font color="#fff"><i class='fas fa-map-marker'></i>&nbsp;&nbsp;&nbsp;<b>Alamat</b></font>
                                        </center>
                                    </div>

                                    Pasar Palmeriam BLOK ALB1 121-122 Lapak
                                    Jl. Kayu Manis Lama 1 No.14, RT.13/RW.7, Palmeriam, Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13140
                                    <br><br>



                                </div>
                            </div>


                        </div>
                    </div>
                </div> <!-- end col -->








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
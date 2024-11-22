<!-- WELCOME
    ================================================== -->
    <section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-3 col-lg-3 order-md-2">

            <!-- Image -->
            <img src="uploads/<?=appSetting()->logo?>" height='300'>

          </div>
          <div class="col-12 col-md-9 col-lg-9 order-md-1 aos-init aos-animate" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              <span><b>SISTEM KEPUASAN PELANGGAN TERHADAP LAYANAN DAN PRODUK PD. PADI KAPAS INDRAMAYU</b></span>
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
              Sekarang isi kuesioner bisa dimana saja, kapan saja, secara online, tanpa memerlukan kertas.
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-left">
              <a href="<?=site_url('home')?>" class="btn btn-primary lift">
                Lihat Kuesioner
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    <!-- Modal -->
   <!--  <div class="modal fade" id="takeQuestionnaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="<?php echo site_url('home/check_ip'); ?>" method="post">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">Isikan biodata</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="customer_name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Tn. John" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select class="form-control" name="customer_gender">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_profession" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_profession" name="customer_profession" placeholder="Pekerjaan">
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_hp" class="col-sm-2 col-form-label">No. Hp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_hp" name="customer_hp" placeholder="08xxxxxxx">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
 -->
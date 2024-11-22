 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
      
 <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
         <?php if ($this->session->flashdata('success')): ?>
                               <div class='alert alert-success alert-dismissible'>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?>
        <?php if ($this->session->flashdata('salah')): ?>
                               <div class='alert alert-danger alert-dismissible'>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                        <?php echo $this->session->flashdata('salah'); ?></div>
                            <?php endif; ?>
  
          <div class="row">
            <div class="col-md-12">
              <div class="clearfix">
              <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Buku<span class="text-theme-colored"> Tamu</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Silahkan Masukan kritik atau saran</h6>
           </center> 
          <hr>
                </div>
              <?php echo form_open("kontak/cek");?>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Masukan Nama" required id="contact_name" name="nama" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Masukan Email" required id="contact_email" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Masukan Subject" required id="contact_subject" name="subjek" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea rows="7" placeholder="Masukan Pesan Anda..." required id="contact_message" name="pesan" class="form-control"></textarea>
                </div>
                <p><?php echo $img; ?></p>
   <p>Security: <input type="text" name="secutity_code"></p>
                <div class="form-group">
                  <button name="submit"  class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
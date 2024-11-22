<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Setting Informasi Perusahaan</h1>
                        <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-edit"></i> Edit Profil Gua Sunyaragi</button>
                                </a>
                    </div>
                   

                   <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Sejarah Gua Sunyaragi
                                </div>
                                <div class="card-body">
                                   <p align="justify"> <?php echo $perusahaan->sejarah ?></p>
                                </div>
                            </div>
                          </div>

                          <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                   Kontak Gua Sunyaragi
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th>Nama Kontak</th>
                                            <th>Kontak</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>Facebook</td>
                                            <td><?php echo $perusahaan->fb ?></td>
                                          </tr>

                                          <tr>
                                            <td>2</td>
                                            <td>Twitter</td>
                                            <td><?php echo $perusahaan->twitter ?></td>
                                          </tr>

                                          <tr>
                                            <td>3</td>
                                            <td>Instagram</td>
                                            <td><?php echo $perusahaan->instagram ?></td>
                                          </tr>

                                          <tr>
                                            <td>4</td>
                                            <td>Telephone</td>
                                            <td><?php echo $perusahaan->kontak ?></td>
                                          </tr>
                                        </tbody>
                                      </table>

                                </div>
                            </div>
                          </div>

                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Profil Gua Sunyaragi</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/settingperusahaan/edit'); ?>" method="post">
                      <div class="modal-body">

                        <div class="row">
                          <div class="col-6">
                            <fieldset class="form-group floating-label-form-group">
                          <label for="email">Facebook</label>
                          <input type="text" name="fb" value="<?php echo $perusahaan->fb ?>" class="form-control  round <?php echo form_error('fb') ? 'is-invalid':'' ?>" id="email" placeholder="Akun Facebook" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Twitter</label>
                          <input type="text" name="twitter" value="<?php echo $perusahaan->twitter ?>" class="form-control  round <?php echo form_error('twitter') ? 'is-invalid':'' ?>" id="email" placeholder="Akun Twitter" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>
                          </div>

                          <div class="col-6">
                            <fieldset class="form-group floating-label-form-group">
                          <label for="email">Instagram</label>
                          <input type="text" name="instagram" value="<?php echo $perusahaan->instagram ?>" class="form-control  round <?php echo form_error('instagram') ? 'is-invalid':'' ?>" id="email" placeholder="Akun Instagram" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Kontak Telepone</label>
                          <input type="text" name="kontak" value="<?php echo $perusahaan->kontak ?>" class="form-control  round <?php echo form_error('kontak') ? 'is-invalid':'' ?>" id="email" placeholder="Kontak Telephone" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
         
                        </fieldset>
                          </div>
                          
                        </div>
              Sejarah Gua Sunyaragi :           
      <textarea name="sejarah" id="editor1" rows="10" cols="80">
                <?php echo $perusahaan->sejarah ?>
            </textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>

                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

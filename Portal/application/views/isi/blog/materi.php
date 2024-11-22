<!-- Start main-content -->
  <div class="main-content">



    <!-- Section: Experts Details -->
    <section>
      <div class="container">
      
      <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-download text-theme-colored font-24 mt-5"></i>&nbsp; Download<span class="text-theme-colored"> Materi PerKuliahan</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Dosen : <?php echo $dosen->nm_lengkap?></h6>
           </center> 
          <hr>
                
        <div class="section-content">
         <div class="row">
            <div class="col-md-12">
            <div class="table-responsive">
             <table class="table table-hover no-wrap"> 
                    
                    <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3" align="center"> 
                    <th align="center"width="50"><b>No</th>
                            <th width="120"><b>Kode Matkul</th>
                            <th><b>Nama Mata Kuliah</th>
                            <th width="129"><b>Pertemuan Ke-</th>
                            <th><b>Nama Materi</th>
                            <th width="130"><b>Download</th>
                            
                      </tr>

                    <tbody> 
                      <tr>
                <?php $no=1;
         foreach ($materiku as $p): ?>
            <tr>
               <td align="center"><b><?php echo $no++; ?></b></td>
                <td scope="row" align="center"><?php echo $p->kode_mk ?></td>
                <td scope="row"><?php echo $p->nama_mk ?></td>
                <td scope="row" align="center"><?php echo $p->pertemuan_ke ?></td>
                <td scope="row"><?php echo $p->nm_materi ?></td>
                </td>                                                                  
                     <td>
                     
                     <?php if ($p->link_materi != "" AND $p->file != "default.jpg"){ ?>
                     <a href="<?= base_url('assets/file/materi/'.$p->file)?>" download data-toggle="tooltip" class="btn btn-primary btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Link Download I"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"></span></a>
                     <a href="<?php echo $p->link_materi ?>" target='blank' data-toggle="tooltip" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Link Download II"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"></span></a>
                      
                      <?php }else if($p->link_materi != "") { ?>
                      <a href="<?php echo $p->link_materi ?>" target='blank' data-toggle="tooltip" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Link Download II"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"></span></a>
                      
                      <?php }else if($p->file != "default.jpg") { ?>
                       <a href="<?= base_url('assets/file/materi/'.$p->file)?>" download data-toggle="tooltip" class="btn btn-primary btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Link Download I"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"></span></a>
                     
                      <?php } ?>
                     </td>
            </tr>
          <?php endforeach; ?>
                     </tr> 
                    </tbody> 
                  </table>
                  </div>



            </div>
          </div>
          
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
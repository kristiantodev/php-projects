<!-- Start main-content -->
  <div class="main-content">



    <!-- Section: Experts Details -->
    <section>
      <div class="container">
    
      <div class="portfolio-filter font-alt align-center mb-6 0">
                <a class="active col-md-6" data-filter="*"><i class="fa fa-book"></i> &nbsp; Publikasi Jurnal & Prosiding&nbsp;&nbsp;&nbsp;</a>
               </div>
    
        <div class="section-content">
         <div class="row">
            <div class="col-md-12">
            
             <table class="table table-bordered"> 
                    
                    <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#ff9528" align="center"> 
                    <th align="center"width="50">Jurnal</th>
                      </tr>

                    <tbody> 
                    <?php $no=1;
         foreach ($publikasiku as $p): ?>
                      <tr>
                <td><a href="<?= base_url('assets/file/publikasi/'.$p->file)?>" download><font color="#21a0f0"><?php echo $p->judul_publikasi ?></font></a></td>
                     </tr> 
            <?php endforeach; ?>
                    </tbody> 
                  </table>
          
            </div>


<div class="col-md-12">
            
             <table class="table table-bordered"> 
                    
                    <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#ff9528" align="center"> 
                    <th align="center"width="50">Prosiding</th>
                      </tr>

                    <tbody> 
                    <?php $no=1;
         foreach ($publikasiku2 as $h): ?>
                      <tr>
                <td><a href="<?= base_url('assets/file/publikasi/'.$h->file)?>" download><font color="#21a0f0"><?php echo $h->judul_publikasi ?></font></a></td>
                     </tr> 
            <?php endforeach; ?>
                    </tbody> 
                  </table>
             



            </div>


          </div>
          
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
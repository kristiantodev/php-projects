<!-- Start main-content -->
  <div class="main-content">



    <!-- Section: Experts Details -->
    <section>
      <div class="container">
      
        <div class="section-content">
          <div class="row">
            <div class="col-md-2">
              <div class="thumb">
                <center><img src="<?php echo base_url('assets/images/user/'.$user->avatar) ?>" height="225" width="175" alt=""></center>
                <br>
              </div>
            </div>
            <div class="col-md-10">
            <div class="portfolio-filter font-alt align-center mb-6 0">
                <a class="active col-md-12" data-filter="*"><i class="fa fa-user"></i> &nbsp; Profil Dosen&nbsp;&nbsp;&nbsp;</a>
              </div>
              <table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
          <tbody>
          <tr>
              <td width="225"><b>NIDN</b></td>
              <td width="60"><b>:</b></td>
              <td><b><?php echo $dosen->nidn?></b></td>
            </tr>
          <tr>
              <td width="225">Nama Dosen</td>
              <td width="60">:</td>
              <td><?php echo $dosen->nm_lengkap?></td>
            </tr>
            
             <tr>
              <td>Jenis Kelamin</td>
              <td width="60">:</td>
              <td><?php echo $dosen->jk?></td>
            </tr>
             <tr>
              <td>Alamat</td>
              <td width="60">:</td>
              <td><?php echo $dosen->alamat?></td>
            </tr>
             <tr>
              <td>Jabatan Struktural</td>
              <td width="60">:</td>
              <td><?php echo $dosen->jabatan_struktural?></td>
            </tr>
             <tr>
              <td>Jabatan Fungsional</td>
              <td width="60">:</td>
              <td><?php echo $dosen->jabatan_fungsional?></td>
            </tr>
             <tr>
              <td>Pendidikan Tertinggi</td>
              <td width="60">:</td>
              <td><?php echo $dosen->pend_tertinggi?></td>
            </tr>
             <tr>
              <td>Status Ikatan Kerja</td>
              <td width="60">:</td>
              <td><?php echo $dosen->status_ikatan_kerja?></td>    
            </tr>
             <tr>
              <td>Pendidikan</td>
              <td width="60">:</td>
              <td>S1 - <?php echo $dosen->s1?></td>    
            </tr>
            <tr>
              <td></td>
              <td width="60">&nbsp;</td>
              <td>S2 - <?php echo $dosen->s2?></td>    
            </tr>
           

            
          </tbody>
        </table>
             
<div class="portfolio-filter font-alt align-center mb-6 0">
                <a class="active col-md-12" data-filter="red"><i class="fa fa-hand-paper-o"></i> &nbsp; Aktivitas Dosen&nbsp;&nbsp;&nbsp;</a>
              </div>

<ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#small" data-toggle="tab">Mata Kuliah yang Diajar</a></li>
                <li><a href="#medium" data-toggle="tab">Penelitian (Publikasi)</a></li>
                <li><a href="#large" data-toggle="tab">Pengabdian Kepada Masyarakat</a></li>
                <li><a href="#large2" data-toggle="tab">Kegiatan Penunjang</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="small">
                  <table class="table table-hover no-wrap"> 
                    
                     <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th>No</th>
                    <th>Semester</th>
                    <th>Kode Matkul</th> 
                    <th>Nama Matkul</th>
                      </tr>

                    <tbody> 
                      <tr>
                        <?php $no=1;
         foreach ($ajarku as $ajar): ?>
            <tr>
               <td align="center" width="20"><?php echo $no++; ?></td>
                <td align="center" width="95"><?php echo $ajar->semester ?></td>
                <td width="110" align="center"><?php echo $ajar->kode_mk ?></td>
                <td><?php echo $ajar->nama_mk ?></td>                                                                 

            </tr>
          <?php endforeach; ?> 
                      </tr>
                    </tbody> 
                  </table>
                </div>
                <div class="tab-pane fade" id="medium">
                  <table class="table table-hover no-wrap"> 
                  
                    <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Judul Penelitian</th>
                            <th><b>Tempat Publikasi</th>
                            <th><b>Tahun</th>
                            <th><b>Link</th>
                      </tr>
                    <tbody> 
                      <tr>
                        <?php $no=1;
         foreach ($penelitianku as $p): ?>
            <tr>
               <td align="center" width="13"><?php echo $no++; ?></td>
                <td><p align="justify"><?php echo $p->judul_penelitian ?></p></td>
                <td width="140"><?php echo $p->tempat_publikasi ?></td>
                <td width="20" align="center"><?php echo $p->tahun ?></td>
                <td width="20" align="center">
                   <a href="<?php echo $p->link ?>" target='blank' data-toggle="tooltip" class="btn btn-primary btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Lihat"><span class="icon-label"><i class="fa fa-link"></i> </span><span class="btn-text"></span></a>
                </td>
            </tr>
          <?php endforeach; ?>
                      </tr>
                    </tbody> 
                  </table>
                </div>



<div class="tab-pane fade" id="large">
                  <table class="table table-hover no-wrap"> 
                    
                   <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Nama Kegiatan</th>
                            <th><b>Tahun</th>
                      </tr>

                    <tbody> 
                      <?php $no=1;
         foreach ($pkmku as $pkm): ?>
            <tr>
               <td align="center"><?php echo $no++; ?></td>
                <td><?php echo $pkm->nm_kegiatan ?></td>
                <td align="center"><?php echo $pkm->tahun ?></td>
            </tr>
          <?php endforeach; ?>
                    </tbody> 
                  </table>
                </div>


                <div class="tab-pane fade" id="large2">
                  <table class="table table-hover no-wrap"> 
                    
                   <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Nama Acara</th>
                            <th><b>Status</th>
                            <th width="60"><b>Tahun</th>
                            <th width="100"><b>Sertifikat</th>
                      </tr>

                    <tbody> 
                      <?php $no=1;
         foreach ($kegiatanku as $k): ?>
            <tr>
               <td align="center"><b><?php echo $no++; ?></b></td>
                <td><?php echo $k->nm_acara ?></td>
                <td><?php echo $k->status_kepanitiaan ?></td>
                <td><center><?php echo $k->tahun ?></center></td>
                <td align="center">
                  <?php if ($k->privasi == "Umum"){ ?>
                   <?php if ($k->url_sertifikat == "" OR $k->sertifikat != "default.jpg"){ ?>
                     <a data-rel="prettyPhoto[gallery1]" href="<?php echo base_url('assets/images/sertifikat/'.$k->sertifikat) ?>" data-toggle="tooltip" class="btn btn-primary btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Lihat Sertifikat"><span class="icon-label"><i class="fa fa-search"></i> </span><span class="btn-text"></span></a>
                      <?php }else{ ?>
                      <a href="<?php echo $k->url_sertifikat ?>" target="blank" data-toggle="tooltip" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Lihat Sertifikat"><span class="icon-label"><i class="fa fa-link"></i> </span><span class="btn-text"></span></a>
       
              <?php } ?>   
                  <?php }else{ ?>
                       -
                  <?php } ?>
                </td>
                
            </tr>
          <?php endforeach; ?>
                    </tbody> 
                  </table>
                </div>
              </div>
            </div>
          </div>


            </div>
          </div>
          
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
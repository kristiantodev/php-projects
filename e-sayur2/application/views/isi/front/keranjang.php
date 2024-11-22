<style>
  @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}
</style>
<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" />
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
                                    <h3 class="page-title"><b><i class="fas fa-shopping-cart"></i>&nbsp; Pembelian Sayur</b></h3>
                                    <ol class="breadcrumb">
                                       <!--  <li class="breadcrumb-item active">Lapak Toko Sayur Mayur Om Hendrik</li> -->
                                                               <?php echo date("d-m-Y h:i:s") ?>

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
                                          <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 70%;">
<form action="<?php echo site_url('adm/cart/add'); ?>" method="post">
               <tr>
                                                  <td width="400">Pilih Sayur :<br>
                          <select name="id_sayur" id="select" required class="custom-select">
                  <?php foreach ($sayurku2 as $k): ?>
                  <option value="<?php echo $k->id_sayur ?>"><?php echo $k->nm_sayur ?></option>
                  <?php endforeach; ?>
                </select>
                                                  </td>
                                                  <td>Qty :<br>
<input type="number" name="qty" value="1" class="form-control  round" id="email" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                                                  </td>
                                                  <td><br>
                                                    <button type="submit"  class="btn btn-success">
                                    <i class="fas fa-cart-arrow-down"></i>&nbsp; Tambah
                                </button>
                                                     
                                                  </td>
                                                </tr>                           
</table>
</form>

  <form action="<?php echo site_url('adm/cart/checkout'); ?>" method="post">
            <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No.</b></th>
                                    <th><b>Nama Sayur</b></th>
                                    <th><b>Stock</b></th>
                                    <th align="center"><b>Harga</b></th>
                                    <th align="center"><b>Qty Beli</b></th>
                                    <th align="center"><b>Subtotal</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                             <?php $total=0; $no=1;
         foreach ($sayurku as $sayur): ?>

          <?php 
            $total=$total+($sayur->harga*$sayur->qty); 
            $qtyReal = $this->db->query("SELECT stock FROM sayur WHERE deleted=0 AND id_sayur = '".$sayur->id_sayur."'")->row();
            $qtyNow = $qtyReal->stock - $sayur->qty;
          ?>
                                
                                <tr>
                                    <td width="7" align="center"><?php echo $no; ?></td>
                                    <td>&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/sayur/'.$sayur->foto) ?>" alt="" class="thumb-md rounded-circle"> &nbsp;&nbsp;&nbsp;<?php echo $sayur->nm_sayur ?></td>
                                    <td align="center"><?php echo $qtyReal->stock ?></td>
                                    <td align="center">Rp. <?php echo $sayur->harga ?></td>
                                    <td align="center"><?php echo $sayur->qty ?></td>
                                    <td align="center">Rp. <?php echo $sayur->harga*$sayur->qty ?></td>
                                    <td align="center">
                                      <a onclick="deleteConfirm('<?php echo site_url('adm/cart/hapus/'.$sayur->id_keranjang); ?>')" href="#!" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                    </td>

                                    <input type="hidden" name="keranjang[]" value="<?php echo $sayur->id_keranjang ?>" id="md_checkbox_<?php echo $no; ?>" class="filled-in chk-col-navy"/>
                                    <input type="hidden" name="idSayur[]" value="<?php echo $sayur->id_sayur ?>" class="filled-in chk-col-navy"/>
                                    <input type="hidden" name="qtySayur[]" value="<?php echo $qtyNow ?>" class="filled-in chk-col-navy"/>
                                    
                                </tr>
                                <?php 
                                  $no++;
                                  endforeach; 
                                ?>
                                <tr>
                                  <td colspan="5" align="right"><b>Total Pembayaran</b></td>
                                  <td><center><b>Rp. <?php echo $total; ?></b></center></td>
                                </tr>
                                                </tbody>
                                                
                                            </table>
                                            <p align="">
                                    <?php if(count($sayurku) >= 1){ ?>
                                      <!-- <button type="submit"  class="btn btn-success">
                                        <i class="fab fa-telegram-plane "></i>&nbsp; Bayar
                                      </button> -->
                                      <button type="button" class="btn btn-success" onclick="showModal()">
                                        <i class="fab fa-telegram-plane "></i>
                                        <!-- &nbsp; Bayar -->
                                        &nbsp;Konfirmasi
                                      </button>
                                    <?php }?>
                                            </p>
                                          <div id="printThis">
                                            <!-- Modal -->
                                            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Ringkasan Pesanan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                  <?php foreach ($sayurku as $sayur): ?>
                                                    <p>Sayur : <b><?php echo $sayur->nm_sayur ?></b></p>
                                                    <p>Harga : <b>Rp. <?php echo $sayur->harga ?></b></p>
                                                    <p>Qty   : <b><?php echo $sayur->qty ?></b></p>
                                                    <hr>
                                                    <?php endforeach; ?>
                                                    <p>Total : <b><?php echo $total ?></b></p>
                                                  </div>
                                                  <div class="modal-footer" id="footerBayar">
                                                    <button type="button" id="cetak" class="btn btn-primary mr-auto">Cetak</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Bayar</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- End Modal -->
                                          </div>
                                          </form>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



  <!-- modal -->
  <div class="modal modal-danger" id="modal-danger">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
        <h5 class="modal-title"><font color='white'>Konfirmasi Penghapusan</font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
        </div>
        <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
        <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

  

<script>
  function deleteConfirm(url){
      $('#btn-delete').attr('href', url);
      $('#modal-danger').modal('show');
  }

  function showModal(){
    $('#exampleModal').modal('show');
    // $('body').removeClass('modal-open');
    // $('#modal-danger').addClass('modal-open');
  }

  document.getElementById("cetak").onclick = function () {
    printElement(document.getElementById("printThis"));
  }

function printElement(elem) {
    document.getElementById("footerBayar").style.display = "none";
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    document.getElementById("footerBayar").style.display = "";
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}

</script>
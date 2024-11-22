<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Pembelian APD</title>
  <link rel="stylesheet" href="">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
    .collapsed{
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight:">
          <h1>PT. Meraksa Raya Group</h1>
          <p style="margin-top: -20px; margin-bottom: -5px">
            Jalan Mayor Salim Batu Bara No.12 A Sekip Palembang 30127<br>
            Telepon : 0711 - 311953 , Fax : 0711 - 354319 Email : meraksarayapt@yahoo.co.id
          </p>
    
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> <br>
  
  
  <table  style="width: 100%;" class="collapsed" border="1" cellpadding ="10" style="font-size: 9;">
    <tr align="center" style="background-color: grey;">
      <th width="10">NO.</th>
      <th>Tanggal</th>
      <th>Pemohon</th>
      <th>Nama APD</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Jumlah Harga</th>
      <th>Keterangan</th>
    </tr>
    <?php 
    $no = 1;
    foreach($pengajuan as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->tanggal ?></td>
      <td><?php echo $u->pengaju ?></td>
      <td><?php echo $u->nama_apd ?></td>
      <td><?php echo $u->jumlah ?> <?php echo $u->satuan ?></td>
      <td>Rp. <?= number_format($u->harga,0) ?></td>
      <td>Rp. <?= number_format($u->jml_harga,0) ?></td>
      <td><?php echo $u->ket ?></td>
    </tr>

  <?php } ?>
  </table>
</body>
</html>
    
const flashData = $('.flash-data').data('flashdata');

console.log(flashData);
if(flashData == "berhasil"){
	swal({
        title: 'Sukses',
        text: 'Data Berhasil Di Simpan !',
        type: 'success'
	});
}else if(flashData == "gagal"){
	swal({
        title: 'Gagal',
        text: 'Data Gagal Di Simpan !',
        type: 'error'
	});
}else if(flashData == "hapus"){
	swal({
        title: 'Sukses',
        text: 'Data Berhasil di hapus !',
        type: 'success'
	});
}else if(flashData == "passwordsukses"){
	swal({
        title: 'Sukses',
        text: 'Password berhasil dirubah !',
        type: 'success'
	});
}else if(flashData == "passwordgagal"){
	swal({
        title: 'Gagal',
        text: 'Password lama yang anda Masukan salah !',
        type: 'error'
	});
}else if(flashData == "passwordgagal2"){
	swal({
        title: 'Gagal',
        text: 'Password Baru sama dengan Password Lama !',
        type: 'error'
	});
}else if(flashData == "gagalkeranjang"){
        swal({
        title: 'Gagal',
        text: 'Sayur sudah ada dikeranjang !',
        type: 'error'
        });
}else if(flashData == "gagaladd"){
        swal({
        title: 'Gagal',
        text: 'Silahkan login terlebih dahulu !',
        type: 'error'
        });
}else if(flashData == "gagalqty"){
        swal({
        title: 'Gagal',
        text: 'Stock tidak mencukupi',
        type: 'error'
        });
}

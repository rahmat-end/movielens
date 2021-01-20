<?php

//set date now
function set_date(){
	date_default_timezone_set('Asia/Jakarta');
	$hour=date('h'); //jam
	$date=('d-m-y'); //tanggal sekarang
}

//cek data

function cek_data(){
	$izin="SELECT*from izin where tanggal_akhir=$date";
		if(CekExist($mysqli, $izin)==true){
			//echo "izin tanggal hari ini"
		}else{
			
		}
}
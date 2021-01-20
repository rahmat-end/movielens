<?php 
/*function getDate(){
    date_default_timezone_set('As')

}
*/
function getIndoBulan($bln){
    switch ($bln) {
        case 1: 
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}


//tanggal
function getIndoHari($date) {
    // memecah date berdasarkan separator -
    $temp_date = explode("-", $date);
    // membuat format date dengan hari
    // output yang dihasilkan adalah hari dengan bahasa inggris
    $day = date_format(date_create($date), 'D');
    $hari = '';
    // disini kita bikin pengkondisian
    switch ($day) {
            case "Mon": 
                $hari = "Senin";
                break;
            case "Tue":
                $hari = "Selasa";
                break;
            case "Wed":
                $hari = "Rabu";
                break;
            case "Thu":
                $hari = "Kamis";
                break;
            case "Fri":
                $hari =  "Jumat";
                break;
            case "Sat":
                $hari = "Sabtu";
                break;
            case "Sun":
                $hari = "Minggu";
                break;
    }

    // disini kita panggil fungsi getIndoBulan
    // untuk merubah format bulan angka menjadi nama bulan
    $bulan   = getIndoBulan($temp_date[1]);
    $tahun   = $temp_date[0];
    $tanggal = $temp_date[2];

    // nah disini kita gabungin lagi data yg kepecah tadi 
    // menjadi format date yang baru
    $new_date = $hari.", ".$tanggal." ".$bulan." ".$tahun;

    return $new_date;
}

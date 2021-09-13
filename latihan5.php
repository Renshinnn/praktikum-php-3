<?php
    $day = date('D');
    $month = date('m');
    $year = date('Y');
    $tanggal = date('d');
    switch($day){
        case 'Sun' : $hari = "Minggu"; break; 
        case 'Mon' : $hari = "Senin"; break; 
        case 'Tue' : $hari = "Selasa"; break; 
        case 'Wed' : $hari = "Rabu"; break; 
        case 'Thu' : $hari = "Kamis"; break; 
        case 'Fri' : $hari = "Jum'at"; break; 
        case 'Sat' : $hari = "Sabtu"; break; 
        default : $hari = "Kiamat";
    }
    switch($month){
        case '01' : $month = "Januari"; break; 
        case '02' : $month = "Februari"; break;
        case '03' : $month = "Maret"; break;
        case '04' : $month = "April"; break;
        case '05' : $month = "Mei"; break;
        case '06' : $month = "Juni"; break;
        case '07' : $month = "Juli"; break;
        case '08' : $month = "Agustus"; break;
        case '09' : $month = "September"; break;
        case '10' : $month = "Oktober"; break;
        case '11' : $month = "November"; break;
        case '12' : $month = "Desember"; break;
        default : $month = "Nope";
    }

    echo "Sekarang <b>$hari, $tanggal $month $year</b>";
?>
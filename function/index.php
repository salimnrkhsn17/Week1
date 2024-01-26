<?php

     function tabungan($jumlah, $bulan){
         $total = $jumlah + ($jumlah * $bulan/100);
         return 'Rp.' . number_format($total,0,'.','.');
    }

     tabungan(420000, 10);

     echo "<br>";
     echo "<br>";

    function BeratBadan($beratbadan, $tinggibadan){
        $metertb = $tinggibadan/100;
        $imt = $beratbadan / ($metertb**2);
        if ( $imt <= 18.5) {
            echo "berat badan kurang";
        } elseif ( $imt >= 18.5 && $imt <= 22.9 ) {
            echo "normal"; 
        } elseif ( $imt >= 22.9 && $imt <=24.9) {
            echo "berat badan lebih";
        } else {
            echo "obesitas";
        }
        return $imt;
    }

    BeratBadan(44, 148);

    echo "<br>";
    echo "<br>";

    function hari($tanggal){
        $day = date('l', strtotime($tanggal));
        if ($day == 'Monday') {
            echo "Senin";
        } elseif ( $day == 'Tuesday') {
            echo "Selasa";
        } elseif ( $day == 'Wednesday') {
            echo "Rabu";
        } elseif ( $day == 'Thursday') {
            echo "Kamis";
        } elseif ( $day == 'Friday') {
            echo "Jumat";
        } else {
            echo "hari tidak ada";
        }
        return $day;
    }

    hari('2024-01-24');
?>

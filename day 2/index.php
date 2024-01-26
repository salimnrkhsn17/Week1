<?php

    echo "<h1>DAY 2</h1>";
    echo "<h3>Answer: </h3>";

    // no 1

    $a = 80;

    if ($a >= 90) {
        echo "A";
    } elseif ($a >= 75) {
        echo "B";
    } else {
        echo "C";
    }

    echo "<br>";
    echo "<br>";

    // no 2

    $usia = 17;

     if ($usia > 6 && $usia < 12){
        echo "waktu tidur yang baik 10 jam";
     } else if ($usia >=12 && $usia <= 18){
        echo "waktu tidur yang baik 8-9 jam";
     } else if ($usia >= 18 && $usia <= 40){
        echo "waktu tidur yang baik 7-8 jam";
     } else {
        echo "not found";
     }

     echo "<br>";
     echo "<br>";

     // no 3

     $a = 7;

     if ( $a > 0){
        echo "positif";
     } else if ( $a < 0){
        echo "negatif";
     } else {
        echo "cacah";
     }

     echo "<br>";
     echo "<br>";

     // 4 di suatu rumah produksi yang memiliki jam kerja 8 jam, jika pegawai bekerja melebihi
     // jam kerja berhak mendapatkan kompensasi berupa Rp.30.000 di jam berikutnya, 
     // jika dani bekerja dari pukul 8 pagi lalu pulang di pukul 10 malam, berapakah kompensasi yang akan diterima dani?

     $jamkerja = 14;
     $kompensasi = 30000;

     if ( $jamkerja > 8 ){
        $hasil = ($jamkerja - 8) * $kompensasi;
        echo "mendapatkan kompensasi $hasil";
     } else {
        echo "tidak mendapatkan kompensasi";
     }

     echo "<br>";
     echo "<br>";

     // no 5 adni lahir di tahun 2004 dan eko lahir 3 tahun sebelum andi, 
     // dari kedua orang tersebut siapakah yang lahir di tahun kabisat? apakah andi atau eko atau keduanya?

     $eko = 2001;
     $andi = 2004;

     if ( ($eko%4) == 0 && ($andi%4) == 0 ) {
        echo "andi dan eko lahir di tahun kabisat";
     } else if ( ($eko%4) == 0) {
        echo "eko lahir di tahun kabisat";
     } else if ( ($andi%4) == 0) {
        echo "andi lahir di tahun kabisat";
     } else {
        echo "tidak ada yang lahir di tahun kabisat";
     }

     echo "<br>";
     echo "<br>";


     // no 6

     $bb = 44;
     $tb = 148;

     $metertb = $tb/100;

     $imt = $bb / ($metertb**2);

     if ( $imt <= 18.5 ){
        echo "berat badan kurang";
     } elseif ($imt >= 18.5 && $imt <= 22.9 ) {
        echo "normal";
     } elseif ($imt >= 22.9 && $imt <= 24.9){
        echo "berat badan lebih";
     } else {
        "obesitas";
     }


     echo "<br>";
     echo "<br>";

     // 7. menu dirumah makan beni
   // nasi goreng = 15000, ayam bakar = 20000, nasi kebuli = 25000, aneka jus = 8000, es teh manis = 3000, es jeruk = 5000
   // rumah makan beni mengadakan program jumat berkah dengan memberikan diskon sebesar 5% di hari jumat dan 2% di hari senin.
   // hitunglah harga yang harus di bayar jika dani ingin membelii 2 nasi kebuli, 1 ayam bakar, 2 nasi gorang. 
   // (gunakan hari secara otomatis dari hari ini)

// $date = date('2024-01-22');
   $day = date('l');

   $nasigoreng =  15000;
   $ayambakar = 20000;
   $nasikebuli = 25000;
   $estehmanis=  3000;
   $esjeruk = 5000;
   $beli = ($nasigoreng*2) + ($nasikebuli*2) + $ayambakar;

   if ( $day == 'Monday'){
        echo $beli - ($beli * 0.2);
        echo "anda mendapatkan diskon 2%";
   }elseif($day == 'Friday'){
        echo $beli - ($beli * 0.2);
        echo "anda mendapatkan diskon 5%";
   }else {
        echo "anda harus membayar $beli";
   }

   echo "<br>";
   echo "<br>";

   // no 8

   $panjangtanah = 13;
   $lebartanah = 9;
   $luas = $panjangtanah * $lebartanah;

   if( $luas < 90) {
        echo "tipe rumah 36";
   } elseif ( $luas >= 90 && $luas <=96) {
        echo "tipe rumah 45";
   } elseif ( $luas >=96 && $luas <=120) {
        echo "tipe rumah 54";
   } elseif ( $luas >=120 && $luas <=150) {
        echo "tipe rumah 60";
   } else {
        echo "tipe rumah 70";
   }

   echo "<br>";
   echo "<br>";
   
   // 10

   $Totalbel = 100000;
   $Potongan = 10000;

   if ( $Totalbel > 100000 && $Totalbel <= 150000 ){
        $harga = ($Totalbel-$Potongan);
        echo "Total yang harus di bayar adalah $harga";
   } elseif ( $Totalbel > 150000) {
        $harga = ($Totalbel-$Potongan);
        echo "Mendapatkan potongan harga menjadi $harga dan mendapat 1 permen kaki";
   } else {
        echo "Tidak mendapatkan potongan harga";
   }





    

     
?>
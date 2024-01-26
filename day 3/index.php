<?php
    // point terkumpul : 17

    echo "<h1>Day 3</h1>";

    echo "<br>";
    
    $nilai = 85;
    $hasil = $nilai >= 75 ? "Anda lulus" : "Anda tidak lulus";
    echo $hasil;

    echo "<br>";
    echo "<br>";

    //contoh lain

    $Uandi = 16;
    $Uheri = 17;
    $hasil = $Uandi == $Uheri ? "Umur mereka sama" : "Umur mereka berbeda";
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $a = 0;
    $hasil = $a > 0 ? "Positif" 
            : ($a < 0 ? "Negatif" 
            : "Cacah");
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $day = date('l');
    $hasil = $day == 'Monday' ? '2%' : ($day == 'Friday' ? '5%': "tidak dapat");
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $Totalbel = 150000;
    $potongan = 10000;

    $hasil = $Totalbel > 10000 ? "Mendapatkan diskon $potongan jadi membayar Rp.".number_format($Totalbel-$potongan) 
             : "Tidak mendapatkan diskon $Totalbel"; 
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $Tabungan = 500000;
    $bunga = 0.05 * $Tabungan;

    $hasil = $Tabungan > 500000 ? "Mendapat bunga 5%  Rp." .number_format($Tabungan+$bunga) : "Tidak mendapat bunga sehingga tabungan andi tetap Rp." .number_format($Tabungan);
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $jam = 19;
    $menit = "00";
    $jam2 = 18;
    $menit2 = "55";
    $pm = 12;
    $ubah = $jam - $pm;
    $ubah2 = $jam2 - $pm;

    $hasil = $jam > 12 ? "$jam.$menit dirubah menjadi pm $ubah.$menit" : "$jam.$menit dirumah menjadi am $ubah.$menit";
    echo $hasil;
    echo "<br>";
    $hasil2 = $jam2 > 12 ? "$jam2.$menit2 dirubah menjadi pm $ubah2.$menit2" : "$jam2.$menit2 dirumah menjadi am $ubah2.$menit2";
    echo $hasil2;

    echo "<br>";
    echo "<br>";

    $day = date('l');

    $hasil = $day == 'Monday' ? "Upacara" : "<h4>Tidak upacara</h4>";
    echo $hasil;

    echo "<br>";
    
    $nilai = 74;
    $hasil = $nilai >= 90 ? "A" 
            : ( $nilai >= 75 ? "B"
            : "C");
    echo $hasil;

    echo "<br>";

    $presentase = 100;
    $status = "sakit";

    $hasil = $status == "sakit" | $status == "izin" ? $presentase - 3 : (($status == "alfa") ? $presentase - 5 : 0);
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $presentase = 100;
    $izinsakit = 0;
    $alfa = 1;

    $hasil = $izinsakit ? $presentase - 3 : ($alfa ? $presentase - 5 : $presentase);
    echo $hasil;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // COBA COBA AJA

    echo "<h2>Coba coba aja : </h2>";
    echo "<br>";
    

    $panjangtanah = 13;
    $lebartanah = 9;
    $luas = $panjangtanah * $lebartanah;

    $hasil = $luas < 90 ? "tipe rumah 36" : ($luas >= 90 && $luas <=96 ? "tipe rumah 45" 
    :($luas >=96 && $luas <=120 ? "tipe rumah 54" 
    : ($luas >=120 && $luas <=150 ? "tipe rumah 60" 
    : "tipe rumah 70")));
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $bb = 44;
    $tb = 148;
    $metertb= $tb/100;

    $imt = $bb / ($metertb**2);
    $hasil = $imt <= 18.5 ? "berat badan kurang" 
            : ( $imt >=18.5 && $imt <=22.9 ?"normal" 
            : ( $imt >=22.9 && $imt <=24.9 ?"berat badan lebih" 
            : "Obesitas"));
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $eko = 2004;
    $andi = 2001;

    $hasil = $eko%4 == 0 && $andi%4 == 0 ? "andi dan eko lahir di tahun kabisat" 
            :( $eko%4 == 0 ? "eko lahir di tahun kabisat" 
            :($andi%4 == 0 ? "andi lahir di tahun kabisat"
            : "tidak ada yang lahir di tahun kabisat"));
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $usia = 38;

    $hasil = $usia > 6 && $usia < 12 ? "10 jam ya" 
            : ( $usia >= 12 && $usia <= 18 ? "8-9 jam ya" 
            : ( $usia >=18 && $usia <= 40 ? "7-8 jam ya"
            : "<h3>TIDAK ADA DATA</h3>"));
    echo $hasil;

    echo "<br>";
    echo "<br>";

    $heri = 100000;
    $min = 50000;

    $discount = $heri-$min * 0.05;

    $hasil = $heri >= $min ? "Selamat mendapatkan diskon bayar Rp." .number_format($discount) 
                    : "Tidak dapat diskon bayar Rp." .number_format($heri);
    echo $hasil;

    echo "<br>";
    echo "<br>";

// menghitung harga total belanjaan berdasarkan diskon berikut:

// Jika total belanjaan kurang dari 100, tidak ada diskon.
// Jika total belanjaan antara 100 dan 200 (inklusif), berikan diskon 10%.
// Jika total belanjaan lebih dari 200, berikan diskon 20%.

$belanja = 50000;
$min = 100000;
$dis1 = $belanja-$min*0.10;
$dis2 = $belanja-$min*0.20;

$hasil = $belanja >=100000 ? "Mendapatkan diskon bayar Rp." .number_format($dis1) 
        : ($belanja >=200000 ? "Mendapatkan diskon bayar Rp." .number_format($dis2)
        : "tidak dapat diskon");
    echo $hasil;
    






    









    

    


?>
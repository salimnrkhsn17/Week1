<?php 
    // no 1
    // 3 point
    $a = "ikan";
    $b = "ikan";

     if ( $a == $b ) {
        echo "sama";
     }else {
         echo "tidak sama";
     }

     echo "<br>";
     echo "<br>";

     //no 2
     // 3 point
     $a = 8;
     $b = 9;

     if( $b == $a) {
        echo "sama";
     } else {
         echo max($a,$b);
     }

     echo "<br>";
     echo "<br>";

    // no 3
    // 3 point
    $nilai = 78;
    $min = 78;

    if ($nilai >= $min) {
        echo "aman";
    } else {
        echo "remed";
    }

    echo "<br>";
    echo "<br>";


    // no 4
    // 2 point
    $nilai = -1;

    if ($nilai < 0){
        echo "bil negatif";
    }else {
        echo "bil positif";
    }


    echo "<br>";
    echo "<br>";

    // no 5
    $a = 5;

    if(($a%2) == 0){
        echo "$a adalah bilangan genap";
    }else {
        echo "$a adalah bilangan ganjil";
    }

    //no 6
    // 3 point

    echo "<br>";
    echo "<br>";

    $a = 16;

    if (($a%6) == 0) {
        echo "$a adalah kelipatan 6";
    }else {
        echo "tidak";
    }

    echo "<br>";
    echo "<br>";

    //no 7
    // 3 point

    $a = "7";

    if(is_numeric ($a))
        {
            echo "numeric";
        }
        else
        {
            echo "bukan numeric";
        }

    echo "<br>";
    echo "<br>";

    // no 8
    // 3 point

    $b = "";

    if ($b == null) {
        echo "ya";
    }else {
        echo "tidak";
    }

    echo "<br>";
    echo "<br>";

    // 9
    // 3 point

    $umur = 17;
    
    if ($umur < 17){
        echo "belum";
    }else {
        echo "sudah";
    } 

    echo "<br>";
    echo "<br>";

    // 10
    // 5 point

    $andi = 150000;
    $min = 100000;

    if($andi >= $min) {
        $andi * $min * 0.7;
        echo "selamat mendapat diskon!";
    } else {
        $andi * $min; 
        echo "tidak dapat diskon";
    }

    echo "<br>";
    echo "<br>";

    $beli = 150000;
    $min = 100000;

    if ($beli >= $min) {
        $hasil= $beli-$min * 0.7;
        echo "Perlu membayar $hasil";
    } else {
        echo "Diskon";
    }

    echo "<br>";
    echo "<br>";

    $a = 9;

    if ( $a > 0){
        echo "positif";
        echo " ";
    
        if ( $a > 10){
            echo "lebih besar";
        } else {
            echo "tidak";
        } 
    }else {
        echo "negatif";
    }

    echo "<br>";
    echo "<br>";

    $nil = 95;
    $kehadiran = 100;

    if ( $nil >= 85 && $kehadiran >= 98)
    {
        echo "berprestai";
    } 

    else 
    {
        echo "belum";
    }

    
?>
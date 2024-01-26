<?php

    // Point hari ini : 20,

    // 1
    $kalimat = "Wikrama";
    $subkalimat = substr($kalimat, 0 , 3 );
    echo $subkalimat;

    echo "<br>";

    // 2
    for ($a = 1; $a <= 10; $a++) {
        echo "Angkanya adalah : $a <br>";
    }

    echo "<br>";

    // 3
    for ($a = 10; $a >= 1; $a--) {
        echo "Angkanya adalah : $a <br>";
    }

    echo "<br>";

    // 4
    for ($a = 1; $a <= 6; $a++) {
        echo"<h$a>Heading</h$a>";
    }

    echo "<br>";

    // 5
    for ($i=1; $i <=30 ; $i++) { 
        if ($i%4 == 0) {
            echo "$i dapat di bagi dengan 4 <br>";
        }
    }

    echo "<br>";

    // 6
    $awal = 0;
    for ($i=5; $i <= 25; $i +=5) { 
        if (225 % $i == 0) {
            $awal++;
        }
    }
    echo "bilangan 225 bisa dibagi habis oleh kelipatan 5 adalah: $awal";

    echo "<br>";
    echo "<br>";

    // 7
    $siswa = [
        [
            "nama" => "Andi",
            "rombel" => "PPLG XI-4",
            "rayon" => "Cicurug 6",
            "jk" => "L",
        ],
        [
            "nama" => "Sasa",
            "rombel" => "PPLG XI-4",
            "rayon" => "Cicurug 1",
            "jk" => "P",
        ],
        [
            "nama" => "Lala",
            "rombel" => "PPLG XI-4",
            "rayon" => "Cicurug 9",
            "jk" => "P",
        ],
        [
            "nama" => "Asep Bujir",
            "rombel" => "PPLG XI-4",
            "rayon" => "Cicurug 10",
            "jk" => "L",
        ],
    ];

     foreach ($siswa as $data) {
        echo "Nama: " . $data["nama"];
        echo "<br>";
        echo "Rombel: " . $data["rombel"];
        echo "<br>";
        echo "Rayon: " . $data["rayon"];
        echo "<br>";
        echo "Jenis kelamin: " . $data["jk"];
        echo "<hr>";
   }

   echo "<br>";
   echo "<br>";

   // 8
   $nilai = array (75, 77, 87, 70, 90, 81, 69, 66);

   $kompeten = [];
   $remed = [];

   foreach ($nilai as $bilangan) {
     if ($bilangan >=75 ) {
        $kompeten []= $bilangan;
     }
     else {
        $remed []= $bilangan;
     }
   }

   echo "Kelompok kompeten: ";
        foreach ($kompeten as $nilai_kompeten) {
        echo $nilai_kompeten . ' ';
   }
   echo "<br>";

   echo "Kelompok tidak kompeten: ";
        foreach ($remed as $nilai_remed) {
        echo $nilai_remed . ' '; 
   }
   

   echo "<br>";
   echo "<br>";
   echo "<br>";

   echo "<hr>";

   // 9
   for ($i=1; $i <=3 ; $i++) { 
    
    for ($j=1; $j <=10 ; $j++) { 
        $hasil = $i * $j;
        echo "$i x $j = $hasil" . "<br>";
    }
   }

   echo "<br>";
   echo "<br>";
   // 10
   $barang = [
        [
            "nama_barang" => "Pasta gigi",
            "harga_barang" => 18000,
            "jumlah_beli" => 1,

        ],
        [
            "nama_barang" => "Sabun Mandi",
            "harga_barang" => 5000,
            "jumlah_beli" => 3,

        ],
        [
            "nama_barang" => "Aloe Vera Sheet Mask",
            "harga_barang" => 15000,
            "jumlah_beli" => 5,

        ],
   ];

   $total = 0;
   foreach ($barang as $beli) {
    $total += $beli["harga_barang"] * $beli["jumlah_beli"];
   }

   echo "Jumlah harga barang: Rp." .number_format($total, 0, ',', '.');

   echo "<br>";
   echo "<br>";

   // 11
   $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
   $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

   $kel1 = [];
   $kel2 = [];

   foreach ($bil1 as $bil) {
        if (in_array($bil, $bil2)){
            $kel1[]= $bil;
        } else {
            $kel2[]= $bil;
        }
   }

   foreach ($bil2 as $bil) {
        if (!in_array($bil, $bil1)) {
            $kel2 []= $bil;
        }
   }

  echo "Yang terdapat pada kelompok sama : " .implode(' , ', $kel1) ."<br>";
  echo "Yang terdapat pada kelompok berbeda :" .implode(' , ' , $kel2) . "<br>";

   echo "<br>";
   echo "<br>";


// 12

$barang = [
        [ 'nama' => 'Ban', 
          'diskon' => '10' 
        ],

        [ 'nama' => 'oli mesin'
        ],

        [ 'nama' => 'kampas rem'
        ],

        [ 'nama' => 'busi', 
          'diskon' => '9' 
        ],

        [ 'nama' => 'akumulator',
          'diskon' => '7' 
        ],
    ];

    foreach ($barang as $brgdiskon) {
        if (isset($brgdiskon['diskon'])) {
           echo "{$brgdiskon['nama']} - Diskon: {$brgdiskon['diskon']}%". "<br>";
        }
    }

echo "<br>";
echo "<br>";


// 13

$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
]; 

$kabisat;
foreach ($data as $tahun) {
    if ($tahun['tahun'] % 4 == 0) {
        echo $kabisat = $tahun['nama']. " ";

    }
}


echo "<br>";
echo "<br>";

// 14
$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

    foreach ($student as $nilai) {
        $totalnilai =array_sum($nilai['nilai']);
        echo "Siswa bernama" . " " . $nilai['nama']. " " . "memiliki nilai total sebesar". " ". $totalnilai . "<br>";
    }



    
?>
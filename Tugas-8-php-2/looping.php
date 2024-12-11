<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Looping</title>
</head>

<body>
  <h1>Berlatih Looping</h1>

  <?php
  echo "<h3>Soal No 1 Looping I Love PHP</h3>";
  /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
            dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
  // Lakukan Looping Di Sini
  echo "<h4>LOOPING PERTAMA</h4>";
  for ($i=1; $i<=20 ; $i++) { 
    if ($i%2== 0) {
      echo $i . " - I Love PHP<br>";
    }
  }

  echo "<h4>LOOPING KEDUA</h4>";
  for ($i=20; $i>=1 ; $i--) { 
    if ($i%2== 0) {
      echo $i . " - I Love PHP<br>";
    }
  }


  echo "<h3>Soal No 2 Looping Array Modulo </h3>";
  /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

  $numbers = [18, 45, 29, 61, 47, 34];
  echo "array numbers: ";
  print_r($numbers);
  // Lakukan Looping di sini
  $rests = [];
  foreach ($numbers as $number) {
    $rests[] = $number%5;
  }

  echo "<br>";
  echo "Array sisa baginya adalah:  ";
  print_r($rests);
  echo "<br>";

  echo "<h3> Soal No 3 Looping Asociative Array </h3>";
  /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

            Jangan ubah variabel $items

        */
  $items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
  ];

  foreach ($items as $item) {
    $products[] = array(
      'id'=> $item[0],
      'name'=> $item[1],
      'price'=> $item[2],
      'description'=> $item[3],
      'source'=> $item[4]
    );
  }

  // Output: 
  echo '<pre>';
  print_r($products);
  echo '</pre>';

  echo "<h3>Soal No 4 Asterix </h3>";
  /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
  echo "Asterix: ";
  echo "<br>";

  $i = 1;
  while ($i <= 5) {
    $line = "";
    
    $j = 1;
    while ($j <= $i) {
      $line = $line."*";
      $j++;
    }
    
    echo $line."<br>";
    $i++;
  }

  
  // echo "Asterix: ";
  // echo "<br>";

  // $i = 1;
  // while ($i <= 5) {
  //   echo str_repeat("*", $i)."<br>";
  //   $i++;
  // }

  ?>

</body>

</html>
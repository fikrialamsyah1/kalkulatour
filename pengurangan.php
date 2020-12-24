<?php
 if(isset($_POST['bil1'])){
     $bilangan1 = $_POST['bil1'];
 }else{
     $bilangan1 = "0";
 }
 if(isset($_POST['bil2'])){
     $bilangan2 = $_POST['bil2'];
 }else{
     $bilangan2 = "0";
 }
   $hasil = $bilangan1 - $bilangan2;
    ?>

<html>
    <head>
            <title>KALKULATOUR</title>
            <link rel="stylesheet" type="text/css" href=style.css>
                </head>
                    <body>
                        <h1>      </h1>
                    <form method="POST" action="pengurangan.php">
                    PENGURANGAN<br /><br />
                    <div class="form__group">
                    <input type="text" class="form__input" id="name" placeholder="masukan angka" required="" name="bil1"/><br />
                    <h2>-</h2><br />
                    <input type="text" class="form__input" id="name" placeholder="masukan angka" required="" name="bil2"/><br />
</div>
                    <input type="submit" id="button" name="submit" value="PROSES" />



<?php echo "<p>Anda telah memasukkan bilangan pertama = ".$bilangan1. "</p>";
 echo "<p>Anda telah memasukkan bilangan kedua = ".$bilangan2. "</p>";
  echo "<p>Hasil pengurangannya adalah ".$hasil. "</p>"
  ?>
  </body>
  </html>
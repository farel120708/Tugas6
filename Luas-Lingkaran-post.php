<h3>Hitung luas lingkaran</h3>
<form method="POST">
    <input type="text" name="jari" placeholder="Jari jari"><br>
    <button>Hasil</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jari = $_POST['jari'];
     //perkalian
    $hasil = 3.14 * $jari * $jari;
    echo "luas lingkaran adalah $hasil";

}
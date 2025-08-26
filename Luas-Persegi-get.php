<h3>Hitung luas persegi</h3>
<form method="GET">
    <input type="text" name="sisi" placeholder="sisi"><br>
    <input type="text" name="sisi" placeholder="sisi"><br>
    <button>Hitung</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $sisi = $_GET['sisi'];
    $sisi = $_GET['sisi'];
    //perkalian
    $hasil = $sisi * $sisi;
    echo "luas persegi adalah $hasil";

}
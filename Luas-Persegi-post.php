<h3>Hitung luas persegi</h3>
<form method="POST">
    <input type="text" name="sisi" placeholder="sisi"><br>
    <input type="text" name="sisi" placeholder="sisi"><br>
    <button>Hitung</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sisi = $_POST['sisi'];
    $sisi = $_POST['sisi'];
    //perkalian
    $hasil = $sisi * $sisi;
    echo "luas persegi adalah $hasil";

}
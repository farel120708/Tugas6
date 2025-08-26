<h3>Hitung luas lingkaran</h3>
<form method="GET">
    <input type="text" name="jari" placeholder="Jari jari"><br>
    <button>Hasil</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['jari'])) {
    $jari = $_GET['jari'];
    // perkalian
    $hasil = 3.14 * $jari * $jari;
    echo "Luas lingkaran adalah $hasil";
}
?>
<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluaslingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas;
}
echo "jari-jari = 10 cm. <br> Luas Lingkaran = " . hitungluaslingkaran(10) . " cm<sup>2</sup>";
echo "<hr>";



echo "<h4>mengitung keliling lingkaran</h4>";
function hitungkelilinglingkaran($r) {
    $keliling = 3.14 * $r * 2;
    return $keliling; 
}
echo "jari-jari = 20 cm. <br> Keliling Lingkaran = " . hitungkelilinglingkaran(20) . " cm";
echo "<hr>";

?>
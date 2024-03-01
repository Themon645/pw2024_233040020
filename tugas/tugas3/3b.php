<?php
function urutanAngka ($angka) {
  $jumlah = 1;
  for ($i = 1; $i <= $angka; $i++) {
    for ($j = 1; $j <= $i; $j++){
      echo $jumlah++ . " ";
    }
    echo "<br>";
  }
}

echo urutanAngka(5);
<?php
// $mahasiswa = [["Hilman", "6701194051",  "hilman@gmail.com", "Sistem Informasi"],
//       ["asep", "1122334455", "asep@gmail.com", "teknik informatika"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// keynya adalah string yang kita buat 
$mahasiswa = [
  
  ["nama" => "Hilman",
              "nim" => "6701194051",
              "email" => "hilman@gmail.com ",
              "jurusan" => "Sistem Informasi",
              "gambar" => "1.jpeg"
            ],
  ["nama" => "Asep",
              "nim" => "1122334455",
              "email" => "asep@gmail.com ",
              "jurusan" => "teknik informatika",
              "gambar" => "2.jpeg"
              ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>
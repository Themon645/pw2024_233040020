<?php 
$mahasiswa = [
  
  ["nama" => "Hilman",
              "nim" => "7001194051",
              "email" => "hilman@gmail.com ",
              "jurusan" => "Sistem Informasi",
              "gambar" => "1.jpeg"
            ],
  ["nama" => "zaldi",
              "nim" => "6801194051",
              "email" => "zaldi@gmail.com ",
              "jurusan" => "teknik nuklir",
              "gambar" => "2.jpeg"
            ],
  ["nama" => "wahyu",
              "nim" => "9001194051",
              "email" => "wahyu@gmail.com ",
              "jurusan" => "teknologi informasi",
              "gambar" => "3.jpeg"
            ],
  ["nama" => "Dadan",
              "nim" => "4601194051",
              "email" => "Dadan@gmail.com ",
              "jurusan" => "gizi",
              "gambar" => "4.jpeg"
            ],
  ["nama" => "azis",
              "nim" => "8901194051",
              "email" => "azis@gmail.com ",
              "jurusan" => "hukum",
              "gambar" => "5.jpeg"
            ],
  ["nama" => "Zafar",
              "nim" => "2801194051",
              "email" => "Zafar@gmail.com ",
              "jurusan" => "ilmu komunikas",
              "gambar" => "6.jpeg"
            ],
  ["nama" => "idan",
              "nim" => "7101194051",
              "email" => "idan@gmail.com ",
              "jurusan" => "teknik sipil",
              "gambar" => "7.jpeg"
            ],
  ["nama" => "adrin",
              "nim" => "8201194051",
              "email" => "andrin@gmail.com ",
              "jurusan" => "teknik mesin",
              "gambar" => "8.jpeg"
            ],
  ["nama" => "zulham",
              "nim" => "3301194051",
              "email" => "zulham@gmail.com ",
              "jurusan" => "teknik elektro",
              "gambar" => "9.jpeg"
            ],
  ["nama" => "Asep",
              "nim" => "1122334455",
              "email" => "asep@gmail.com ",
              "jurusan" => "teknik informatika",
              "gambar" => "10.jpeg"
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
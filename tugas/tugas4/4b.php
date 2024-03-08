<?php
$Hardware = array ("Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h3>Macam-macam perangkat keras Komputer</h3>
    <ol>
      <?php foreach ($Hardware as $H) : ?>
        <li>
          <?= $H; ?>
        </li>
        <?php endforeach; ?>
    </ol>

    <h3> Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_push($Hardware, "Card Reader", "Modem");?>
        <?php sort($Hardware) ?>    
        <?php foreach ($Hardware as $H) : ?>
        <li><?php echo $H ?></li>
        <?php endforeach; ?>
    </ol>
  
</body>
</html>
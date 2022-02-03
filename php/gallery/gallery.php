<?php require 'load.php'; ?>
<?php require 'delete.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <a href="/create.php">Добавить изображения</a>
  <div>
    <form action="" method="POST">
      <?php
      $answer = load_images('upload', array('jpg', 'png', 'jpeg'));
      $allFiles = $answer[0];
      $allPhotos = $answer[1];
      foreach ($allFiles as $key => $value) {
        echo '<div class = "blok_img">
      <img src="' . $value .  '" class="pimg" title="' . $value . '"/><br>';
        echo ' <span>Дата создания ' .  date("d.m.Y", filectime($value)) . '</span><br>';
        echo ' <input type="checkbox" name="images[]" value="' . $value . '" class="check"></div>';
      }
      echo '<input type="hidden" name="allPhotos" value=' . $allPhotos . '>';
      echo '</div>';
      ?>
      <label><input type="checkbox" name="rmAll" id="" class="check"> Удалить все</label><br>
      <button type="submit">Удалить</button>
    </form>
  </div>
</body>

</html
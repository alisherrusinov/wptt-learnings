<?php require 'delete.php' ?>
<?php require 'load.php' ?>
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
  <form action="" method="POST">
  <div class="container">
      <?php foreach ($allFiles as $key => $value) { ?>
        <div class="blok_img">
          <img src="<?= $value ?>" class="pimg" title="<?= $value; ?>" /><br>
          <span>Дата создания <?= date("d.m.Y", filectime($value)); ?></span><br>
          <input type="checkbox" name="images[]" value="<?= $value ?>" class="check">
        </div>
      <?php } ?>
      <input type="hidden" name="allPhotos" value='<?= $allPhotos; ?>'>
      </div>
      <label><input type="checkbox" name="rmAll" id="" class="check"> Удалить все</label><br>
      <button type="submit">Удалить</button>
    </form>


</body>

</html>
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
      <?php load_images('images', array('jpg', 'png', 'jpeg')); ?>
      
      
      <label><input type="checkbox" name="rmAll" id="" class="check" > Удалить все</label><br>
      <button type="submit">Удалить</button>
    </form>
  </div>
</body>

</html
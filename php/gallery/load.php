<?php
function load_images($directory, $allowed_types = ['jpg', 'png', 'jpeg'])
{
  $file_parts = array();
  $allPhotos = '';
  $ext = "";
  $title = "";
  $i = 0;
  $dirHandle = @opendir($directory) or die("Ошибка при открытии папки !!!");
  echo '<div class="container">';
  while ($file = readdir($dirHandle)) {
    if ($file == "." || $file == "..") continue;
    $fileParts = explode(".", $file);
    $ext = strtolower(array_pop($fileParts));
    if (in_array($ext, $allowed_types)) {
      echo '<div class = "blok_img">
                                      <img src="' . $directory . '/' . $file . '" class="pimg" title="' . $file . '"/><br>';
      echo ' <span>Дата создания ' .  date("d.m.Y", filectime($directory . '/' . $file)) . '</span><br>';
      echo ' <input type="checkbox" name="images[]" value="' . $directory . '/' . $file .  '" class="check"></div>';
      $i++;
      $allPhotos = $allPhotos . $directory . '/' . $file . ';';
    }
  }
  echo '<input type="hidden" name="allPhotos" value=' . $allPhotos . '>';
  echo '</div>';
  closedir($dirHandle);
}

<?php
function load_images($directory, $allowed_types = ['jpg', 'png', 'jpeg'])
{
  $allFiles = [];
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
      $i++;
      $allPhotos = $allPhotos . $directory . '/' . $file . ';';
      $allFiles[] = $directory . '/' . $file;
    }
  }

  closedir($dirHandle);
  $answer = [];
  $answer[] = $allFiles;
  $answer[] = $allPhotos;
  return $answer;
}

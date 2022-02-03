<?php
function load_images($directory, $allowed_types = ['jpg', 'png', 'jpeg'])
{
  $allFiles = [];
  $allPhotos = '';
  $ext = "";
  $title = "";
  $i = 0;
  $dirHandle = @opendir($directory) or die("Ошибка при открытии папки !!!");
  while ($file = readdir($dirHandle)) {
    if ($file == "." || $file == "..") continue;
    $ext = pathinfo($file)['extension'];
    if (in_array($ext, $allowed_types)) {
      $i++;
      $allPhotos = $allPhotos . $directory . '/' . $file . ';';
      $allFiles[] = $directory . '/' . $file;
    }
  }

  closedir($dirHandle);
  $answer = [];
  $answer['files'] = $allFiles;
  $answer['photos'] = $allPhotos;
  return $answer;
}

$answer = load_images('upload', array('jpg', 'png', 'jpeg'));
$allFiles = $answer['files'];
$allPhotos = $answer['photos'];
?>

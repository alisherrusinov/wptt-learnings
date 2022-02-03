<?php require 'include/upload_file.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <input name="userfile[]" id="userfile" type="file" multiple accept=".jpg, .png, .jpeg" />
        <input type="submit" value="Отправить файл" />
    </form>
</body>

</html>
<?php

function replaceSymbols($fileName)
{
    $alphas = range('a', 'z');
    $numbers = range(0, 9);
    $allowableSymbols = array_merge($numbers, $alphas);
    $allowableSymbols[] = '-';
    $allowableSymbols[] = '_';
    $fileNameLen = strlen($fileName);
    for ($i = 0; $i < $fileNameLen; $i++) {
        if (!in_array(strtolower($fileName[$i]), $allowableSymbols)) {
            $fileName[$i] = '_';
        }
    }
    return $fileName;
}

if (!empty($_FILES)) {
    $countfiles = count($_FILES['userfile']['name']);
    if ($countfiles <= 5) {
        for ($i = 0; $i < $countfiles; $i++) {
            $filename = $_FILES['userfile']['name'][$i];
            $filename = replaceSymbols($filename);
            move_uploaded_file($_FILES['userfile']['tmp_name'][$i], 'images/' . $filename);
        }
    } else {
        require 'error_upload.php';
    }
}

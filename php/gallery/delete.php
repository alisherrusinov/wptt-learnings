<?php
if (!empty($_POST)) {
    $allPhotos = explode(';', $_POST['allPhotos']);
    if (array_key_exists('rmAll', $_POST)) {
        if ($_POST['rmAll']) {
            foreach ($allPhotos as $key => $value) {
                if (strlen($value) > 0) {
                    unlink($value);
                }
            }
        }
    } else {
        foreach ($_POST['images'] as $key => $value) {
            unlink($value);
        }
    }
}

<?php

require 'config.php';

function upload_image ($file) {

    if(($file['image']['type'] === 'image/jpeg' || $file['image']['type'] === 'image/png') && $file['image']['size'] < 1000000) {

        ($file['image']['type'] === 'image/jpeg') ? $ext = '.jpg' : $ext = '.png';

        $newFileName = uniqid() . $ext;
        if (move_uploaded_file($file['image']['tmp_name'], UPLOADS_DIR . $newFileName)) {
            return copy(UPLOADS_DIR . $newFileName, PUB_UPLOADS_DIR . $newFileName);
        }

        return false;

    }

    return false;

}

function list_uploads () {

    $images = [];

    foreach (scandir(PUB_UPLOADS_DIR) as $image) {

        if (in_array($image, ['.', '..'])) continue;

        $images[$image] = filemtime(PUB_UPLOADS_DIR . $image);

    }

    arsort($images);

    $images = array_keys($images);

    foreach ($images as $image) {
        echo '<a class="thumbnail" href="' . PUBLIC_UPLOADS . $image . '" target="_blank">
                <img class="img-responsive" src="' . PUBLIC_UPLOADS . $image . '" />
              </a>';
    }
}
<?php

include_once './Helper.php';

$rootBuild = Helper::getBuildImgPath() . '/public/build';

$folders = Helper::scanFolders();

foreach ($folders as $folder) {
    $images = Helper::scanImagesDeep($folder);
    foreach ($images as $image) {
        $base64 = Helper::base64EncodeImage($image['path']);
        Helper::saveText($rootBuild . '/' . $folder . '/' . $image['name'] . '.js', $base64, $image['name']);
    }
}

exit(0);

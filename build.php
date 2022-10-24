<?php

include_once './Helper.php';

$rootBuild = Helper::getBuildImgPath() . '/public/build';

$folders = Helper::scanFolders();

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die;
}

foreach ($folders as $folder) {
    $images = Helper::scanImagesDeep($folder);
    foreach ($images as $k => $image) {
//        dd($image['folder']);
        $base64 = Helper::base64EncodeImage($image['path']);
        $chunk = chunk_split($base64);
        $lines = explode("\n", $chunk);
        $chunkArray = array_chunk($lines, 1000);

        $name = $image['name'];
        $packName = "_fappak" . str_replace('.', '_', $name);
        $packName = str_replace(' ', '', $packName);
        $packName = '"' . $packName . '"';
        $chunkCount = count($chunkArray);
        $path = $rootBuild . '/' . $folder . '/' . $name . '.js';

        foreach ($chunkArray as $key => $chunk) {
            $chunkName = $name . '-' . $key;
            $chunk = implode("\n", $chunk);
            $pathChunk = $rootBuild . '/' . $folder . '/' . $name . '-chunk/' . $chunkName . '.js';
            Helper::saveChunk($pathChunk, $chunk, $key, $packName);
        }

        Helper::saveText($path, $packName, $chunkCount, $name, $image['folder']);

        if($k === 2) die();

    }
}

exit(0);

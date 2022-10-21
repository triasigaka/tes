<?php

class Helper
{
    public static function getBuildImgPath()
    {
        return __DIR__;
    }

    // scan folders in build-img/images deep
    public static function scanImagesDeep($nv = '', $path = null)
    {
        $images = [];
        if (is_null($path)) {
            $path = self::getBuildImgPath() . '/images/' . $nv;
        }
        $files = scandir($path);
        foreach ($files as $file) {

            if (count($images) > 1) {
                continue;
            }

            if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                $images[] = [
                    'name' => $file,
                    'path' => $path . '/' . $file
                ];
            }
            if ($file !== '.' && $file !== '..') {
                $fullPath = $path . '/' . $file;
                if (is_dir($fullPath)) {
                    $images = array_merge($images, self::scanImagesDeep($nv, $fullPath));
                }
            }
        }
        return $images;
    }

    // scan folders in build-img/images
    public static function scanFolders()
    {
        $folders = array();
        $path = self::getBuildImgPath() . '/images';
        $files = scandir($path);
        foreach ($files as $file) {
            if (is_dir($path . '/' . $file) && $file != '.' && $file != '..') {
                $folders[] = $file;
            }
        }
        return $folders;
    }

    // file to base64
    public static function base64EncodeImage($filename = '')
    {
        if (file_exists($filename)) {
            $base64_image = '';
            $image_info = getimagesize($filename);
            $image_data = fread(fopen($filename, 'r'), filesize($filename));
            return 'data:' . $image_info['mime'] . ';base64,' . chunk_split(base64_encode($image_data));
        }
        return '';
    }

    // save text
    public static function saveText($path = '', $text = '', $imgName = '')
    {
        $folder = dirname($path);
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        // load template.js
        $template = file_get_contents(self::getBuildImgPath() . '/template.js');
        $template = str_replace('{{name}}', $imgName, $template);
        $template = str_replace('{{( . Y . )}}', $text, $template);

        $file = fopen($path, 'w');
        fwrite($file, $template);
        fclose($file);
    }
}

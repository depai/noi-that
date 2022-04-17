<?php

if (!function_exists('getFileFromPath')) {
    function getFileFromPath($images, $path = '')
    {
        $file_list = array();
        if($images) {
            foreach ($images as $image) {
                $file_path = $path . $image->name;    
                $info = pathinfo($file_path);
                if (file_exists(public_path($path . $image->name))) {
                    $size = File::size(public_path($path . $image->name));
                    $file_list[] = array('name' => $info['basename'], 'size' => $size, 'path' => $file_path, 'url' => $path);
                }
            }
        };
        
        return json_encode($file_list);
    }
}
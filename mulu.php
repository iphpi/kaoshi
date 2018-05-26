<?php
echo '<br>-------遍历目录和目录下的子目录和文件---------<br>';
$dir = '../maopao';
function dirList($dir){
    $arr = scandir($dir);
    foreach($arr as $v){
        if($v != '.' && $v != '..'){
            $path = $dir . '/' . $v;
            if(is_dir($path)){
                dirList($path);
            }else{
                echo "<p>{$path}</p>";
            }
        }
    }
}
dirList($dir);
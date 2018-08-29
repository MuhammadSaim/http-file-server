<?php

function getAllFiles(){
  $dir = "./uploads/";
  $files = array();
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        if($file != '.' && $file != '..'){
          $files[] = $file;
        }
      }
      closedir($dh);
      return $files;
    }
  }
}//end get function here

function getAllFileIcons(){
  $dir = "./assets/images/file-icons/";
  $fileIcons = array();
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($icon = readdir($dh)) !== false){
        if($icon != '.' && $icon != '..'){
          $fileIcons[] = $icon;
        }
      }
      closedir($dh);
      return $fileIcons;
    }
  }

}//end get all icons here


function sortFiles($files){
  $srotfiles = array();
  sort($files);
  foreach($files as $file)
    $srotfiles[] = $file;
  return $srotfiles;
}//end sort file here


function getSize($file){
    $bytes = filesize($file);
    $bytes = ($bytes == 0) ? 1 : $bytes;
    $s = array('B', 'KB', 'MB', 'GB');
    $e = floor(log($bytes)/log(1024));
    return sprintf('%.2f '.$s[$e], ($bytes/pow(1024, floor($e))));
}



?>

<?php

class WComicBook {
  
  public $page;
  
  function __construct() {
    global $config;
    if (!defined('BASEPATH')) die('Base path not defined!');
    $this->page = $_GET['action'] ?? 'list';
    $this->{'page_'.$this->page}();
  }
  
  function page_list() {
    global $config;
    $comicList = [];
    foreach (glob($config['comicsPath'].'*.*') as $comic) {
      $fileInfo = pathinfo($comic);
      if (in_array($fileInfo['extension'],$config['validExtensions'])) {
        $comicList[] = $comic;
      }
    }
    $content = BASEPATH.'lib/html/list.php';
    require_once BASEPATH.'lib/html/layout.php';
  }
  
  function page_css() {
    header('Content-Type: text/css');
    include BASEPATH.'lib/html/css.php';
  }
  
  function page_read() {
    global $config;
    $file = $_GET['file'] ?? 'null';
    $file = $config['comicsPath'].$file;
    if (file_exists($file)) {
      $this->page_view($file);
    }
  }
  
  function page_view($file) {
    global $config;
    $timestamp = time();
    $cacheDir = BASEPATH.'cache'.DIRECTORY_SEPARATOR.$timestamp.DIRECTORY_SEPARATOR;
    if (!file_exists($cacheDir)) mkdir($cacheDir);
    exec('7z x "'.$file.'" -o"'.$cacheDir.'" -y');
    $fileList = [];
    foreach (glob(BASEPATH.'cache/'.$timestamp.'/*.*') as $file) {
      $fileInfo = pathinfo($file);
      if (!in_array($fileInfo['extension'],['jpg','jpeg','png'])) continue;
      $fileList[] = $file;
    }
    include BASEPATH.'lib/html/view.php';
  }
  
  function page_delete() {
    global $config;
    $file = $_GET['file'] ?? 'null';
    $file = $config['comicsPath'].urldecode($file);
    if (file_exists($file)) unlink($file);
    else die('Error: File not found!');
    header('Location: index.php');
  }
  
  function purge_cache() {
    $timestamp = time()-600;
    foreach (glob(BASEPATH.'/cache/*') as $dir) {
      if (is_dir($dir) && (int) basename($dir) < $timestamp) {
        $this->rrmdir($dir);
      }
    }
  }
  
  function rrmdir($dir) { 
    if (is_dir($dir)) { 
      $objects = scandir($dir);
      foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (is_dir($dir. DIRECTORY_SEPARATOR .$object) && !is_link($dir."/".$object))
           $this->rrmdir($dir. DIRECTORY_SEPARATOR .$object);
         else
           unlink($dir. DIRECTORY_SEPARATOR .$object); 
       } 
      }
      rmdir($dir); 
   } 
 }
  
}
<?php
define('BASEPATH',__DIR__.DIRECTORY_SEPARATOR);
require BASEPATH.'config.php';
require BASEPATH.'lib'.DIRECTORY_SEPARATOR.'WComicBook.php';

$comicBook = new WComicBook();
$comicBook->purge_cache();
?>
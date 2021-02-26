<?php if ($fileList) foreach ($fileList as $imageFile): ?>
<?php
  $lazyClass = '';
  $src = '';
  $srcOriginal = '';
  if ($config['resizeImages']) {
    $query['src'] = urlencode(str_replace(BASEPATH,'',$imageFile));
    $query['w'] = $config['resizeWidth'] ?? 1200;
    $query['q'] = $config['resizeQuality'] ?? 72;
    $src = 'resize.php?'.http_build_query($query);
  } else {
    $src = str_replace(BASEPATH,'',$imageFile);
  }
  if ($config['lazyload']) {
    $srcOriginal = $src;
    $src = 'https://dummyimage.com/1280x720/333/ddd.jpg&text=This+image+is+loading!+Please+wait...';
    $lazyClass = ' img-lazy';
  }
?>
<img src="<?=$src?>" data-src="<?=$srcOriginal?>" alt="<?=basename($imageFile)?>" class="img-fluid<?=$lazyClass?>"><br>
<?php endforeach; ?>
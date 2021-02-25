<?php if ($fileList) foreach ($fileList as $imageFile): ?>
<img src="https://dummyimage.com/1280x720/333/ddd.jpg&text=This+image+is+loading!+Please+wait..." data-original="https://whome.tk/cbzreader/<?=str_replace(BASEPATH,'',$imageFile)?>" alt="<?=basename($imageFile)?>" class="img-fluid img-lazy"><br>
<?php endforeach; ?>
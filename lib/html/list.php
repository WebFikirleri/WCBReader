<table class="table table-dark table-bordered table-sm">
  <thead>
    <tr>
      <th>Title</th>
      <th class="text-right">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comicList as $comic): $fileInfo = pathinfo($comic); if (!in_array($fileInfo['extension'],$config['validExtensions'])) continue; ?>
    <tr>
      <td><?=basename($comic)?></td>
      <td class="text-right">
        <button class="btn btn-primary btn-sm btn-read" data-file="<?=basename($comic)?>"> <i class="fas fa-eye fa-fw"></i> Read</button>
        <a href="index.php?action=delete&file=<?=basename($comic)?>" class="btn btn-danger btn-sm"> <i class="fas fa-trash fa-fw"></i> Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="modal fade" id="readModal" tabindex="-1" aria-labelledby="readModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body m-1" id="readContainer"></div>
      <div class="modal-footer m-1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $('.btn-read').on('click', function() {
    $('#preloader').fadeIn();
    var file = $(this).data('file');
    $('#readContainer').load('index.php?action=read&file='+encodeURI(file), function() {
      $('#preloader').fadeOut();
      $('#readModal').modal('show');
      $("img.img-lazy").lazyload({threshold:800, skip_invisible: false});
    });
  });
</script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/slate/bootstrap.min.css" integrity="sha512-o5yeKjohzmmY4mschw0nYnJxQJu+2xrDLeWhTG57dFRuXyzWX2630AwHExfxuFxfaBYUuRQzP7ggJJYhfRnVqw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>
    <title>WComicBook Reader</title>
    <link rel="stylesheet" href="index.php?action=css">
  </head>
  <body>
    <div id="preloader">
      <div class="preloaderContent">
        <div class="loader">
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
          <div class="inner"></div>
        </div>
      </div>
    </div>
    <?php include BASEPATH.'lib/html/menu.php'; ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <?php include $content; ?>
        </div>
      </div>
    </div>
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aboutModalLabel">About WComicBook Reader v0.1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>WComicBook Reader is an open source php application to read your CBZ, CBR, CB7, ZIP, RAR, 7Z files.</p>
        <h4>Usage</h4>
        <p>This application uses 7z to extract archive files. So; your server needs 7z command line installed.</p>
        <p>Upload your comic files directly to comics directory, not in subfolders.</p>
        <p>Make sure your cache folder has 0777 permissions.</p>
        <h4>Libraries</h4>
        <ul>
          <li>jQuery 3.5.1</li>
          <li>Bootstrap 4.6.0</li>
          <li>Boostwatch Slate Theme 4.6.0</li>
          <li>Font Awesome 5 Free</li>
          <li>Lazy Load 1.9.1</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
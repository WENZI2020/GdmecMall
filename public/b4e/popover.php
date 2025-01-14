<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Popover</title>
  </head>
  <body>
    <div class="container">
      <h1>Popover <small>Bootstrap Visual Test</small></h1>

      <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="auto" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on auto
      </button>

      <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Default placement was on top but not enough place">
        Popover on top
      </button>

      <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on right
      </button>

      <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on bottom
      </button>

      <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on left
      </button>
    </div>

    <script src="../ui/jquery.js"></script>
    <script src="../ui/popper.js"></script>
    <script src="../ui/util.js"></script>
    <script src="../ui/tooltip.js"></script>
    <script src="../ui/popover.js"></script>

    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      })
    </script>
  </body>
</html>

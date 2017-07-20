
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Belajar Membuat Web</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <script src="assets/js/jquery-3.1.1.min"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/BlogNative/index.php">Agus Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?= empty($_GET['v'])?"active":""  ?>">
              <a href="/BlogNative/index.php">Home</a>
            </li>
            <li class="<?= $_GET['v']=='shortener'?'active':'' ?>">
              <a href="<?= "/BlogNative/index.php?v=shortener" ?>">Shortener</a>
            </li>
            <li><a href="<?= "/BlogNative/index.php?v=tes-curl" ?>">Curl</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php
          if(!empty($_GET['v'])){
            if(file_exists('view/'.$_GET['v'].'.php')){
              include('view/'.$_GET['v'].'.php');
            }else{
              $errorView ="not-exist";
              include('view/home.php');
            }
          }else{
            include('view/home.php');
          }
          ?>
        </div>
      </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

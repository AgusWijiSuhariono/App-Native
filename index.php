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
    <link rel="stylesheet" type="text/css" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugin/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/plugin/fullcalendar/fullcalendar.min.css">
    <script src="assets/js/jquery-3.1.1.min"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Demo Aplikasi <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?= $_GET['v']=='shortener'?'active':'' ?>">
                  <a href="<?= "/BlogNative/index.php?v=shortener" ?>">Shortener</a>
                </li>
                <li class="<?= $_GET['v']=='googlemaps'?'active':'' ?>">
                  <a href="<?= "/BlogNative/index.php?v=googlemaps" ?>">Google Maps</a>
                </li>
                <li class="<?= $_GET['v']=='tes-curl'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=tes-curl" ?>">Curl</a></li>
                <li class="<?= $_GET['v']=='datepicker'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=datepicker" ?>">DatePicker</a></li>
                <li class="<?= $_GET['v']=='select2'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=select2" ?>">Select 2</a></li>
                <li class="<?= $_GET['v']=='highchart'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=highchart" ?>">Highchart</a></li>
                <li class="<?= $_GET['v']=='datatables'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=datatables" ?>">Data Table</a></li>
                <li class="<?= $_GET['v']=='criptografi'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=criptografi" ?>">Criptografi</a></li>
                <li class="<?= $_GET['v']=='fungsi'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=fungsi" ?>">Fungsi</a></li>
                <li class="<?= $_GET['v']=='fullcalendar'?'active':'' ?>"><a href="<?= "/BlogNative/index.php?v=fullcalendar" ?>">Full Calendar</a></li>
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
    <script type="text/javascript" src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugin/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugin/highchart/highcharts.js"></script>
    <script type="text/javascript" src="assets/plugin/highchart/highcharts-3d.js"></script>
    <script type="text/javascript" src='assets/plugin/DataTables/media/js/jquery.dataTables.js'></script>
    <script type="text/javascript" src='assets/plugin/fullcalendar/lib/moment.min.js'></script>
    <script type="text/javascript" src='assets/plugin/fullcalendar/fullcalendar.min.js'></script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Portál - <?php echo $pageTitle; ?></title>
    
    <!-- jQuery: -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <!-- Bootstrap: -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <!-- CSS: -->
    <link rel="stylesheet" type="text/css" href="views/css/base.css">
    
    <!-- Lightbox CSS -->
    <link href="views/lightbox/css/lightbox.css" rel="stylesheet">
    
    <!-- Lightbox Javascript -->
    <script src="views/lightbox/js/lightbox.min.js"></script>
    
    <!-- Javascript -->
    <link rel="stylesheet" type="text/javascript" href="views/js.js">

  </head>
  <body>

    <div id="header" class="col-md-12">
      <h1 id="sitename">Bemutato weboldal</h1>
      <?php include('navigation.php'); ?>
    </div>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>404</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.min.css">
  </head>
  <body class="error">
    <div class="container">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <div class="logo">
          <h1>404</h1>
        </div>
        <span class="label label-danger">Échec de la connexion</span>
        <div class="clearfix"></div>
        <div class="col-lg-6 col-lg-offset-3">
          
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="col-lg-6  col-lg-offset-3">
          <div class="btn-group btn-group-justified">
            <!--<span class="label label-danger">Échec de la connexion</span>-->
            <a href="<?php echo site_url(); ?>" class="btn btn-warning">Retourner Pour Connecter</a> 
          </div>
        </div>
      </div><!-- /.col-lg-8 col-offset-2 -->
    </div>
  </body>
</html>

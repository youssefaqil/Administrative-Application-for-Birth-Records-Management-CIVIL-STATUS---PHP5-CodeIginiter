<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/img/metis-tile.png" />
<style type="text/css">
  
  #btn {
 background: #998d99;
  background-image: -webkit-linear-gradient(top, #998d99, #000000);
  background-image: -moz-linear-gradient(top, #998d99, #000000);
  background-image: -ms-linear-gradient(top, #998d99, #000000);
  background-image: -o-linear-gradient(top, #998d99, #000000);
  background-image: linear-gradient(to bottom, #998d99, #000000);
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  text-shadow: 1px 1px 3px #000000;
  font-family: Courier New;
  color: #ffffff;
  font-size: 19px;
  padding: 9px 20px 10px 20px;
  text-decoration: none;
}

#btn:hover {
 background: #ffffff;
  background-image: -webkit-linear-gradient(top, #ffffff, #ffffff);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff);
  background-image: -ms-linear-gradient(top, #ffffff, #ffffff);
  background-image: -o-linear-gradient(top, #ffffff, #ffffff);
  background-image: linear-gradient(to bottom, #ffffff, #ffffff);
  text-decoration: none;
  color: #000000;
}
</style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/animate.css/animate.min.css">
  </head>
  <body class="login">
    <div class="form-signin">
      <div class="text-center">
        <img src="<?php echo base_url()?>assets/img/etatlogo.PNG" alt="Metis Logo">
      </div>
      <hr>
      <div class="tab-content">
        <div id="login" class="tab-pane active">
          <form action="<?php echo site_url('session_controller/login'); ?>" method="post">
            <p class="text-muted text-center">
              Entrez Votre Pseudo Et Mot Me Passe
            </p>
  <input type="text" placeholder="Pseudo" class="validate[required] form-control top" name="pseudo">
          <input type="password" placeholder="Mot de Passe" class="validate[required] form-control bottom" name="password" >
        <!--  
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrer">Entrer</button>-->
      <input type="submit" name="entrer" id="btn"  class="btn btn-lg btn-primary btn-block" value="Enter" />
          </form>
        </div>
        
      
      </div>
      <hr>
   
    </div>
    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>
  </body>
</html>

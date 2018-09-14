<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Acceuil d'ETAT CIVIL</title>
   

   <style type="text/css">
#MEN{width: 250px;}
#outer1{padding-left:252px;}
   </style>
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!--IE Compatibility modes     #MEN{width: 251px;}-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.min.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/metismenu/metisMenu.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="<?php //echo base_url()?>assets/lib/html5shiv/html5shiv.js"></script>
        <script src="<?php //echo base_url()?>assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: "../<?php echo base_url()?>assets/"
      };
    </script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url()?>assets/css/less/theme.less">
    <script src="<?php echo base_url()?>assets/lib/less/less-1.7.5.min.js"></script>

    <!--Modernizr 2.8.2-->
    <script src="<?php echo base_url()?>assets/lib/modernizr/modernizr.min.js"></script>
  </head>
  <body class="  ">
    <div class="bg-dark dk" id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <a href="index.html" class="navbar-brand">
                <img src="<?php echo base_url()?>assets/img/logo_youssef.png" alt="">
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a> 
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a href="login.html" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"> <a href="<?php echo site_url('acceuil_controller/logout'); ?>">Déconnexion</a></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a> 
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
             <!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="search-bar">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span> 
              </div>
            </form><!-- /.main-search -->
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-square-o"></i>&nbsp;&nbsp; Acceuil d'ETAT CIVIL</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      
      <div id="left">
      <div id="MEN">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url()?>assets/img/user.gif">
              <span class="label label-danger user-label">16</span> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading">Archie</h5>
              <ul class="list-unstyled user-info">
                <li> <a href="">Administrator</a>  </li>
                <li>Last Access :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
     
          
        <ul id="menu" class="bg-blue dker">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="dashboard.html">
              <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Acceuil</span> 
            </a> 
          </li>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-building "></i>
              <span class="link-title">Gestion des Parents</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
            <?php if($method_pseudo): ?>
              <?php foreach($method_pseudo as $privil): ?>
                <?php if($privil->privilege =='AjoutParent'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/parent_controller/liste_parent.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Ajouter Parent</a> 
              </li>
             <?php } ?>
             <?php if($privil->privilege =='SupprimParent'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/parent_controller/parent_s.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Supprimer Parent</a> 
              </li>
              <?php } ?>
             <?php if($privil->privilege =='ModifParent'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/parent_controller/parent_m.php">
                  <i class="fa fa-angle-right"></i>&nbsp;Modifier Parent</a> 
              </li>
             <?php } ?>
             <?php  endforeach; ?>
             <?php endif; ?>
            </ul>
          </li>
           <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
           <?php if($privil->privilege =='GestionRegis'){ ?>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span class="link-title">Gestion des Registres</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="http://localhost:81/ec/index.php/registre_controller/liste_registre.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Gérer la liste</a> 
              </li>
            </ul>
          </li>
          <?php } ?>
          <?php  endforeach; ?>
             <?php endif; ?>
          <li class="">
            <a href="javascript:;">
              <i class="fa fa-pencil"></i>
              <span class="link-title">
            Gestion des Enfant
    </span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
            <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
            <?php if($privil->privilege =='AjoutEnf'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/enfant_controller/ajout_enfant.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Ajouter Enfant</a> 
              </li>
              <?php } ?>
              <?php if($privil->privilege =='SupprimEnf'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/enfant_controller/enfant_s.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Supprimer Enfant</a> 
              </li>
              <?php } ?>
              <?php if($privil->privilege =='ModifEnf'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/enfant_controller/enfant_m.php">
                  <i class="fa fa-angle-right"></i>&nbsp; Modifier Enfant</a> 
              </li>
              <?php } ?>
               <?php  endforeach; ?>
             <?php endif; ?>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="link-title">
              Gestion Déclaration
            </span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
            <?php if($privil->privilege =='AjoutDecl'){ ?>
              <li>
          <a href="http://localhost:81/ec/index.php/declaration_controller/declaration">
                  <i class="fa fa-angle-right"></i>&nbsp;Ajouter Un declaration</a> 
              </li>
              <?php } ?>
               <?php if($privil->privilege =='ModifDecl'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/declaration_controller/declaration_modifl">
                  <i class="fa fa-angle-right"></i>&nbsp;Modifier Un Déclaration</a> 
              </li>
              <?php } ?>
              <?php if($privil->privilege =='SupprimDecl'){ ?>
              <li>
                <a href="http://localhost:81/ec/index.php/declaration_controller/declaration_s">
                  <i class="fa fa-angle-right"></i>&nbsp;Supprimer Un Déclaration </a> 
              </li>
              <?php } ?>
               <?php  endforeach; ?>
             <?php endif; ?>
            </ul>
          </li>
           <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
          <?php if($privil->privilege =='GestionUtil'){ ?>
           <li>
            <a href="javascript:;">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="link-title">
              Gestion Utilisateur
            </span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
          <a href="http://localhost:81/ec/index.php/utilisa_controller/liste_util">
                  <i class="fa fa-angle-right"></i>&nbsp;Gérer Les Utilisateurs</a>
              </li>
            </ul>
          </li>
          <?php } ?>
           <?php  endforeach; ?>
             <?php endif; ?>
              <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
          <?php if($privil->privilege =='GestionPrivil'){ ?>
           <li>
            <a href="javascript:;">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="link-title">
              Gestion Privilèges
            </span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
          <a href="http://localhost:81/ec/index.php/privilege_controller/liste_privilege">
                  <i class="fa fa-angle-right"></i>&nbsp;Gérer Les Privilèges</a> 
              </li>
            </ul>
          </li>
          <?php } ?>
          <?php  endforeach; ?>
             <?php endif; ?>
               <?php if($method_pseudo): ?>
          <?php foreach($method_pseudo as $privil): ?>
          <?php if($privil->privilege =='GestionRole'){ ?>
          <li>
            <a href="javascript:;">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="link-title">
              Gestion Roles
            </span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
          <a href="http://localhost:81/ec/index.php/role_controller/liste_role">
                  <i class="fa fa-angle-right"></i>&nbsp;Gérer Les Role</a> 
              </li>
            </ul>
          </li>
          <?php } ?>
         <?php endforeach; ?>
       <?php endif; ?>
        </ul><!-- /#menu -->
  
      </div><!-- /#left -->
      </div>
      <div id="outer1"> 
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            &nbsp;
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      </div>
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer class="Footer bg-dark dker">
      <p>2014 &copy; Metis Bootstrap Admin Template</p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery 2.1.1 -->
    <script src="<?php echo base_url()?>assets/lib/jquery/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="<?php echo base_url()?>assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo base_url()?>assets/lib/screenfull/screenfull.js"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo base_url()?>assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo base_url()?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/style-switcher.min.js"></script>
  </body>
</html>

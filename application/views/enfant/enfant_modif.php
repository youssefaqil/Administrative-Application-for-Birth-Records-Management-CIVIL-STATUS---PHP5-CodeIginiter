<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Modifier Enfant</title>
     
     <style type="text/css">
    #position{
 height: 0px;
width: 1039px;
padding-bottom: 700px;
    }
    #france_from{float:left;float: left;
width: 614px;
margin-left: -40px;}

    #arabic_from{float:right;float: right;
width: 702px;
margin-right: -264px;}

#update{position: absolute;
left: 327px;
top: 540px;
width: 380px;
}
input{text-align: center;}
#label{width: 60px;}
#label2{width: 322px}



     </style>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

    <!--IE Compatibility modes-->
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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/validationEngine/css/validationEngine.jquery.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/flick/jquery-ui.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

   

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
                <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
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
                  <i class="fa fa-power-off"></i>
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
              <i class="fa fa-filter"></i>&nbsp; Form enfant</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
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
              <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span> 
            </a> 
          </li>
          
          <li class="nav-divider"></li>
          <li>
            <a href="login.html">
              <i class="fa fa-sign-in"></i>
              <span class="link-title">
    Login Page
    </span> 
            </a> 
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-code"></i>
              <span class="link-title">
    	Unlimited Level Menu 
    	</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li>
                    <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a> 
                    <ul>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li> <a href="javascript:;">Level 3</a>  </li>
                      <li>
                        <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a> 
                        <ul>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li> <a href="javascript:;">Level 4</a>  </li>
                          <li>
                            <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a> 
                            <ul>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                              <li> <a href="javascript:;">Level 5</a>  </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li> <a href="javascript:;">Level 4</a>  </li>
                    </ul>
                  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
              <li> <a href="javascript:;">Level 1</a>  </li>
              <li>
                <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                  <li> <a href="javascript:;">Level 2</a>  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            <style>
              .form-control.col-lg-6 {
                width: 50% !important;
              }
            </style>
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Modifier les infomation de ce enfant </h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                          <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                          <i class="fa fa-expand"></i>
                        </a> 
                        
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div id="collapse2" class="body">
                  <?php if($enfants): ?>
                    <?php foreach($enfants as $enfant): ?>
                      <div id="position">
                    <form class="form-horizontal" id="popup-validation" action="<?php echo site_url('enfant_controller/modif_enf/'.$enfant->idEnfant); ?>" method="post">
                    <div id="arabic_from">
                      <div class="form-group">
                      <div class="col-lg-4">
                          <input type="text" name="Nom_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Nom_ar; ?>">
                         </div>
                        <label class="control-label col-lg-4"  id="label"> : النسب </label>
                        
                      </div>

                       <div class="form-group">
                       <div class="col-lg-4">
                          <input type="text" name="Prenom_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Prenom_ar; ?>">
                         </div>
                        <label class="control-label col-lg-4" id="label"> : الاسم  </label>
                        
                      </div>
                       <div class="form-group">
                       <div class="col-lg-4">
                          <textarea type="text" name="DateNaiss_arabic_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->DateNaiss_arabic_ar; ?>"><?php echo $enfant->DateNaiss_arabic_ar; ?></textarea>
                         </div>
                        <label class="control-label col-lg-4" id="label"> : تاريخ الازدياد العربي  </label>
                        
                      </div>
                      <div class="form-group">
                       <div class="col-lg-4">
                          <textarea type="text" name="DateNaiss_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->DateNaiss_ar; ?>"><?php echo $enfant->DateNaiss_ar; ?></textarea>
                         </div>
                        <label class="control-label col-lg-4" id="label"> : تاريخ الازدياد الفرنسي  </label>
                       
                      </div>

                      <div class="form-group">
                      <div class="col-lg-4">
                          <textarea type="text" name="LieuNaiss_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->LieuNaiss_ar; ?>"><?php echo $enfant->LieuNaiss_ar; ?></textarea>
                         </div>
                        <label class="control-label col-lg-4" id="label"> : مكان الازدياد </label>
                        
                      </div>

                        <div class="form-group">
                         <div class="col-lg-4">
                          <input type="text" name="Adresse_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Adresse_ar; ?>">
                         </div>
                        <label class="control-label col-lg-4" id="label"> : العنوان</label>
                       
                      </div>

                        <div class="form-group">
                        
                      <div class="checkbox" >
                            <label>
                              <input class="uniform" type="radio" class="form-control" id="sexe" name="Sexe_ar" required="required" value="ذكر" <?php echo set_value('Sexe_ar', $enfant->Sexe_ar) == 'ذكر' ? "checked" : ""; ?> />ذكر
                            </label>
                            <label>
                              <input class="uniform" type="radio" class="form-control" id="sexe" name="Sexe_ar" required="required" value="أنثى"<?php echo set_value('Sexe_ar', $enfant->Sexe_ar) == 'أنثى' ? "checked" : ""; ?> >أنثى
                            </label>
                          </div>
                          
                          <label class="control-label col-lg-4" id="label2"> : الجنس</label>
                      </div>

                      <div class="form-group">
                       <div class="col-lg-4">
                          <input type="text" name="Nationalitr_ar" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Nationalitr_ar; ?>">
                         </div>
                        <label class="control-label col-lg-4" id="label"> : الجنسية  </label>
                      </div>
                      </div>
                      <div id="france_from">
                      <div class="form-group">
                        <label class="control-label col-lg-4">NOM :</label>
                        <div class="col-lg-4">
                          <input type="text" name="NomE" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->NomE; ?>">
                         </div>
                         </div>
                         
                        <div class="form-group">
                        <label class="control-label col-lg-4">PRENOM : </label>
                        <div class="col-lg-4">
                          <input type="text" name="PreNomE" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->PrenomE; ?>">
                         </div>
                         </div>
                         
                        <div class="form-group">
                        <label class="control-label col-lg-4">DTE_Naiss_Arabic_fr : </label>
                        <div class="col-lg-4">
                          <textarea type="text" name="DateNaissE" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->DateNaiss_arabic_fr; ?>"><?php echo $enfant->DateNaiss_arabic_fr; ?></textarea>
                        </div>
                        </div>
                         <div class="form-group">
                        <label class="control-label col-lg-4">DTE NAISSANCE_fr : </label>
                        <div class="col-lg-4">
                          <textarea type="text" name="DateNaiss_arabic_fr" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->DateNaissE; ?>"><?php echo $enfant->DateNaissE; ?></textarea>
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="control-label col-lg-4">LIEU NAISSANCE : </label>
                        <div class="col-lg-4">
                          <textarea type="text" name="LieuNaissE" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->LieuNaissE; ?>"><?php echo $enfant->LieuNaissE; ?></textarea>
                         </div>
                         </div>
                          
                        <div class="form-group">
                        <label class="control-label col-lg-4">ADRESSE : </label>
                        <div class="col-lg-4">
                          <input type="text" name="Adresse" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Adresse; ?>">
                         </div>
                         </div>
                       
                      <div class="form-group">
                        <label class="control-label col-lg-4">SEXE</label>
                      <div class="checkbox">
                            <label>
                              <input class="uniform" type="radio" class="form-control"  required="required"  name="Sexe" value="Masculin" <?php echo set_value('Sexe', $enfant->Sexe) == 'Masculin' ? "checked" : ""; ?> />Masculin
                            </label>
                            <label>
                              <input class="uniform" type="radio" class="form-control"  required="required" name="Sexe" value="Féminin" <?php echo set_value('Sexe', $enfant->Sexe) == 'Féminin' ? "checked" : ""; ?> >Féminin
                            </label>
                          </div>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-lg-4">Nationalité : </label>
                        <div class="col-lg-4">
                          <input type="text" name="Nationalite_fr" class="validate[required] form-control"  id="req"  value="<?php echo $enfant->Nationalite_fr; ?>">
                         </div>
                         </div>
                      </div>
                      <div class="form-actions no-margin-bottom" id="update">
                        <div class="form-group">
                        <label class="control-label col-lg-4">CIN_Parent</label>
                        <div class="col-lg-8">
                          <select data-placeholder="Your Favorite Type of Bear"  name="Cin_M" class="form-control chzn-select-deselect" tabindex="7">
                            <?php if($allParent): ?>
                            <?php foreach($allParent as $parent): ?>
                              <?php if($enfant->Parent_Cin_M == $parent->Cin_M): ?>
                                <option value="<?php echo $enfant->Parent_Cin_M; ?>" name="Cin_M"><?php echo $parent->Cin_M ; ?></option>

                              <?php endif ; ?>
                            <?php endforeach; ?>
                            <?php foreach($allParent as $parent): ?>
                            <option value="<?php echo $parent->Cin_M; ?>" name="Cin_M" ><?php echo $parent->Cin_M ; ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Anne_Registre</label>
                        <div class="col-lg-8">
                          <select data-placeholder="Your Favorite Type of Bear" name="NumR" class="form-control chzn-select-deselect" tabindex="7">

                          <?php if($AllRegistre): ?>
                            <?php foreach($AllRegistre as $registre): ?>
                              <?php if($enfant->Registre_NumR == $registre->NumR ):?>
                              
                              <option value="<?php echo $enfant->Registre_NumR; ?>" name="NumR">
                                <!-- afficher Anne selon idEnfant pour le modifier -->
                              <?php echo $registre->Anne; ?>
                              </option>
                              <?php endif; ?>
                              <?php endforeach;?>
                          <?php foreach($AllRegistre as $registre): ?>
                            <option value="<?php echo $registre->NumR; ?>" name="NumR"><?php echo $registre->Anne; ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Num_Déclaration</label>
                        <div class="col-lg-8">
                          <select data-placeholder="Your Favorite Type of Bear" name="Declaration_NumD" class="form-control chzn-select-deselect" tabindex="7">

                          <?php if($allDeclar): ?>
                            <?php foreach($allDeclar as $declaration): ?>
                              <?php if($enfant->Declaration_NumD == $declaration->NumD ):?>
                              
                              <option value="<?php echo $enfant->Declaration_NumD; ?>">
                                <!-- afficher Anne selon idEnfant pour le modifier -->
                              <?php echo $enfant->Declaration_NumD; ?>
                              </option>
                              <?php endif; ?>
                              <?php endforeach;?>
                          <?php foreach($allDeclar as $declaration): ?>
                            <option value="<?php echo $declaration->NumD; ?>"><?php echo $declaration->NumD; ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                        <br><br><br><br>
                        <input align="center" type="submit" value="Valider" class="btn btn-info" name="update" >
                      </div>
                      </div>
                        
                    </form>
                    </div>
                    <?php endforeach; ?>
                      <?php endif; ?>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
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
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!--Bootstrap -->
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="<?php echo base_url()?>assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo base_url()?>assets/lib/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url()?>assets/lib/validationEngine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url()?>assets/lib/validationEngine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-validation/src/localization/messages_ja.js"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo base_url()?>assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo base_url()?>assets/js/app.min.js"></script>
    <script>
      $(function() {
        Metis.formValidation();
      });
    </script>
    <script src="<?php echo base_url()?>assets/js/style-switcher.min.js"></script>
  </body>
</html>
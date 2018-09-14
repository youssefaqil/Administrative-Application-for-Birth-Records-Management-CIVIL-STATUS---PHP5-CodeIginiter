<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Blank Page</title>
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.min.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?><?php echo base_url() ?>assets/lib/metismenu/metisMenu.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="<?php  base_url() ?>assets/lib/html5shiv/html5shiv.js"></script>
        <script src="<?php base_url() ?>assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--For Development Only. Not required -->
    <script>
      less = {
        env: "development",
        relativeUrls: false,
        rootpath: "../<?php echo base_url() ?>assets/"
      };
    </script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url() ?>assets/css/less/theme.less">
    <script src="<?php echo base_url() ?>assets/lib/less/less-1.7.5.min.js"></script>

    <!--Modernizr 2.8.2-->
    <script src="<?php echo base_url() ?>assets/lib/modernizr/modernizr.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="formwizard.css" />

<script src="formwizard.js" type="text/javascript">

/***********************************************
* jQuery Form to Form Wizard- (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<script type="text/javascript">

var myform=new formtowizard({
 formid: 'feedbackform',
 persistsection: true,
 revealfx: ['slide', 500],
 onpagechangestart:function($, i, $fieldset){
  var validated=true
  var $els=$fieldset.find('input[type="text"], textarea') //get textbox and textarea elements
  $els.each(function(){ //loop thru these elements
   if ($(this).val()==""){ //if element is empty
    alert("Please fill out the field "+$(this).attr('id'))
    $(this).focus()
    validated=false
    return false //break out of each() loop
   }
  })
  return validated //if this variable returns false, user is prevented from going on to next form page
 }
})


</script>
<style type="text/css">
body {
  margin-top:40px;
}
.stepwizard-step p {
  margin-top: 10px;
}
.stepwizard-row {
  display: table-row;
}
.stepwizard {
  display: table;
  width: 50%;
  position: relative;
}
.stepwizard-step button[disabled] {
  opacity: 1 !important;
  filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
  top: 14px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 100%;
  height: 1px;
  background-color: #ccc;
  z-order: 0;
}
.stepwizard-step {
  display: table-cell;
  text-align: center;
  position: relative;
}
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
</style>
  </head>
  <body>
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
                <img src="<?php echo base_url() ?>assets/img/logo.png" alt="">
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
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
             
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

             
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="search-bar">
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-filter"></i>&nbsp; Acte D'etat civil</h3>
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
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url() ?>assets/img/64_64.gif">
             
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
         <li>
            <a href="login.html">
              <i class="fa fa-sign-in"></i>
              <span class="link-title">
    Aeccuil
    </span> 
            </a> 
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-code"></i>
              <span class="link-title">
    	Acte
    	</span> 
              <span class="fa arrow"></span> 
            </a> 
            <ul>
              <li>
                <a href="javascript:;">Acte de Naissance <span class="fa arrow"></span>  </a> 
                <ul>
                  <li> <a href="javascript:;">Déclaration de Naissance</a>  </li>
                  <li> <a href="javascript:;">Demande d'Extrait</a>  </li>
                  <li>
                </ul>
              </li>
             
            </ul>
          </li>
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bg-light lter">
            &nbsp;
                <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
        </div>
  </div>
      <form role="form" action="<?php echo site_url('parent_controller/Ajout_p'); ?>" method="post">
    <div class="row setup-content" id="step-1">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 1</h3>
              <div class="form-group">
            <label class="control-label">CIN</label>
            <input  maxlength="100" type="text" name="Cin_M" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
              <div class="form-group">
            <label class="control-label">NOM</label>
            <input maxlength="100" type="text" name="NomP" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
              <div class="form-group">
            <label class="control-label">النسب</label>
            <input maxlength="100" type="text" name="Nom_ar" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">PRENOM</label>
            <input maxlength="100" type="text" name="PrenomP" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">الاسم</label>
            <input maxlength="100" type="text" name="Prenom_ar" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
              <button class="btn btn-primary nextBtn btn-lg btn-flat btn-rect pull-right" type="button" >Suivant</button>
            </div>
      </div>
        </div>
    <div class="row setup-content" id="step-2">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 2</h3>
              <div class="form-group">
            <label class="control-label">DATE DE NAISSANCE</label>
            <input maxlength="100" type="text" name="DateNaissP" required="required" class="validate[required,custom[date]] form-control" data-mask="99/99/9999" />
          </div>
              <div class="form-group">
            <label class="control-label">تاريخ الازدياد</label>
            <input maxlength="100" type="text" name="Date_ar" required="required" class="validate[required,custom[date]] form-control" data-mask="99/99/9999" />
          </div>
          <div class="form-group">
            <label class="control-label">LIEU DE NAISSANCE</label>
            <input maxlength="255" type="text" name="LieuNaissP" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
          <div class="form-group">
            <label class="control-label">مكان الازدياد</label>
            <input maxlength="255" type="text" name="LieuNaissP_ar" required="required" class="form-control" placeholder="Enter Company Name" />
          </div>
          <div class="form-group">
            <label class="control-label">ADRESSE</label>
            <input  type="text" name="AdresseP" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
              <button class="btn btn-primary nextBtn btn-lg btn-flat btn-rect pull-right" type="button" >Suivant</button>
            </div>
      </div>
        </div>
    <div class="row setup-content" id="step-3">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 3</h3>
              <div class="form-group">
            <label class="control-label">العنوان</label>
            <input  type="text" name="AdressP_ar" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
          <div class="form-group">
            <label class="control-label">PROFESSION</label>
            <input maxlength="255" type="text" name="Profession" required="required" class="form-control" placeholder="Enter Company PROFESSION"  />
          </div>
           <div class="form-group">
            <label class="control-label">المهنة</label>
            <input maxlength="255" type="text" name="Profession_ar" required="required" class="form-control" placeholder="Enter Company PROFESSION"  />
          </div>
          <div class="form-group">
            <label class="control-label col-lg-4">SEXE</label>
                  <div class="checkbox">
                            <label>
                              <input class="uniform" type="radio" class="form-control" name="Sexe" required="required" value="H" <?php echo set_radio('Sexe', '1', TRUE); ?> >H
                            </label>
                            <label>
                              <input class="uniform" type="radio" class="form-control" name="Sexe" required="required" value="F" <?php echo set_radio('Sexe', '2'); ?> >F
                            </label>
                          </div>
                   </div>
                   <div class="form-group">
            <label class="control-label col-lg-4">الجنس</label>
                  <div class="checkbox">
                            <label>
                              <input class="uniform" type="radio" class="form-control" name="Sexe_ar" required="required" value="ذكر" <?php echo set_radio('Sexe_ar', '1', TRUE); ?>/>ذكر
                            </label>
                            <label>
                              <input class="uniform" type="radio" class="form-control" name="Sexe_ar" required="required" value="انثى" <?php echo set_radio('Sexe_ar', '2'); ?>/>انثى
                            </label>
                          </div>
                   </div>
               <input type="submit" value="Enregistrer" class="btn btn-success btn-lg btn-flat btn-rect pull-right" name="save">
            </div>
      </div>
        </div>
  </form>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right" class="bg-light lter">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
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
    <script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- MetisMenu -->
    <script src="<?php echo base_url() ?>assets/lib/metismenu/metisMenu.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo base_url() ?>assets/lib/screenfull/screenfull.js"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo base_url() ?>assets/js/core.min.js"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/style-switcher.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
      allWells = $('.setup-content'),
      allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-primary').addClass('btn-default');
      $item.addClass('btn-primary');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
      if (!curInputs[i].validity.valid){
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid)
      nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3><p class="bg-danger">Supprimer Un Déclaration</p></h3>
		    		</div>
		    		<?php if($declarations_sup):?>
	    			   <?php foreach($declarations_sup as $declaration): ?>
	    			<form class="form-horizontal" action="<?php echo site_url('declaration_controller/supprim_dec/'.$declaration->NumD); ?>" method="post">
	    			   
	    			   
	    			  <input type="hidden" name="NumD" value="<?php $declaration->NumD; ?>"/>
					  <p><span class="label label-danger">Vous Avez sur que vous voulez supprimer ce champ ?</span></p>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-danger">Yes</button>
						  <a class="btn btn-success btn-rect" href="<?php echo site_url('declaration_controller/declaration_s'); ?>">No</a>
						</div>
						<?php endforeach; ?>
	    			   <?php endif; ?>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
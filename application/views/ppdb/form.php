<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo base_url();?>style/css/bootstrap-cerulean.css" rel="stylesheet">
        <link href="<?php echo base_url();?>style/css/jtable/metro/lightgray/jtable.min.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url();?>style/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>style/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>style/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>style/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>style/img/favicon.ico">
	
</head>

<body>
    <div class="navbar">
        
    </div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
                        <div class="span2"></div>
			
			<div id="content" class="span8">
			<!-- content starts -->
			

			
			
			<div class="row-fluid sortable">		
				
					
				<!--FORM-->
                                <div class="box span12">
					<p>
					<div class="box-content">
						<div class="form-horizontal" id="formUN">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label">NO PENDAFTARAN </label>
							  <div class="controls">
								<input type="text" class="span4" id="no_peserta">
								<p class="help-block">Contoh: 001/RPL  </p>
							  </div>
							</div>
							      
							
							<div class="form-actions">
							  <button class="btn btn-primary" id="un2014Btn" href="<?php echo base_url();?>ppdb/cari">Proses</button>
							  
							</div>
						  </fieldset>
						</div>   
                                                <div id="hasilCari"></div>
                                                
					</div>
				

                                    
                                    
                                                  
					
				</div><!--/span-->
			
			</div><!--/row-->

			
			
			
			
			
    
					<!-- content ends -->
			</div>
                        
                        <div class="span2"></div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>
                    

		<footer>
			<p class="pull-left">&copy; <a href="http://smkn1kotabekasi.sch.id" target="_blank">SMK Negeri 1 Kota Bekasi</a> <?php echo date('Y');?></p>
                        
			
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>style/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>style/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>style/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>style/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>style/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url();?>style/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>style/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>style/js/excanvas.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>style/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>style/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>style/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>style/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>style/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>style/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>style/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>style/js/jquery.history.js"></script>
        <!--jtable jquery -->
        <script src="<?php echo base_url();?>style/js/jquery.jtable.min.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>style/js/charisma.js"></script>
        <script src="<?php echo base_url();?>style/js/jquery.jtable.min.js"></script>
	
		
</body>
	
        <script type="text/javascript">
$(document).ready(function() {
//$('#formUN').hide();
//$('#formUN').delay(400).slideDown(1000);

$("#un2014Btn").click(function(event){
     //alert("Hapus?");
     
     var href = $(this).attr("href");
     var btn = this;
     var red = $(this).attr("redirect");
     var form_data = {
     no_peserta : $('#no_peserta').val(),       
     ajax : '1'
};
      $.ajax({
        type: "POST",
        url: href,
        async : false,
        cache : false,
        data  : form_data,
        success: function(data) { 
            if (data.length > 0){
            $(btn).fadeOut(500);
            $('#formUN').slideUp(100);
            $('#hasilCari').slideDown();
            $('#hasilCari').html(data);
             $('#Kembali').click(function() {
                $('#hasilCari').slideUp();
                $('#hasilCari').fadeOut(10);
                $('#formUN').delay(100).show();
                //$('#formUN').delay(2000).fadeOut();
                //$('#formUN').delay(5000).slideDown();
                $('#no_peserta').val('');
                $(btn).show();
     
                });
                
            }else if($('#no_peserta').val()===''){
                $(btn).fadeOut();
                $(btn).delay(500).fadeIn();
    
            }
         }
      });
     event.preventDefault();
  });
  
 
});

    </script>
    
</html>

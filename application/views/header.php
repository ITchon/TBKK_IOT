<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo "TBKK IOT"?></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <?php 
   
         $css_url = "themes/ace_admin/css/";
         $asset_url = "themes/ace_admin/";
         $js_url = "themes/ace_admin/js/";
        ?>
		 <script src="https://kit.fontawesome.com/801a394883.js" crossorigin="anonymous"></script>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $asset_url; ?>font-awesome/5.15.1/css/fontawesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>colorbox.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>bootstrap-colorpicker.min.css" />
		<!-- <link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" /> -->

		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>dropzone.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() . $css_url; ?>ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() . $js_url; ?>ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
<script src="<?php echo base_url() . $js_url; ?>jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() . $js_url; ?>jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

        <script src="<?php echo base_url() . $js_url; ?>wizard.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.validate.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery-additional-methods.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>bootbox.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>spinbox.min.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>select2.min.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.flash.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.html5.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.print.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>buttons.colVis.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>dataTables.select.min.js"></script>


		<script src="<?php echo base_url() . $js_url; ?>jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>jquery.flot.resize.min.js"></script>



		

		<script src="<?php echo base_url() . $js_url; ?>dropzone.min.js"></script>

		<script src="<?php echo base_url() . $js_url; ?>bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url() . $js_url; ?>jquery.colorbox.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>bootstrap-colorpicker.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url() . $js_url; ?>ace-elements.min.js"></script>
		<script src="<?php echo base_url() . $js_url; ?>ace.min.js"></script>

	<style>
		.hide-it{
			
		}
		.select-info{
			padding-left : 10px /*Data table row select */
		}
		.rotate-center {
			-webkit-animation: rotate-center 1s ease-in-out both;
			        animation: rotate-center 1s ease-in-out both;
		}
		.animation{
		  animation: expand_center 950ms;
		
		}
		@keyframes expand_center {
		  0% {
		  clip-path: polygon(50% 100%,50% 0,50% 0,50% 100%);
		    -webkit-clip-path: polygon(50% 100%,50% 0,50% 0,50% 100%);
		 }
		  100%{
		  clip-path: polygon(0 100%, 0 0, 100% 0, 100% 100%);
		    -webkit-clip-path: polygon(0 100%, 0 0, 100% 0, 100% 100%);
		  }
		}
		@-webkit-keyframes rotate-center {
		  0% {
		    -webkit-transform: rotate(0);
		            transform: rotate(0);
		  }
		  100% {
		    -webkit-transform: rotate(360deg);
		            transform: rotate(360deg);
		  }
		}
		@keyframes rotate-center {
		  0% {
		    -webkit-transform: rotate(0);
		            transform: rotate(0);
		  }
		  100% {
		    -webkit-transform: rotate(360deg);
		            transform: rotate(360deg);
		  }
		}



@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
 	.nav-list>li>a>.menu-icon {
    font-weight: 900;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: center;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}




	</style>
<script>
        $(document).ready(function() {
          $(".hide-it").fadeOut(5000);
});
   
    </script>
	</head>
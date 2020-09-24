<!DOCTYPE html>
<html lang="en">
	<body class="no-skin">
		

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>



				<ul class="nav nav-list">
                <?php 	foreach($menu as $r){  ?>
					<li class="<?php echo($r->mg == $mg[0]->mg_id)? " active open":"" ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa <?php echo $r->icon_menu ?>"></i>
							<span class="menu-text"> <?php echo $r->g_name ?> </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                <?php 	foreach($submenu as $s)  {  
                    if($r->mg == $s->mg_id) { 
                     ?>
							<li class="<?php echo($mg[0]->method == $s->method)? " active ":"" ?>">
								<a href="<?php echo base_url()?><?php echo $s->method ?>">
									<i class="menu-icon fa fa-caret-right"></i>
                                    <?php echo $s->name ?>
								</a>

								<b class="arrow"></b>
							</li>
                            <?php }
			}
			?>
						</ul>
					</li>

        <?php } ?>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>


			

		

			

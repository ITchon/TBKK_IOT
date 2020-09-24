
    <?php 
	$setHeadContent = strtoupper(str_replace('_', ' ', $this->router->fetch_method()));
?>
<!-- //////////////////////////////////// CONTENT ////////////////////////////////////////////// -->
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-unlock-alt"></i>
								<a href="#">PERMISSION</a>
							</li>
							<li class="active"><?php echo $setHeadContent;?></li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
				
						<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
								</div>

								<!-- widget div-->
								<div>

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->

									<!-- widget content -->
									<div class="widget-body no-padding">

			
							<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
									</div>
									

									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
									
										<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
											<div class="page-header">
														<h1>
															LIST PERMISSION
															<!-- <small>
																<i class="ace-icon fa fa-angle-double-right"></i>
																Common form elements and layouts
															</small> -->
														</h1>
													</div>
										

											<!-- widget div-->
											<div>
							
												<!-- widget edit box -->
												<div class="jarviswidget-editbox">
													<!-- This area used as dropdown edit box -->
													
												</div>
												<!-- end widget edit box -->


														<!-- widget content -->
										<div class="widget-body no-padding">
															
											<?php echo form_open('#', array('id' => 'frm_permissionmanagement', 'name'=>'	frm_permissionmanagement'));?>

											<div class="table-responsive">
												<table id="dynamic-table" class="table table-striped table-bordered table-hover">
													<thead>
													<!-- <tr>
								                    	<td colspan="9">
									                    	<div id="btn_enable" class="btn btn-sm btn-success"><span class="fa fa-check-square-o"></span></div>
									                    	<div id="btn_disable" class="btn btn-sm btn-danger"><span class="fa fa-times"></span></div>
									                    	<div id="btn_delete" class="btn btn-sm btn-primary"><span class="fa fa-trash-o"></span></div>
								                    	</td>
								                    </tr>	 -->
														<tr>
															<th style="text-align:center;">No</th>
															<th data-class="expand"><i class="fa fa-fw fa-unlock-alt text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
															<th data-hide="phone,tablet">Group</th>
															<th data-hide="phone,tablet">Staus</th>
															<th data-hide="phone,tablet">Action</th>
														</tr>
													</thead>
														<tbody id="table">
															<?php  
															$result = array_filter($result);
															if (!empty($result)) {
															$i = 1;	  	
															$output= '';
															foreach($result as $r){	  
                        									  if ($r->enable == '1'){ 
															
                        									  $txt_status = 'ENABLE'; 
                        									  $txt_color = '#0EC952';
															
                        									  }else{
															
                        									  $txt_status = 'DISABLE'; 
                        									  $txt_color = '#FF0000'; 
															
                        									  }
														  
    														  echo  
    														    '<tr >
																<td style="text-align:center;">'.$i.'</td>
    														    <td>'.$r->name.'</td>
    														    <td>'.$r->spg_name.'</td>
																<td ><span style="color:'.$txt_color.'">'.strtoupper($txt_status).'</span></td>
																<td>
    														    <button type="button" value='.$r->sp_id.' class="btn btn-xs btn-default edit_form"><i class="fa fa-pencil"></i></button>
    														    <button type="button" value='.$r->sp_id.' class="btn btn-xs btn-default delete"><i class="fa fa-trash-o"></i></button>
                            									</td>    							 
																</tr>';
															$i++;	
																} 
															} ?>

														</tbody>

												</table>
											</div>
											<?php echo form_close();?>
										</div>
														<!-- end widget content -->


											</div>
											<p>&nbsp;</p>			
											<!-- End widget div-->
									</div>
								</div>
            
								



		
    
    
  

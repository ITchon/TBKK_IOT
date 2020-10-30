<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-user user-icon"></i>
								<a href="#"><?php echo ucfirst($this->uri->segment('1')) ?></a>
							</li>
							<li class="active"><?php echo ucfirst($this->uri->segment('2')) ?></li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">

						<div class="page-header text-center">
							<h1>
							<?php 
							echo ucfirst($this->uri->segment('2')."  ");
							echo ucfirst($this->uri->segment('1'));
							 ?>
							
							</h1>
						</div><!-- /.page-header -->
		
						<div class="row">
						<div class="col-xs-2"></div>
							<div class="col-xs-8">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<?php if ($this->session->flashdata('msgResponse') != ''){ echo $this->session->flashdata('msgResponse'); } ?>
								</div>
								<!-- PAGE CONTENT BEGINS -->
								<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">

             		  			 <?php echo form_open('machine/insert', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));?>	
									<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal hide" id="validation-form" method="get">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Machine name </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="mach_name" placeholder="Machine name" value="" class="width-100" autofocus required/>
									
																	</span>
																</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Machine No </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="mach_no" placeholder="Machine No." value="" class="width-100" autofocus required/>
																	
																	</span>
																</div>
											</div>
													<div class="clearfix form-actions">
														<div class="center">
														<button type="submit" class="btn btn-primary">
															Submit
														</button>
														<input type="hidden" name="action" value="<?php echo base64_encode('addUser');?>"  />

																	<!-- &nbsp; &nbsp; &nbsp;
																	<button class="btn" type="reset">
																		<i class="ace-icon fa fa-undo bigger-110"></i>
																		Reset
																	</button> -->
														</div>
													</div>
												</form>
											</div>
										</div>
									<?php echo form_close();?>


								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						<div class="col-xs-2"></div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->



			

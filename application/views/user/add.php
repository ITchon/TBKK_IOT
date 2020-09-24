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
								<!-- PAGE CONTENT BEGINS -->
								<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">

                <?php echo form_open('user/insert', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));?>	
									<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal hide" id="validation-form" method="get">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

												<!-- <div class="col-sm-9 "> -->
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="txt_usr" placeholder="Username" value="<?php echo set_value('txt_usr'); ?>" class="width-100" autofocus/>
																		<i class="ace-icon fa fa-user"></i>
																	</span>
																</div>
												<!-- </div> -->
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="password" name="txt_pwd" placeholder="Password" id="password" value="<?php echo set_value('txt_pwd'); ?>" class="width-100" />
																		<i class="ace-icon fa fa-lock"></i>
																	</span>
												
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Group </label>

												<div class="col-sm-9">

													<!-- <span class="help-inline col-xs-12 col-sm-9"> -->
													<label class="select">
													
													<?php
                                                            
								                        $optName = array();
								                        $optName['0'] = '-- Please Select Groups --';
								                        
								                        foreach($excLoadG as $g){
								                            
								                            $optName[$g->sug_id] = $g->name;
								                            
								                            
								                        }
								                    
								                        $selected = (set_value('sel_group')) ? set_value('sel_group') : '-- Please Select Groups --';
								                    
								                        echo form_dropdown('sel_group', $optName,  $selected);


								                        ?>

						                            <i></i>
												 </label>
														<!-- </span> -->
												
												</div>

											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Firstname </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="text" name="txt_fname" placeholder="First name" value="<?php echo set_value('txt_fname'); ?>" class="width-100" />
																		<!-- <i class="ace-icon fa fa-lock"></i> -->
																	</span>
												
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Lastname </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="text" name="txt_lname" placeholder="Last name" value="<?php echo set_value('txt_lname'); ?>" class="width-100" />
																		<!-- <i class="ace-icon fa fa-lock"></i> -->
																	</span>
													
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sex </label>

												<div class="col-sm-9">
													<div class="radio">
														<label>
															<input checked="checked" type="radio" name="rad_sex" value="male" <?php echo set_radio('rad_sex', 'male', TRUE); ?> class="ace" />
															<span class="lbl"> Male </span>

															
														</label>

														<label>
															<input type="radio" name="rad_sex" value="female" <?php echo set_radio('rad_sex', 'female'); ?> class="ace" />
															<span class="lbl"> Female </span>

														</label>
													</div>

												
												</div>
											</div>

											<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address </label>

																<div class="col-xs-10 col-sm-6">
																	<div class="clearfix">
																	<span class="block input-icon input-icon-right">
																		<input name="txt_email" placeholder="E-mail" type="email" value="<?php echo set_value('txt_email'); ?>" class="width-100" />
																		<i class="ace-icon fa fa-envelope-o"></i>
																	</span>
													
												
																	</div>
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
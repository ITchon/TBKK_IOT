<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											
											<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
	
												<div class="page-header">
												<h1>
													FORM USERGROUPS
					
												</h1>
											</div>

											<!-- widget div-->
											<div>

												<!-- widget edit box -->
												<div class="jarviswidget-editbox">
													<!-- This area used as dropdown edit box -->
												</div>

												<div class="widget-body no-padding">
													<?php 	
													if($this->uri->segment('3')==null){
													echo form_open('permission/insert', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));
								    				?>
													<div class="row">
														<div class="col-xs-12">
															<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>
													
																	<div class="col-xs-8 col-sm-8">
																		<span class="block input-icon input-icon-right">
																			<input type="text" name="txt_name" placeholder="Permission Name" class="width-100" />
																		<i class="ace-icon fa fa-unlock-alt"></i>
																		</span>
																	</div>
															</div>
													
															<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2"></label>
																	<div class="col-xs-10 col-sm-8">
																		<span class="block input-icon input-icon-right">
																				<input type="text" name="txt_cont" placeholder="Controller/Method" class="width-100" />
																				<!-- <i class="ace-icon fa fa-unlock-alt"></i> -->
																		</span>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>

																	<div class="col-xs-10 col-sm-8">

																		<!-- <span class="help-inline col-xs-12 col-sm-9"> -->
																	<label class="select">
																		
																		<?php
													                        $optName = array();
													                        $optName['0'] = '-- Please Select Groups --';
													                        foreach($excLoadG as $g){
													                            $optName[$g->spg_id] = $g->name;   
													                        }
													                        $selected ='-- Please Select Groups --';
													                        echo form_dropdown('sel_group', $optName,  $selected);
													                    ?>

																	 </label>
																			<!-- </span> -->
																	
																	</div>

																</div>
																<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>
																		<div class="col-xs-10 col-sm-8">
																			<div class="radio">
																			Status
																				<label>
																					<input checked="checked" type="radio" name="rad_status" value="1" <?php echo set_radio('rad_status', '1', TRUE); ?> class="ace" />
																					<span class="lbl"> Enable </span>
																			
																			
																				</label>
																			
																				<label>
																					<input type="radio" name="rad_status" value="0" <?php echo set_radio('rad_status', '0'); ?> class="ace" />
																					<span class="lbl"> Disable </span>
																				</label>
																			</div>
																		</div>
																</div>
															</div>
														</div>
														<div class="clearfix form-actions">
															<div class="col-md-offset-5 col-md-9">
																<button type="submit" class="btn btn-primary">
																	Add
																</button>
																<input type="hidden" name="action" value="<?php echo base64_encode('addPermission');?>"  />
															</div>
														</div>
													
														<?php 
														echo form_close(); 
														}else{
														echo form_open('permission/save_edit', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));
														$r1 = "";
														$r2 = "";
														if($result[0]->enable == 1):
														 $r1 = "checked";
														else:
														 $r2 = "checked";
														endif;
														?>
														<div class="row">
															<div class="col-xs-12">
																<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>
																		<input type="text" name="sp_id" value="<?php echo $result[0]->sp_id?>" hidden>
																		<div class="col-xs-8 col-sm-8">
																			<span class="block input-icon input-icon-right">
																		  	   <input type="text" name="txt_name" placeholder="Permission Name" class="width-100" value ="<?php echo $result[0]->sp_name ?>"/>
																		       <i class="ace-icon fa fa-unlock-alt"></i>
																			</span>
																		</div>
																</div>
														
																<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>
																		<div class="col-xs-10 col-sm-8">
																			<span class="block input-icon input-icon-right">
																				<input type="text" name="txt_cont" placeholder="Controller/Method" class="width-100" value ="<?php echo $result[0]->controller ?> "/>
																			</span>
																		</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>

																	<div class="col-xs-10 col-sm-8">

																		<!-- <span class="help-inline col-xs-12 col-sm-9"> -->
																	<label class="select">
																		
																		<?php
													                        $optName = array();
													                        $optName['0'] = '-- Please Select Groups --';
													                        foreach($excLoadG as $g){
													                            $optName[$g->spg_id] = $g->name;   
													                        }
																			$selected = $result[0]->spg_id ;
													                        echo form_dropdown('sel_group', $optName ,$selected);
													                    ?>

																	 </label>
																			<!-- </span> -->
																	
																	</div>

																</div>
																<div class="form-group">
																		<label class="col-sm-2 control-label no-padding-right" for="form-field-2">  </label>
																		<div class="col-xs-10 col-sm-8">
																			<div class="radio">
																			Status
																				<label>
																					<input  <?php echo $r1 ?> type="radio" name="rad_status" value="1" <?php echo set_radio('rad_status', '1', TRUE); ?> class="ace" />
																					<span class="lbl"> Enable </span>
																				</label>
																				<label>
																					<input  <?php echo $r2 ?> type="radio" name="rad_status" value="0" <?php echo set_radio('rad_status', '0'); ?> class="ace" />
																					<span class="lbl"> Disable </span>
																				</label>
																			</div>
																		</div>
																</div>
															<div class="clearfix form-actions">
																<div class="col-md-offset-3 col-md-9">	
																	<a type="button" href="<?php echo base_url()?>permission/manage" class="btn btn-default">
																		Back to Add 
																	</a>		
																	<button type="submit" class="btn btn-primary">
																		Save change
																	</button>
																	<input type="hidden" name="action" value="<?php echo base64_encode('editPermission');?>"  />
																</div>
															</div>
														</div>
													</div>
														<?php
														 echo form_close(); 
														}
														?>
											    	</div>
												</div>
											  </div>
									   	   </div>
									  	</div><!-- end widget div -->
						      		</div>
							    </div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>
		</div><!-- /.main-content -->

		<script>
			$(document).on('click', '.edit_form', function() {
			var id = $(this).val();
        	window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/manage/"+id;
    		});
		</script>
<!-- ////////////////////////////////////////// END CONTENT ////////////////////////////// -->
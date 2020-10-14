<div class="col-xs-6">
                    <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
		
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
                                            echo form_open('usergroup/insert', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));?>

											<div class="row">
												<div class="col-xs-12">
														<div class="col-xs-1">
														</div>
														<div class="col-xs-10">
														<div class="form-group">
															<span class="block input-icon input-icon-right">
																<input type="text" id="name" name="g_name" placeholder="Usergroup Name" class="width-100" value=""/>
															<i class="ace-icon fa fa-group"></i>
															</span>
														</div>
														<div class="form-group">

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
														<div class="col-xs-1">
														</div>

												</div>

											</div>

														<div class="clearfix form-actions">
															<div class="center">

                                                           <button type='submit'val='add' class='btn btn-primary'>Add</button>

															</div>
														</div>

                                            <?php echo form_close(); 
                                            }else{
                                                echo form_open('usergroup/save_edit', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));
                                                $r1 = "";
												$r2 = "";
		
                                                if($res_edit[0]->enable == 1):
                                                 $r1 = "checked";
												else:
                                                 $r2 = "checked";
                                                endif;
                                                ?>

                                                <div class="row">
                                                    <div class="col-xs-12">
                                                            <div class="col-xs-1">
                                                            </div>
                                                            <div class="col-xs-10">
                                                            <div class="form-group">
                                                                <span class="block input-icon input-icon-right">
                                                                    <input type="text"  name="sug_id" value="<?php echo $res_edit[0]->sug_id ?>" hidden/>
                                                                    <input type="text" id="name" name="sug_name" placeholder="Usergroup Name" class="width-100" value="<?php echo $res_edit[0]->name ?>"/>
                                                                <i class="ace-icon fa fa-group"></i>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
    
                                                                <div class="radio">
                                                                        Status
                                                                        <label>
                                                                            <input <?php echo $r1 ?> type="radio" name="rad_status" value="1" <?php echo set_radio('rad_status', '1', TRUE); ?> class="ace" />
                                                                            <span class="lbl"> Enable </span>
    
                                                                            
                                                                        </label>
    
                                                                        <label>
                                                                            <input <?php echo $r2 ?> type="radio" name="rad_status" value="0" <?php echo set_radio('rad_status', '0'); ?> class="ace" />
                                                                            <span class="lbl"> Disable </span>
    
                                                                        </label>
                                                                    </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-xs-1">
                                                            </div>
    
                                                    </div>
    
                                                </div>
    
                                                            <div class="clearfix form-actions">
                                                                <div class="center">
																<a type="button" href="<?php echo base_url()?>usergroup/manage" class="btn btn-default">
																		Back to Add 
																</a>
                                                               <button type='submit'val='save' class='btn btn-primary'>Save</button>
    
                                                                </div>
                                                            </div>
                                            <?php
                                            };
                                            ?>

				
							
									    	</div>
											  </div>
									  </div>
							  	  </div>
							  	</div>
								<!-- end widget div -->
				      		</div>
					      </div>
								<!-- PAGE CONTENT ENDS -->  
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
            </div><!-- /.main-content -->
            <script>


 $(document).ready(function() {
			$(document).on('click', '.edit_form', function() {
                var id = $(this).val();
        	window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/manage/"+id;
    		});
    	});
		</script>
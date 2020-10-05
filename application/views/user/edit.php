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

             		   <?php echo form_open('user/save_edit', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));?>	
									<div class="row">
									<div class="col-xs-12">
										<form class="form-horizontal hide" id="validation-form" method="get">
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

												<!-- <div class="col-sm-9 "> -->
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input name="su_id" value="<?php echo $result[0]->su_id?>" hidden />
																		<input type="text" name="username" placeholder="Username" value="<?php echo $result[0]->username?>" class="width-100" autofocus required/>
																		<i class="ace-icon fa fa-user"></i>
																	</span>
																</div>
												<!-- </div> -->
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="password" name="password" placeholder="Password" id="password" value="<?php echo base64_decode(trim($result[0]->password));?>" class="width-100" required />
																		<i class="ace-icon fa fa-lock"></i>
																	</span>
												
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Group </label>

												<div class="col-sm-9">

													<!-- <span class="help-inline col-xs-12 col-sm-9"> -->
                            
													<label class="select">
                          <select name="sug_id" class="form-control select2"  required>
                     <option value="<?php echo $result[0]->sug_id ?>"><?php echo $result[0]->name ?></option>
                    <?php foreach ($excLoadG as $r) {
                        ?>
                       <option value="<?php echo $r->sug_id ?>"><?php echo $r->name ?></option>
                  <?php
                   } ?>
                   </select>
												 </label>
														<!-- </span> -->
												
												</div>

											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Firstname </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="text" name="fname" placeholder="First name" value="<?php echo $result[0]->firstname?>" class="width-100" required/>
																		<!-- <i class="ace-icon fa fa-lock"></i> -->
																	</span>
												
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Lastname </label>

												<div class="col-xs-10 col-sm-6">
													<span class="block input-icon input-icon-right">
																		<input type="text" name="lname" placeholder="Last name" value="<?php echo $result[0]->lastname?>" class="width-100" required />
																		<!-- <i class="ace-icon fa fa-lock"></i> -->
																	</span>
													
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sex </label>

												<div class="col-sm-9">
                          <?php 
                          		$rad1 = "";
                              $rad2 = "";
                          if($result[0]->gender == "male"){
                              $rad1 = "checked";
                            }
                            else{
                              $rad2 = "checked";
                            }
                          ?>
													<div class="radio">
														<label>
															<input <?php echo $rad1 ?> type="radio" name="gender" value="male" <?php echo set_radio('rad_sex', 'male', TRUE); ?> class="ace" />
															<span class="lbl"> Male </span>

															
														</label>

														<label>
															<input  <?php echo $rad2 ?> type="radio" name="gender" value="female" <?php echo set_radio('rad_sex', 'female'); ?> class="ace" />
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
																		<input name="email" placeholder="E-mail" type="email" value="<?php echo $result[0]->email?>" class="width-100" />
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>
        $(document).ready(function() {
    $('.select2').select2();
});
      </script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript">
    $("#form").submit(function(){
        $.ajax({
           url: "<?php echo base_url(); ?>user/insert",
           type: 'POST',
           data: $("#form").serialize(),
           success: function() {
            alert('Success');
           }
        });


    });


</script> -->



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
				
						<div class="row">
							<div class="col-xs-12">
								<div class="row" style="margin: 0px;padding: 0px;">
									<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
										
									</div>
									<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
										
									</div>
								</div>

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
							
					              
					                <?php echo form_open('#', array('id' => 'frm_usermanagement', 'name'=>'frm_usermanagement', 'class'=>'form-horizontal'));?>
										
					           		<div class="row">
									<div class="col-xs-12">
									

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											List Users
										</div>	
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
								                    	<td colspan="9">
									                    	<div id="btn_enable" class="btn btn-sm btn-success"><span class="fa fa-check-square-o"></span></div>
									                    	<div id="btn_disable" class="btn btn-sm btn-danger"><span class="fa fa-times"></span></div>
									                    	<div id="btn_delete" class="btn btn-sm btn-primary"><span class="fa fa-trash-o"></span></div>
								                    	</td>
								                    </tr>	
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>
															<i class="ace-icon fa fa-user bigger-110 hidden-480"></i>
															Username
														</th>
														<th>Password</th>
														<th>Name</th>
														<th class="hidden-480" style="text-align:center;">Group</th>
														<th class="hidden-480" style="text-align:center;">Status</th>
														<th style="text-align:center;">
															<i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i>
															Date Created
														</th>
														<th>Action</th>
														

													</tr>
												</thead>
											<tbody id="table">
												<?php  
												$data = array_filter($data);

												if (!empty($data)) {
												$output= '';
												foreach($data as $r){	  
    											        if ($r->enable == '1'){ 
    											        	$txt_status = 'enable'; 
    											            $txt_color = '#0EC952';
															$icon = "fa fa-times";
															$btn_color = "btn-danger";
														
    											        }else{          
    											            $txt_status = 'disable'; 
    											            $txt_color = '#FF0000';  
															$icon = "fa fa-check";
															$btn_color = "btn-success";
															
    											        }
    								
    											  echo 
    											    '<tr >
    											    <td style="text-align:center;">
    											    <label class="pos-rel">
    											            <input type="checkbox" class="ace" name="chk_uid[]" value='.$r->su_id.'/>
    											            <span class="lbl"></span>
    											    </label>
    											    </td>
    											    <td>'.$r->username.'</td>
    											    <td>'.$r->password.'</td>
    											    <td>'.$r->firstname.'   '.$r->lastname.'</td>
    											    <td class="text-center">'.$r->g_name.'</td>
    											    <td class="text-center"><span style="color:'.$txt_color.'">'.strtoupper($txt_status).'</span></td>
    											    <td  class="text-center">'. date('Y-m-d H:i:s', strtotime($r->date_created)).'</td>
													<td>
													<div class="hidden-sm hidden-xs btn-group">
															<button  type="button" value='.$r->su_id.' class="btn btn-xs '.$btn_color.' enable">
																<i class="ace-icon '.$icon.' bigger-120"></i>
															</button>

															<button  type="button" value='.$r->su_id.' class="btn btn-xs btn-info edit">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button  type="button" value='.$r->su_id.' class="btn btn-xs btn-warning rule">
																<i class="ace-icon fa fa-key bigger-120"></i>
															</button>

															<button  type="button" value='.$r->su_id.' class="btn btn-xs btn-inverse delete">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>

														</div>
    											 
    											     </td>
    											    </tr>';
													} 
												} ?>
				
											</tbody>

										</table>

										
										
					           		<?php echo form_close();?>
									</div>
									<!-- end widget content -->

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
<!-- ////////////////////////////////////////// END CONTENT ////////////////////////////// -->



		
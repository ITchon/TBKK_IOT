
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
														<th>
															<i class="ace-icon fa fa-user bigger-110 hidden-480"></i>
															Machine Name
														</th>
														<th>Machine No</th>

														<th>Action</th>
														

													</tr>
												</thead>
											<tbody id="table">
												<?php  
												$data = array_filter($result);
												if (!empty($data)) {
												$output= '';
												foreach($data as $r){	  
    											  echo 
    											    '<tr >
    											    <td>'.$r->machine_name.'</td>
    											    <td>'.$r->machine_no.'</td>

													<td>
													<div class="hidden-sm hidden-xs btn-group">
														
															<button  type="button" value='.$r->machine_id.' class="btn btn-xs btn-info edit">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button  type="button" value='.$r->machine_id.' class="btn btn-xs btn-inverse delete">
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



		
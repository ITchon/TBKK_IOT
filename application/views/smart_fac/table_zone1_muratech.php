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
								                    	<td colspan="10">
									                    	
								                    	</td>
								                    </tr>	
													<tr>

														<th class="center">
															Detail
														</th>
														<th>Index</th>
														<th>Machine NO</th>
														<th>Date Time</th>
														<th>Shift</th>
														<th>Serial</th>
														<th>QRrange</th>
														<th>QRcode</th>
													

													</tr>
												</thead>
											<tbody >
											 <?php  
												$result = array_filter($result);
												if (!empty($result)) {
                      							$i = 1;	  	

												foreach($result as $r){	  
                   							
    											echo  
												'<tr>
													<td class="center">
														<button  type="button" value='.$r->Index.' class="btn btn-xs btn-warning open-modal">
															<i class="ace-icon fa fa-search bigger-120"></i>
														</button>
													</td>	
												    <td >'.$r->Index.'</td>
    											    <td>'.$r->MachineNo.'</td>
    											    <td>'.$r->DateTime.'</td>
    											    <td>'.$r->Shift.'</td>
													<td>'.$r->Serial.'</td>
													<td>'.$r->QRrange.'</td>
													<td>'.$r->QRcode.'</td>
	   							 
												</tr>';
												$i++;	
									?>
											
												<?php
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


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
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
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
												<tr class="detail-row">
													<div class="row">
														<td></td>
														<td class="center" style="background-color:#ffffff">
																		<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">Spare</span>
																			</div>
																		</div>
											
																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row text-left">
																			<div class="profile-info-name"> ID Spare 1 </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare1 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row text-left">
																			<div class="profile-info-name">  ID Spare 2 </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare2 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row text-left">
																			<div class="profile-info-name">  ID Spare 3 </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare3 ?></span>
																			</div>
																		</div>
																	</div>
															
														</td>
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST1</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row text-left">
																		<div class="profile-info-name">ST1 SVPos </div>
																		<div class="profile-info-value">
																			<span><?php echo $r->ST1SVPos ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name"> ST1 SVLoad</div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST1SVLoad ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name"> ST1 Judgment</div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST1Judgment ?></span>
																	</div>
																</div>
															</div>
												
														</td>
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST2</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row text-left">
																		<div class="profile-info-name">ST2 LeakRate </div>
																		<div class="profile-info-value">
																			<span><?php echo $r->ST2LeakRate ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST2 MaxSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST2MaxSet ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST2 MinSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST2MinSet ?></span>
																	</div>
																</div>
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST2 Channel </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST2Channel ?></span>
																	</div>
																</div>
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST2 Judgment </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST2Judgment ?></span>
																	</div>
																</div>
															</div>
												
														</td>
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST3</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row text-left">
																		<div class="profile-info-name">ST3 LeakRate </div>
																		<div class="profile-info-value">
																			<span><?php echo $r->ST3LeakRate ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST3 MaxSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST3MaxSet ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST3 MinSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST3MinSet ?></span>
																	</div>
																</div>
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST3 Channel </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST3Channel ?></span>
																	</div>
																</div>
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST3 MarkCode </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST3MarkCode ?></span>
																	</div>
																</div>
																<div class="profile-info-row text-left">
																	<div class="profile-info-name">ST3 Judgment </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->ST3Judgment ?></span>
																	</div>
																</div>
															</div>
												
														</td>
												
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
												
														</div>
													
												</tr>
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

            <script>
										
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					// "aoColumns": [
					//   { "bSortable": false },
					//   null, null,null, null, null,
					//   { "bSortable": false }
					// ],
					"aaSorting": [],
					
					"columnDefs": [
      				  {  // set default column settings
       			     "orderable": false,
						"targets": [0,1, 2,3,4,5,6,7]
       				 }
					],
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			    } );

				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
			
  
				/***************/
                </script>
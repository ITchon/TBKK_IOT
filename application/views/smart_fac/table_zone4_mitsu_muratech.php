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
												    <td>'.$r->Index.'</td>
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
																		<div class="profile-info-row">
																			<div class="profile-info-name"> ID Spare 1 </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare1 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID Spare 2 </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare2 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID Spare 3 </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID_Spare3 ?></span>
																			</div>
																		</div>
																	</div>
																	
																	<!-- ------------------------------------------------------------------- -->
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">Text</span>
																			</div>
																		</div>
											
																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> ID1X </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->ID1X ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID1Y </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID1Y ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID2X </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID2X ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID2Y </div>

																			<div class="profile-info-value">
																				<span><?php echo $r->ID2Y ?></span>
																			</div>
																		</div>

																	
																	</div>
																	<!-- ------------------------------------------------------------------- -->
																	
																	
														</td>
														
														
														<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">LeftTool</span>
																			</div>
																</div>
																<div class="profile-user-info profile-user-info-striped">
																	<?php for($i = 1;$i<=15; $i++){
																		$text ="LeftTool".$i."Life";
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->$text ?></span>
																			</div>
																		</div>
																	<?php
																		
																	 } 
																 ?>
																		<div class="profile-info-row">
																			<div class="profile-info-name">LeftToolMonitorXPeak </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->LeftToolMonitorXPeak ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name">LeftToolMonitorYPeak </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->LeftToolMonitorYPeak ?></span>
																			</div>
																		</div>
																</div>
														</td>
																<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">RightTool</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<?php for($i = 1;$i<=15; $i++){
																		$text ="RightTool".$i."Life";
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->$text ?></span>
																			</div>
																		</div>
																	<?php
																		
																	 } 
																 ?>
																<div class="profile-info-row">
																	<div class="profile-info-name">RightToolMonitorXPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->RightToolMonitorXPeak ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name">RightToolMonitorYPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $r->RightToolMonitorYPeak ?></span>
																	</div>
																</div>
															</div>
												
														</td>

														<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">LeftToolMonitor</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																<?php
																	 for($i = 1;$i<=12; $i++){
																		for($x=1;$x<=2;$x++){
																		switch ($x) {
																			case "1":
																				$name = "X";
																				break;
																			case "2":
																				$name = "Z";
																				break;
																			}
																		$text ="LeftToolMonitorTurretST".$i.$name;
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->$text ?></span>
																			</div>
																		</div>
																	<?php
																		}	
																	 } 
																 ?>
														     	</div>
												
														</td>
														<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">RightToolMonitor</span>
																			</div>
																</div>
																<div class="profile-user-info profile-user-info-striped">
																	<?php
																	 for($i = 1;$i<=12; $i++){//SHOW TOTAL
																		for($x=1;$x<=2;$x++){ //DUPICATE IN TOTAL
																		switch ($x) {
																			case "1":
																				$name = "X";
																				break;
																			case "2":
																				$name = "Z";
																				break;
																			}
																		$text ="RightToolMonitorTurretST".$i.$name;
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->$text ?></span>
																			</div>
																		</div>
																	<?php
																		}	
																	 } 
																 ?>
														     	</div>
														</td>
														<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">PPGFBCH</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<?php
																	 for($i = 1;$i<=8; $i++){//SHOW TOTAL
																		for($x=1;$x<=3;$x++){//DUPICATE IN TOTAL
																		switch ($x) {
																			case "1":
																				$name = "MeasumentData";
																				break;
																			case "2":
																				$name = "OffsetData";
																				break;
																			case "3":
																				$name = "OffsetExecution";
																				break;	
																			}
																		$text ="PPGFBCH".$i.$name;
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $r->$text ?></span>
																			</div>
																		</div>
																<?php
																		}	
																	 } 
																 ?>
																</div>
															
												
														</td>
												
														<!-- ------------------------------------------------------------------- -->
														<td class="center" style="background-color:#ffffff">
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																				<span class="white">Text</span>
																		</div>
																	</div>
																	
																	<div class="profile-user-info profile-user-info-striped">
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID1DIA145Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ID1DIA145Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID1DIA145Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ID1DIA145Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID2DIA37012Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ID2DIA37012Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID2DIA37012Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ID2DIA37012Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ODDIA98384Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ODDIA98384Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ODDIA98384Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->ODDIA98384Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height1DIA407Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height1DIA407Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height1DIA407Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height1DIA407Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height2DIA5815Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height2DIA5815Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height2DIA5815Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height2DIA5815Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height3DIA5408Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height3DIA5408Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height3DIA5408Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $r->Height3DIA5408Unit ?></span>
																				</div>
																			</div>
																	</div>

														</td>
							
													
														
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
                                        /***************/
										
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

	

				$(document).on('click', '.show-details-btn', function() {
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
    			});
				
			
	
				/***************/
                </script>
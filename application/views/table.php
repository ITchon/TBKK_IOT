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
											<tbody >
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center">
														<div class="action-buttons">
															<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
																<i class="ace-icon fa fa-angle-double-down"></i>
																<span class="sr-only">Details</span>
															</a>
														</div>
													</td>

													<td>
														<a href="#">ace.com</a>
													</td>
													<td>$45</td>
													<td class="hidden-480">3,330</td>
													<td>Feb 12</td>

													<td class="hidden-480">
														<span class="label label-sm label-warning">Expiring</span>
													</td>

													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-warning">
																<i class="ace-icon fa fa-flag bigger-120"></i>
															</button>
														</div>

														
													</td>
												</tr>

												<tr class="detail-row">
												<div class="table-detail">
													<div class="row">
														<td></td>
														<td class="center" style="background-color:#ffffff">
														
																	<div class="space visible-xs"></div>

																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Username </div>

																			<div class="profile-info-value">
																				<span>alexdoe</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Location </div>

																			<div class="profile-info-value">
																				<i class="fa fa-map-marker light-orange bigger-110"></i>
																				<span>Netherlands, Amsterdam</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Age </div>

																			<div class="profile-info-value">
																				<span>38</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Joined </div>

																			<div class="profile-info-value">
																				<span>2010/06/20</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Last Online </div>

																			<div class="profile-info-value">
																				<span>3 hours ago</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> About Me </div>

																			<div class="profile-info-value">
																				<span>Bio</span>
																			</div>
																		</div>
																	</div>
															
														</td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														<td style="border:none;"></td>
														</div>
													</div>
												</tr>
				
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
			
			
					select: {
						style: 'multi'
					}
			    } );

				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr ').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});


				$('#btn_enable').click(function(e) {
		
				if(confirm('คุณต้องการเปิดการใช้งานนี้ใช่หรือไม่')){
					
					$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_enable'; ?>');
					$('#frm_usermanagement').submit();
					
				}else{
					
					return false;
				}
				
		       
				
		    });
			
			$('#btn_disable').click(function(e) {
				
				if(confirm('คุณต้องการระงับรายการนี้ใช่หรือไม่')){
				
		       		$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_disable'; ?>');
					$('#frm_usermanagement').submit();
				
				}else{
				
					return false;	
				}
				
		    });
			
			$('#btn_delete').click(function(e) {
				
				if(confirm('คุณต้องการลบรายการใช้งานนี้ใช่หรือไม่')){
				
		        	$('#frm_usermanagement').attr('action', '<?php echo base_url().'user/checkall_delete'; ?>');
					$('#frm_usermanagement').submit();
				
				}else{
					
					return false;
				}
				
		    });

			
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
			
	
				/***************/
                </script>
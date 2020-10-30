											<hr>
											<div class="row card text-center">
												<div class="h3 text-left text-info" style="padding-left:20px">
												<b>Zone 1</b>	
												</div>	
												<div class="col-12 text-center h3 text-info">	
													<p>Serial : <?php echo $result[0]->Serial ?></p>	
													<p>Time : <?php echo substr($result[0]->DateTime,11,8) ?> 
													| Date : <?php echo substr($result[0]->DateTime,0,10) ?></p>	
													<p>QR Code : <?php echo $result[0]->QRcode ?></p>	
												</div>
												<hr>
													<div class="col-lg-4 col-md-4">	
																		<!-- ------------------------------------------------------------------- -->
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">Text</span>
																			</div>
																	</div>
											
																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name">L_CuttingProcess</div>
																			<div class="profile-info-value">
																				<span><?php echo $result[0]->L_CuttingProcess ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> R_CuttingProcess </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->R_CuttingProcess ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> L_MainChuckWork2DNo  </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->L_MainChuckWork2DNo ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name"> R_MainChuckWork2DNo  </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->R_MainChuckWork2DNo ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name"> D_2DReaderWork2DNo  </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->D_2DReaderWork2DNo ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name"> GaugeStationWork2DNo  </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->GaugeStationWork2DNo ?></span>
																			</div>
																		</div>
																	</div>
														</div>
																		
													<div class="col-lg-4 col-md-4">	
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																	<?php
																		
																	 } 
																 ?>
																<div class="profile-info-row">
																	<div class="profile-info-name">LeftToolMonitorXPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->LeftToolMonitorXPeak ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name">LeftToolMonitorYPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->LeftToolMonitorYPeak ?></span>
																	</div>
																</div>
															</div>
													</div>

														<div class="col-lg-4 col-md-4">	
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																	<?php
																		
																	 } 
																 ?>
																<div class="profile-info-row">
																	<div class="profile-info-name">RightToolMonitorXPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->RightToolMonitorXPeak ?></span>
																	</div>
																</div>
																<div class="profile-info-row">
																	<div class="profile-info-name">RightToolMonitorYPeak </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->RightToolMonitorYPeak ?></span>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col-lg-4 col-md-4">	
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">PPGFBCH</span>
																			</div>
																</div>
																<div class="profile-user-info profile-user-info-striped">
																	<?php
																	 for($i = 1;$i<=15; $i++){
																		for($x=1;$x<=3;$x++){
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																<?php
																		}	
																	 } 
																 ?>
																</div>
															</div>
															
														<div class="col-lg-2 col-md-4">	
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																	<?php
																		}	
																	 } 
																 ?>
														     	</div>
															</div>
															
															<div class="col-lg-2 col-md-4">	
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">RightToolMonitor</span>
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
																		$text ="RightToolMonitorTurretST".$i.$name;
																		?>
																		<div class="profile-info-row">
																			<div class="profile-info-name"><?php echo $text ?> </div>
																			<div class="profile-info-value">
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																	<?php
																		}	
																	 } 
																 ?>
														     	</div>
															</div>
															
														<div class="col-lg-4 col-md-12">	
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">Spare</span>
																			</div>
																		</div>
																	
																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> ID Spare 1 </div>
																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare1 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID Spare 2 </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare2 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID Spare 3 </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare3 ?></span>
																			</div>
																		</div>
																	</div>
															</div>
		
														
														</div>
													
								

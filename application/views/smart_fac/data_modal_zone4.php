                                               
                                                <?php 
                                                echo '<button value='.$result[0]->QRcode.' id="Textheader" hidden></button>';
                                                ?>
														<div class="row">															
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
																				<span><?php echo $result[0]->ID1X ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID1Y </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID1Y ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID2X </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID2X ?></span>
																			</div>
																		</div>
																		<div class="profile-info-row">
																			<div class="profile-info-name">  ID2Y </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID2Y ?></span>
																			</div>
																		</div>

																	
																	</div>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																				<span class="white">Text</span>
																		</div>
																	</div>
																	
																	<div class="profile-user-info profile-user-info-striped">
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID1DIA145Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ID1DIA145Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID1DIA145Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ID1DIA145Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID2DIA37012Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ID2DIA37012Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ID2DIA37012Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ID2DIA37012Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ODDIA98384Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ODDIA98384Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">ODDIA98384Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->ODDIA98384Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height1DIA407Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height1DIA407Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height1DIA407Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height1DIA407Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height2DIA5815Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height2DIA5815Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height2DIA5815Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height2DIA5815Unit ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height3DIA5408Judge </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height3DIA5408Judge ?></span>
																				</div>
																			</div>
																			<div class="profile-info-row">
																				<div class="profile-info-name">Height3DIA5408Unit </div>
																				<div class="profile-info-value">
																					<span><?php echo $result[0]->Height3DIA5408Unit ?></span>
																				</div>
																			</div>
																	</div>
								
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
							
																<!-- ------------------------------------------------------------------- -->
												
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																	<?php
																		}	
																	 } 
																 ?>
														     	</div>
														
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
																				<span><?php echo $result[0]->$text ?></span>
																			</div>
																		</div>
																<?php
																		}	
																	 } 
																 ?>
																</div>
																												
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
													
												
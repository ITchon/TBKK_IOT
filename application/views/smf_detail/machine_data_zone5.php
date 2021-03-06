										<hr>
											<div class="row card text-center">
												<div class="h3 text-left text-info" style="padding-left:20px">
												<b>Zone 5</b>
												</div>	
												<div class="col-12 text-center h3 text-info">
													<p>Serial : <?php echo $result[0]->Serial ?></p>	
													<p>Time : <?php echo substr($result[0]->DateTime,11,8) ?> 
													| Date : <?php echo substr($result[0]->DateTime,0,10) ?></p>	
													<p>QR Code : <?php echo $result[0]->QRcode ?></p>	
												</div>
												<hr>
														<div class="col-lg-3 col-md-3">		
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST1</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row ">
																		<div class="profile-info-name">ST1 SVPos </div>
																		<div class="profile-info-value">
																			<span><?php echo $result[0]->ST1SVPos ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name"> ST1 SVLoad</div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST1SVLoad ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name"> ST1 Judgment</div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST1Judgment ?></span>
																	</div>
																</div>
															</div>
															</div>
												
                                                            <div class="col-lg-3 col-md-3">		
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST2</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row ">
																		<div class="profile-info-name">ST2 LeakRate </div>
																		<div class="profile-info-value">
																			<span><?php echo $result[0]->ST2LeakRate ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST2 MaxSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST2MaxSet ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST2 MinSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST2MinSet ?></span>
																	</div>
																</div>
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST2 Channel </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST2Channel ?></span>
																	</div>
																</div>
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST2 Judgment </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST2Judgment ?></span>
																	</div>
																</div>
														    	</div>
															</div>
												
                                                            <div class="col-lg-3 col-md-3">		
																<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">ST3</span>
																			</div>
																		</div>
																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row ">
																		<div class="profile-info-name">ST3 LeakRate </div>
																		<div class="profile-info-value">
																			<span><?php echo $result[0]->ST3LeakRate ?></span>
																		</div>
																	</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST3 MaxSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST3MaxSet ?></span>
																	</div>
																</div>
												
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST3 MinSet </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST3MinSet ?></span>
																	</div>
																</div>
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST3 Channel </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST3Channel ?></span>
																	</div>
																</div>
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST3 MarkCode </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST3MarkCode ?></span>
																	</div>
																</div>
																<div class="profile-info-row ">
																	<div class="profile-info-name">ST3 Judgment </div>
																	<div class="profile-info-value">
																		<span><?php echo $result[0]->ST3Judgment ?></span>
																	</div>
																</div>
															    </div>
														    </div>
												
                                                        <div class="col-lg-3 col-md-3">		
															<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																			<div class="inline position-relative">
																					<span class="white">Spare</span>
																			</div>
																		</div>
											
																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row ">
																			<div class="profile-info-name"> ID Spare 1 </div>
																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare1 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row ">
																			<div class="profile-info-name">  ID Spare 2 </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare2 ?></span>
																			</div>
																		</div>

																		<div class="profile-info-row ">
																			<div class="profile-info-name">  ID Spare 3 </div>

																			<div class="profile-info-value">
																				<span><?php echo $result[0]->ID_Spare3 ?></span>
																			</div>
																		</div>
																	</div>
														</div>
												
								
												

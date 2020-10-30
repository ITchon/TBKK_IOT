<!DOCTYPE html>
<html lang="en">
<style>
.zone-card{
	padding-left:20px;
	padding-right:20px;
	padding-bottom:50px;
}
.card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
  background-color:#ffff;
  padding-bottom:20px;
}
.bg-color{
	background-color:#275a75;
}
.text-white{
	color:#ffff;
}
.page-container {
    width: 550px;
    margin: 0 auto;
}
.profile-user-info-striped {
    border: 1px solid #abbac3;
}
.profile-info-value{
	background-color:#ffff;
}
@media only screen and (max-width: 540px){
.page-container {
    width: 98%;
}

}
</style>
<div class="page-content bg-color">
						<div class="h3 text-info card" style="padding-left:20px;padding-top:15px;">
						
								Line CD :
								    <span>
                                    <?php echo $result_mach[0]->MachineNo ?>
                                        -
                                    <?php echo $this->uri->segment('3')?>
									</span>
								
						</div>
				<div class="row ">
					<div class="col-12 ">
						<div class="page-container ">
							<div class="position-relative">
								<div class="login-box visible widget-box no-border">
								
										<div class="widget-main text-center col-12">
											<h4 class="header text-info lighter bigger ">
												Machine Name : <b>  <?php echo $this->uri->segment('3')?> </b>
											</h4>

											<div class="space-6"></div>
                                                    <div class="btn btn-success no-hover" style="background-color:#5cb85c!important;border:none;padding:35px;display: inline-block;">
													    <span class="line-height-1 bigger-170 "> Normal </span>
													</div>
													
                                                <div class="btn btn-white" >
												        <div class="profile-info-row">
												        	<div class="profile-info-value">
														         <span>Test 1</span>
												        	</div>
												        </div>
												        <div class="profile-info-row">
												        	<div class="profile-info-value">
													        	<span>Test 2</span>
													        </div>
												        </div>
												        
                                                </div>
                                           
											<div class="space-6"></div>
										</div>
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
				    </div><!-- /.col -->

							<input type="hidden" id="mach_name" value="<?php echo $this->uri->segment('3')?>">
							<div class="zone-card">
										<div id="machine_data"></div>
							</div>
							<body class="login-layout light-login bg-color"> <!-- ???? -->
							
							</body>
<script>
 $(document).ready(function() {
	var mach_name = $('#mach_name').val();
			$.ajax({
						url: "<?php
							echo base_url("crud/machine_data"); 
						?>",  
						type: "POST",
						data:{
							mach_name:mach_name
						},
						dataType: "HTML",
						success: function(data){	
						$('#machine_data').html(data);
						//  console.log(data);
						},
				error:function(data){
					// console.log(data);
				}
			});

    setInterval(function get_data(){
		var mach_name = $('#mach_name').val();
			$.ajax({
						url: "<?php
							echo base_url("crud/machine_data"); 
						?>",  
						type: "POST",
						data:{
							mach_name:mach_name
						},
						dataType: "HTML",
						success: function(data){	
						$('#machine_data').html(data);
						//  console.log(data);
						},
				error:function(data){
					// console.log(data);
				}
			});
	}, 9000);
	});

</script>
</html>

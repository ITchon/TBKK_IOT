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

						<div class="page-header">
							<h1>
							<?php 
							echo ucfirst($this->uri->segment('2')."  ");
							echo ucfirst($this->uri->segment('1'));
							 ?>
							
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-6">
								<!-- PAGE CONTENT BEGINS -->
								<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">

									<?php echo form_open_multipart('box/add', array('id'=>'smart-form-register', 'class'=>'form-horizontal'));?>	
									<div class="row">
										<div class="col-xs-12">
										
									
									
										</div>
									</div>
									<?php echo form_close();?>


								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
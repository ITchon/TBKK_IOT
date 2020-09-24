<style>
.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
</style>
  <div class="modal fade" id="rule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="bg-primary modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
        <h1><div id="text_usergroup"></div></h1>
      </div>
      <div class="modal-body">
        
      <?php  echo form_open('usergroup/save_userg_permission'); ?>

          <div class="form-group">
             <div class="row">

    
            <div id="rule_data"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer ">
      <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
      <?php

        echo form_submit(array('user_id'=>'submit','value'=>'Add','class'=>'btn btn-primary')); 
         
     
        echo form_close(); 
      ?>


      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(":checkbox").on("change", function() {
  
      var p_id = $(this).attr('id');
        if (this["name"] === "pg" && this.checked) {
                $(':checkbox').each(function () {
                  if(p_id == $(this).attr("class")){
                    this.checked = true;
                  }
          
                });
        }else{
            $(':checkbox').each(function () {
                  if(p_id == $(this).attr("class")){
                    this.checked = false;
                  }
          
                });
        }
    })


$(document).on('click', '.rule', function() {
	 var id = $(this).val();

	 $.ajax({
    			url: "<?php echo base_url("crud/rule_usergroup");?>",  
    			type: "POST",
    			cache: false,
    			data:{
    				id: id
    			},
    			success: function(data){		
     			 $('#rule').modal({backdrop: 'static'});
     			 $('#rule_data').html(data);
            var sug_name = $("#sug_name").val();
     			 $('#text_usergroup').html(sug_name);
				  
	 			//  console.log(data);
    			},
          error:function(data){
            console.log(data);
          }
    		});
    });
    </script>











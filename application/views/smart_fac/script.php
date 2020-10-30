
<script>
	var myTable = 
	$('#dynamic-table')
	//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
	.DataTable( {
	} );
$(document).on('click', '.open-modal', function() {
	 var id = $(this).val();
	 $.ajax({
				url: "<?php
				$zone = $this->uri->segment('1');
					 echo base_url("crud/$zone");
					 ?>",  
    			type: "POST",
    			cache: false,
    			data:{
    				id: id
    			},
    			success: function(data){		
     			 $('#smart_fac').modal();
     			 $('#data_body').html(data);
     			 $('#text_header').html($("#Textheader").val());//modal head

				  
	 			//  console.log(data);
    			},
          error:function(data){
            // console.log(data);
          }
    });
});
 </script>
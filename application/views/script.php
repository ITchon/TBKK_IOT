<script type="text/javascript">
 $(document).ready(function() {
   
    $(document).on('click', '.enable', function() {
		var id = $(this).val();
        window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/enable/"+id;
    });


    $(document).on('click', '.delete', function() {
		
				var r = confirm("Confirm delete?");
  			    if (r == true) {
					var id = $(this).val();
  			      window.location.href = "<?php echo base_url().$this->uri->segment("1")?>/delete/"+id;
				}
  	});
 });
        
        	jQuery(function($) {
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
					
					$('#dynamic-table').find('tbody > tr').each(function(){
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

			
			
			})
            
		</script>


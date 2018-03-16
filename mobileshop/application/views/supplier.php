<link href="<?php echo base_url();?>css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/buttons.bootstrap.min.css" rel="stylesheet">


<!-- Date picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
 <style>
 .dt{
 display:block;
 position:relative;
 z-index:1;
 }
 
 </style>
 
  <!-- Date picker -->	
 <div class="container-fluid">    
 <div id="tpa_send" style="margin-top:0px;" class="mainbox col-md-12">                    
     <div class="panel panel-primary" >
       <div class="panel-heading" style="height:60px;">
               <div class="col-md-12">						
					<div  class="col-md-6">	
						<h4><b>Add New Supplier</b></h4>
					</div>
					
					</div>
					</div>  
			<div style="padding-top:30px" class="panel-body" >
			
			<div class="box-body" id="dl_details">
			<form id="staff_form" method="post">
			<div class="col-md-12">
								<div class="col-md-4">
								<label for="password">Supplier Name:</label>
								<input type="text" class="form-control input-sm" id="supplier_name" name="supplier_name" placeholder="Enter Supplier Name">
								</div>
								<div class="col-md-4">
							
								<div class="form-group">
							
								<label for="password">Supplier Company:</label>
								<br />
								<select id="supplier_company" name="supplier_company" class="form-control input-sm">
								<option value="lenovo">Lenovo</option>
								<option value="asus">Asus</option>								
								</select>
								
								</div>
							
								</div>
								<div class="col-md-4">
								<label for="password">Supplier Contact:</label>
								<input type="text" class="form-control input-sm" id="supplier_contact" name="supplier_contact" placeholder="Enter Contact">
								</div>
										
							</div>
								
           					<div class="col-md-12">
								<div class="col-md-4">
								<label for="password">Supplier Email:</label>
								<input type="text" class="form-control input-sm" id="supplier_password" name="supplier_password" placeholder="Enter Email">
								</div>
								<div class="col-md-4">
							
								<div class="form-group">
							
								<label for="password">Supplier Address:</label>
								<input type="text" class="form-control input-sm" id="supplier_address" name="supplier_address" placeholder="Enter Address">
								
								</div>
							
								</div>
								<div class="col-md-4">
								</div>
										
							</div>
				
			   <div class="col-md-12">
			<center>
				<button type="submit" class="btn btn-primary btn-md" id="btn_insert"><b class="class1">Save</b></button>
				<button type="button" class="btn btn-primary btn-md" id="btn_update" value="0" disabled><b class="class1">Update</b></button>
				</br>
				<label id="msg" style="color:blue;"></label>	
				<input type="hidden" class="form-control input-sm" id="wrid" name="wr_id" />
			</center>   
		  </div>
	</form>
	
		  <div id="dl_data">
			<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Supplier Name</th>
						<th>Supplier Company</th>
						<th>Supplier Contact</th>
						<th>Supplier Email</th>
						<th>Supplier Address</th>
						<th>Action</th> 
			
					</tr>
				</thead>
			   <tbody id="t_body">
			   <tr>
			   <td>Supplier 1</td>
			    <td>Lenovo</td>
				 <td>1211121212</td>
				  <td>abc@domain.com</td>
				   <td>Rajkot</td>
			   <td><button  class="btn_up btn btn-xs btn-warning" id="btn_view" ><i class="glyphicon glyphicon-edit"></i></button>
				<button  class="btn_up btn btn-xs btn-danger" id="btn_delete"  ><i class="glyphicon glyphicon-trash"></i></button></td>
			   </tr>
			    <tr>
			   <td>Supplier 2</td>
			    <td>Nokia</td>
				 <td>5689412569</td>
				  <td>ghi@domain.com</td>
				   <td>Rajkot</td>
				    
			   <td><button  class="btn_up btn btn-xs btn-warning" id="btn_view" ><i class="glyphicon glyphicon-edit"></i></button>
				<button  class="btn_up btn btn-xs btn-danger" id="btn_delete"  ><i class="glyphicon glyphicon-trash"></i></button></td>
			   </tr>
			   </tbody>
			</table>
		  </div>
			 

      </div>                     
     </div>  
        </div>
      
    </div>

<!-- jQuery -->
 <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jszip.min.js"></script>
<script src="<?php echo base_url();?>js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>js/buttons.colVis.min.js"></script>
 
	
 
 
	


    <script>
	$(document).ready(function(){
	$('#example').DataTable({scrollX: true});
	});
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
	
	
</body>

</html>

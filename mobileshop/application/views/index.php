

<style>
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="css/buttons.bootstrap.min.css" rel="stylesheet">
<!-- =============== Toast Message ===============-->
   <link rel="stylesheet" href="toastmessage/css/jquery.toastmessage.css" id="maincss">
</style>
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
						<h4><b>Check IMEI Validity:</b></h4>
					</div>
					
					</div>
					</div>  
			<div style="padding-top:30px" class="panel-body" >
			
			<div class="box-body" id="dl_details">
			<form id="staff_form" method="post">
			
           					<div class="col-md-12">
							<div class="col-md-4">
							</div>
								<div class="col-md-4">
							
								<div class="form-group">
							
								<label for="password"></label>
								<input type="text" class="form-control input-sm" id="imei" name="imei" placeholder="Enter IMEI No">
										<label id="msg" style="color:blue;"></label>
								</div>
							
								</div>
										
							</div>
							<div class="col-md-4">
							</div>
					
			   	</form>
		 
			 

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

<?php $this->load->view('headerCss');?>



<div class="section_title features">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-8">
                            <h1>Imax Infra
                                <span><a href="<?php echo base_url();?>welcome/">Home </a> / Contact Us</span>
                            </h1>
                        </div>     
                    </div>
                </div>            
            </div>
            <section class="content_info">
                <div class="container">
                  <!-- Newsletter Box -->                  
                    <div class="newsletter_box">
                        <div class="container">
                            <div class="row">
                              <div class="col-md-8">
                                  <h3>
                                     Imax Infra 
                                      <span>सोचो एक नई दुनिया .. .. खुशियाँ हों जहाँ |</span>
                                  </h3>                    
                                </div>
                                <div class="col-md-4">
                                   <form id="newsletterForm" action="http://html.iwthemes.com/fullstate/php/mailchip/newsletter-subscribe.php">
                                        <input type="email" placeholder="Your Mail..." required >
                                        <button class="register" type="submit"><i class="fa fa-angle-right"></i></button>
                                    </form> 
                                    <div id="result-newsletter"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
	<div class="col-sm-4 content" style="float: left;margin-left:10px;background-color:white;border-radius:10%;width:600px; margin-top:30px;">



		<div class="row"  style="border-radius:30%; background-color:white;width:400px;margin-left:10px;">
			<br/>
			
			<div class = "alert alert-info">
			    Address: Rosan Nagar, Rawapur,
			Kanpur Nagar. <br>Pincode :208019 <br>
<<<<<<< HEAD
			Contact Number : +91- 9208643071
			</div>

			<form action="<?php echo base_url();?>index.php/welcome/savedata" class="appointment-form ftco-animate" method="post">
				
				<?php if($this->uri->segment(3) == "true"){?>
                                    	<i class="fa fa-home alert-icon"></i>
                                    	<button type="button" class="close" data-dismiss="alert">×</button>
                                    	Thank you for contact us. Very soon we will contact you.
                                      <?php }elseif($this->uri->segment(3) == 3){ ?>
                                    	<i class="fa fa-home alert-icon"></i>
                                    	<button type="button" class="close" data-dismiss="alert">×</button>
                                    	<?php //echo   form_error();
                                    	echo "<p style='color:red;'>All Fields are medatory kindly check and try again.</p>";
                                    	?>
                                      <?php } ?>
=======
			Contact Number : 9838620786, 9208643071
			</div>

			<form action="#" class="appointment-form ftco-animate" method="post">
>>>>>>> 0b3390a246fde0fcc345068373f12ad08cef5151
				<div class="d-md-flex">
					<div class="form-group">
						<input type="text" class="form-control"
							placeholder=" Enter your Name" name="name" />
					</div>
					<div class="form-group ml-md-2">
						<input type="emaail" class="form-control"
							placeholder=" Enter your Email" name="email">
					</div>
				</div>
				<div class="d-md-flex">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<div class="icon">
									<span class="ion-ios-arrow-down"></span>
								</div>

							</div>
						</div>
						<div class="form-group ml-md-3">
							<input type="text" class="form-control"
								placeholder=" Enter Your Phone" name="phone" id="mob">
						</div>
					</div>
</div>
<<<<<<< HEAD
<div class="d-md-flex">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<div class="icon">
									<span class="ion-ios-arrow-down"></span>
								</div>

							</div>
						</div>
						<div class="form-group ml-md-3">
							<input type="text" class="form-control"
								placeholder=" Enter OTP" name="otp" id="otp">
						</div>
					</div>
</div>
=======
>>>>>>> 0b3390a246fde0fcc345068373f12ad08cef5151
					<div class="d-md-flex">
						<div class="form-group">
							<textarea name="" id="message" cols="30" rows="2" class="form-control"
								placeholder="Say something me" name="message"></textarea>
						</div>
						<div class="form-group ml-md-3">

<<<<<<< HEAD
							<input type="submit" class="btn btn-success" value="SEND">
=======
							<input type="submit" class="btn btn-success">
>>>>>>> 0b3390a246fde0fcc345068373f12ad08cef5151

						</div>
					</div>
			
			</form>
		</div>

	</div>

<div class="col-sm-6 content" style="float: right;height:500px;width:500px; ">

<br/>
<<<<<<< HEAD
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.40627796555685!2d80.27989351155952!3d26.479887083315816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c381cf022c33d%3A0x3ab9b4cd78325f9e!2sWonder%20Public%20School!5e0!3m2!1sen!2sin!4v1582801283690!5m2!1sen!2sin" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
=======
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14285.043380453084!2d80.280234!3d26.479545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b8ac1221b58e3c!2sKhan%20fancy%20Handloom!5e0!3m2!1sen!2sin!4v1582699062721!5m2!1sen!2sin"
		width="600" height="400" frameborder="0" style="border: 0;"
		allowfullscreen="" > </iframe>
>>>>>>> 0b3390a246fde0fcc345068373f12ad08cef5151


</div>
</div>
</div>
</div>
<<<<<<< HEAD
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
          $('#sub').hide();
        $('#otp').hide();
          $('#otplabel').hide();
        
        $('#mob').change(function(){
            var mob =$('#mob').val();
            alert(mob);
            
         
            $.post("<?php echo base_url(); ?>/common/sendotp" ,
            { mob : mob } ,
            function(data){ 
            //   alert(data);
                if(data=="Please Enter Your OTP"){
                      $('#sub').hide();
                      $('#otp').show();
                      $('#otplabel').show();
                }else{
                      $('#sub').hide();
                      $('#otp').show();
                      $('#otplabel').show();
                }
            });
        });
        
        $('#otp').change(function(){
           var otp= $('#otp').val();
           var mob =$('#mob').val();
        //   alert(otp);
           $.post("<?php echo base_url();?>/common/matchotp",
           { mob : mob ,otp : otp },
           function(data){
              // alert(data);
               if(data=="true"){
                     $('#sub').show();
               }else{
                     $('#sub').hide();
               }
               
           });
            
        });
    });
</script>
=======

>>>>>>> 0b3390a246fde0fcc345068373f12ad08cef5151








<?php $this->load->view('footerJs');?>


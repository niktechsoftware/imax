 <?php $this->load->view('headerCss');?>

 <div class="section_title features" >
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-8">
                            <h1>Imax Infra
                                <span><a href="<?php echo base_url();?>welcome/">Home </a> / Registration</span>
                            </h1>
                        </div>     
                    </div>
                </div>            
            </div>
            
            <section class="content_info">
                <div class="container" style="background-image: url('<?php echo base_url();?>assets/img/4.jpg');">
               
                 
                  <!-- Newsletter Box -->                  
                    <div class="newsletter_box">
                        <div class="container">
                            <div class="row">
                              <div class="col-md-8">
                                  <h3>
                                     Imax Infra 
                                      <span>सोचो एक नई दुनिया....खुशियाँ है जहां ... </span>
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
                    <!-- End Newsletter Box -->
  <br>    
                          <br>
                          <form method="post" action="<?php echo base_url();?>index.php/welcome/insertdata">
                   <div class="container">
                            <div class="col-md-12">
                                <div class="col-md-6"> 
												<div class="col-md-7"><input type="text" class="form-control" name="parent_id"
													id="parent_id" placeholder="Enter Your Sponsor Id"
													value="<?php echo set_value('parent_id'); ?>"
													>
															</div>	
														
									<?php echo form_error('parent_id');?>
                                </div> 
                                <div class="col-md-6">
                                    <div class="col-md-12" id="custoStatus">
                                        </div>
                                </div>
							</div>
                            <br>    
                          <br>
                          <script>
  //alert("rahul");
 //$('#regForm').hide();
  $('#parent_id').keyup(function(){
    var parent_id= $('#parent_id').val();
    $.post("<?php echo site_url("pageControllers/checkID") ?>",{parent_id : parent_id}, function(data){
    	var d = jQuery.parseJSON(data);
		$("#custoStatus").html(d.msg);
 
  
  
	});
  });

</script>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                              
												<div class="col-md-7"><input type="text" class="form-control"
																value="<?php echo set_value('name'); ?>" name="name"
															onkeyup="namevalidation();" class="form-control text-uppercase"	id="name" placeholder="Enter Your Name">
															</div>	
														
									<?php echo form_error('name');?>
									</div>
                                <div class="col-md-6">  
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="<?php echo set_value('fname');?>" name="fname"
																id="fname" placeholder="Enter Your Father's Name">
														</div>
					                    <?php echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                              
												<div class="col-md-7"><input type="text" class="form-control"
																value="<?php echo set_value('address'); ?>" name="address"
																id="address" placeholder="Enter Address">
															</div>	
														
									<?php echo form_error('address');?>
									</div>
									<div class="col-md-6">
                                    
                               
														<div class="col-md-7">
													<select class="form-control show-tick" id="state" name="state" required="required" value="<?php echo set_value('state');?>">
													 <option value="Bihar">--Select State--</option>
													 <?php 
													 $this->db->distinct();
													 $this->db->select("state");
													$dist=  $this->db->get("city_state");
													foreach($dist->result() as $row):?>
													<option value="<?php echo $row->state;?>"><?php echo $row->state;?></option>
                                           <?php endforeach;?>
													</select>
															</div>	
														
									<?php echo form_error('state');?>
									
									<script>
									$("#state").change(function(){
										var state = $("#state").val();
										//alert(state);
										$.post("<?php echo base_url() ?>index.php/common/getCity",{state : state},function(data){
											$("#city").html(data);
										});
									});

									
									</script>
									
									</div>
									
                               
                            </div>
                              <br>    
                          <br>
                            <div class="col-md-12">
                                 <div class="col-md-6">  
												<div class="col-md-7">	
												<select class="form-control show-tick" id="city" name="city" required="required" value="<?php echo set_value('state');?>">
												<option value="Bihar">--Select City--</option>
												 
												</select>
												</div>
					                    <?php echo form_error('city');
					                    ?> 
				
					                    
												</div>
												
									<script type="text/javascript">

									$("#city").change(function(){
										var state = $("#state").val();
										var city = $("#city").val();
										//alert(state);
										$.post("<?php echo base_url() ?>index.php/common/getArea",{city : city,state : state},function(data){
											$("#area").html(data);
										});
									});

									</script>			
												
												
												
									
                                <div class="col-md-6">  
												<div class="col-md-7">	
												<select class="form-control show-tick" id="area" name="area" required="required" value="<?php echo set_value('area');?>">
													 <option value="Bihar">--Select Area--</option>
													
													</select>
														</div>
					                    <?php echo form_error('area');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                                <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               
												<div class="col-md-7"><input type="text" class="form-control"
																value="<?php echo set_value('pinnum'); ?>" name="pinnum"
																id="pinnum" placeholder="Enter Your Pin Number">
															</div>	
														
									<?php echo form_error('pinnum');?>
									</div>
									  <script>$("#area").change(function(){
								var state = $("#state").val();
								var city = $("#city").val();
								var area = $("#area").val();
								//alert(state);
								$.post("<?php echo base_url() ?>index.php/common/getPin",{area : area,city : city,state : state},function(data){
									$("#pinnum").val(data);
								});
							});</script>
                                <div class="col-md-6">  
												<div class="col-md-3">	
												<input type="radio" name="gender" value="<?php echo set_value('gender'); ?>"><font color="white"><b>Male</font>
												</br>
												</div>
												<div class="col-md-3">
												<input type="radio" name="gender" value="<?php echo set_value('gender'); ?>"><font color="white"><b>Female</font>
														</div>
					                    <?php echo form_error('gender');
					                    ?> 
												</div>
                            </div>
                            
                          
                              <br>    
                          <br>
                        
								<div class="col-md-12">
                                <div class="col-md-6">
                                    
                              
												<div class="col-md-7"><input type="text" class="form-control"
																value="<?php echo set_value('adharnum'); ?>" name="adharnum"
															onkeyup="namevalidation();" class="form-control text-uppercase"	id="name" placeholder="Enter Your AadharNumber">
															</div>	
														
									<?php echo form_error('adharnum');?>
									</div>
                                <div class="col-md-6">  
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="<?php echo set_value('pannum');?>" name="pannum"
																id="fname" placeholder="Enter Your PanNumber">
														</div>
					                    <?php echo form_error('pannum');
					                    ?> 
												</div>
                            </div>      
                            </br>
								</br>
								 <div class="col-md-12">
                                <div class="col-md-6">
                                    
                              
												<div class="col-md-7"><input type="text" class="form-control"
																value="<?php echo set_value('password'); ?>" name="password"
															onkeyup="namevalidation();" class="form-control text-uppercase"	id="password" placeholder="Enter Your Password">
															</div>	
														
									<?php echo form_error('password');?>
									</div>
                                <div class="col-md-6">  
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="<?php echo set_value('cpassword');?>" name="cpassword"
																id="fname" placeholder="Confirm Your Password">
														</div>
					                    <?php echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                            </br>
								</br>
								
								<div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <input class="form-check-input" type="checkbox" value="<?php echo set_value('gridcheck'); ?>"
																	id="gridCheck"  name="gridcheck"> <label
																	class="form-check-label" for="gridCheck"> <a href="#">I
																		Accept Term And Condition.</a>
																</label>
														
									<?php echo form_error('gridcheck');?>
									</div>
                                <div class="col-md-6">  <div class="form-group">
								<input type="submit" class="btn btn-primary" id="regisbtn">
								
										</button>
										</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                           
								
								
								               
                      </form>

                    </div>
                </div>
                           </section>
                           </div>
            <?php $this->load->view('footerJs');?>
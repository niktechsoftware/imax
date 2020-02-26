 <?php $this->load->view('headerCss');?>
 <div class="section_title features">
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
                <div class="container">
                  <!-- Newsletter Box -->                  
                    <div class="newsletter_box">
                        <div class="container">
                            <div class="row">
                              <div class="col-md-8">
                                  <h3>
                                     Imax Infra 
                                      <span>-सोचो एक नई दुनिया .. .. खुशियाँ हों जहाँ |</span>
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
                   <div class="container">
                            <div class="col-md-12">
                                <div class="col-md-6"> <div class="col-md-5"><span class="label label-default">Sponsor
												Userid</span> </div>
												<div class="col-md-7"><input type="text" class="form-control" name="parent_id"
													id="parent_id"
													value="<?php //echo set_value('parent_id'); ?>"
													required="required">
															</div>	
														
									<?php //echo form_error('name');?>
                                </div> 
                                <div class="col-md-6">
                                    <div class="col-md-12" id="custoStatus">
                                        </div>
                                </div>
							</div>
                            <br>    
                          <br>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">Name
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="name"
																id="name" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">Father/Husband Name
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="fname"
																id="fname" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">Address
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="address"
																id="address" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">City
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="city"
																id="city" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">State
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="state"
																id="state" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">Pincode
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="pinno"
																id="pinno" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                                <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">MObile Number
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="mobile"
																id="mobile" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">Gender
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="dob"
																id="dob" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                                <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">Pan NUmber
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="name"
																id="name" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">Adhar Number
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="fname"
																id="fname" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                             <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <div class="col-md-5"><span class="label label-default">Password
												</span> </div>
												<div class="col-md-7"><input type="text" class="form-control"
																value="" name="name"
																id="name" required="required">
															</div>	
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="col-md-5"><span class="label label-default">Confirmed Password
											</span> </div>
												<div class="col-md-7">	
												<input type="text" class="form-control"
																value="" name="fname"
																id="fname" required="required">
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                             <div class="col-md-12">
                                <div class="col-md-6">
                                    
                               <input class="form-check-input" type="checkbox"
																	id="gridCheck" required="required" name="gridCheck"> <label
																	class="form-check-label" for="gridCheck"> <a href="#">I
																		Accept Term And Condition.</a>
																</label>
														
									<?php //echo form_error('name');?>
									</div>
                                <div class="col-md-6">  <div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
					                    <?php //echo form_error('fname');
					                    ?> 
												</div>
                            </div>
                              <br>    
                          <br>
                           
                    </div>
                      

                    </div>
                </div>
            </section>
            <?php $this->load->view('footerJs');?>
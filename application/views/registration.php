<?php $this->load->view("headercss")?>
<div id="UpdateProgress" style="display:none;">
	
                        <div id="overlay">
                <div id="modalprogress">
                    <div id="theprogress">
                       </div></div></div>
                    
</div>	
                
                    <div id="upd2">
				
  <!-- Data Tables Stripped & Bordered Section START -->
  
  
  <div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Customer Registration Form</h4>

						</div>
						<form action="#" method="post">
							<div class="card-body">
								

								<div class="row">

									<div class=" col-col-md-6 col-xs-6 col-lg-6 ">

                                    
                                    <div class="form-group row">
											<label class="col-sm-3 col-form-label required" style="margin-left:40px;" >Sponsor
												Userid<span title="Required" style="color: red;">*</span>
											</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="userid"
													id="userid"
													
													required="required">
												
											</div>
										</div>
									</div>


									<div class=" col-col-md-6 col-xs-6 col-lg-6 ">
                                    
										<div class="form-group row">
											<label class="col-sm-3 col-form-label required"  >Email
												<span title="Required" style="color: red;">*</span>
											</label>
											<div class="col-sm-8" " >
												<input type="text" class="form-control" name="email"
													
													
													required="required">
												
											</div>
										</div>
									</div>

</div>
</div>
									<div class=" col-col-md-6 col-xs-6 col-lg-6 ">
										<div class="form-group row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<div id="custoStatus"></div>
                   
                     </div>
										</div>
									</div>
									
								</div>

								<div class="row" id="regForm">
								
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">
													<div class="form-group row">
													<div class="col-md-3">
														<label class="col-sm-3 col-form-label required" style="margin-left:40px;" >Name<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="name"
																id="name" required="required">
														</div>
                    								
                                                    </div>
												</div>

											</div>


											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Mobile No<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control phone-number"
																name="mobile" 
																id="mobile" required="required">
														</div>
                               
                                </div>
												</div>	
											</div>
										</div>
									</div>

									

								
								

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label class="col-sm-3 col-form-label required" style="margin-left:40px;" >Password<span title="Required" style="color: red;">*</span></label>
													</div>

													<div class="col-md-8">
														<div class="form-group">
															<input type="password"
																
																required="required" class="form-control pwstrength"
																data-indicator="pwindicator" name="password"
																id="password">
														</div>
													</div>


												</div>
											</div>
											
											
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Gender<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group row">
															<div class="col-md-5">
																<div
																	class="custom-control custom-radio custom-control-inline">
																	<input type="radio" id="customRadioInline1" value="1"
																		name="customRadioInline1"
																		
																		required="required" class="custom-control-input"> <label
																		class="custom-control-label" for="customRadioInline1">MALE</label>
																</div>
															</div>
															<div class="col-md-5">
													<div
				class="custom-control custom-radio custom-control-inline">
		<input type="radio" id="customRadioInline2" value="2"
name="customRadioInline1"
	
				class="custom-control-input"> <label
					class="custom-control-label" for="customRadioInline2">FEMALE
			</label>
			</div>
					</div>
                   
                    </div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">

										
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label class="col-sm-3 col-form-label required" style="margin-left:40px;" >Confirm Password<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control pwstrength"
																
																required="required" data-indicator="pwindicator"
																name="confirm_pass" id="confirm_pwd">
														</div>
                              
                                </div>
												</div>
											</div>
											
											
												<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label class="col-sm-3 col-form-label required"  >Pincode<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control pwstrength"
																
																required="required" data-indicator="pwindicator"
																name="pincode" id="pincode">
														</div>
                              
                                </div>
												</div>
											</div>
											
											
											
											
											
										
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label class="col-sm-3 col-form-label required" style="margin-left:30px;" >Address<span title="Required"
															style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control pwstrength"
																
																required="required" data-indicator="pwindicator"
																name="address" id="address">
														</div>
                              
                                </div>
												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
													<div class="form-group row">
													<div class="col-md-3">
													<label class="col-sm-3 col-form-label required" style="margin-left:10px;" >City<span title="Required"
															style="color: red;">*</span></label>
</div>
<div class="col-md-9" >
<select id="city" style="width:500px;height:30px;" >
  <option value="a">Kanpur</option>
  <option value="b">Agra</option>
  <option value="c">Mathura</option>
  <option value="d">DELHI</option>
</select>
</div>
</div>
											</div>
											</div>
											
												<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											
										
											<div class="col-xs-6 col-md-6 col-lg-6">	
											<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group mb-0">
															<div class="form-check">
																<input class="form-check-input" type="checkbox"
																	id="gridCheck" required="required" name="gridCheck"> <label
																	class="form-check-label" for="gridCheck"> <a href="#">I
																		Accept Term And Condition.</a>
																</label>
															</div>
														</div>
													</div>

												</div>
											</div>
											
											<div class="col-xs-6 col-md-6 col-lg-6">	
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>
											</div>
											
											
											
										
										</div>
									</div>

								</div>
							</div>
					
					</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

  
  
  <!--reg-->
  


<!-- Data Tables Stripped & Bordered Section END -->

    
        


<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>A great business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				
				</div>
		</div>
	</div>
</div>


<?php echo $this->load->view("footerjs"); ?>
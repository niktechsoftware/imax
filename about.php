<?php $this->load->view("headerCss")?>
		
				<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo base_url();?>assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row justify-content-end">
<div class="col-md-6 py-5 px-md-5 bg-primary">
<div class="heading-section heading-section-white ftco-animate mb-5">
<h2 class="mb-4">Request A Quote</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
<form action="<?php echo base_url();?>index.php/welcome/auth" class="appointment-form ftco-animate" method="post">
<div class="d-md-flex">
<div class="form-group">
<input type="text" class="form-control" placeholder="First Name" name="fname"/>
</div>
<div class="form-group ml-md-4">
<input type="text" class="form-control" placeholder="Last Name" name="lname">
</div>
</div>
<div class="d-md-flex">
<div class="form-group">
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<!--<select name="course" id="" class="form-control">
<option value="a">Select Your Course</option>
<option value="a">Art Lesson</option>
<option value="a">Language Lesson</option>
<option value="a">Music Lesson</option>
<option value="a">Sports</option>
<option value="a">Other Services</option>
</select>-->
</div>
</div>
</div>
<div class="form-group ml-md-4">
<input type="text" class="form-control" placeholder="Phone" name="phone">
</div>
</div>
<div class="d-md-flex">
<div class="form-group">
<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message" name="message"></textarea>
</div>
<div class="form-group ml-md-4">
<input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
</div>
</div>
</form>
</div>
</div>
</div>
</section>							
											
            <?php $this->load->view("footerJs")?>        
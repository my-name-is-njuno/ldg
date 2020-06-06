<?php 

    include_once 'php/layout/top.php';

?>

<body id="contact" class="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<?php 

include_once 'php/layout/navbar.php';

?>
    <!-- Start Banner -->
	  <div class="section inner_page_header">
	     <div class="container">
		    <div class="row">
              <div class="col-lg-12">
			     <div class="full">
				    <h3>Contact</h3>
				 </div>
			  </div>
			</div>
		 </div>
	  </div>
    <!-- end Banner -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count"></p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Contact</p>
                            <h2><span class="theme_color">Get </span> In Touch</h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>	
			<div class="row margin-top_30">
				
				<div class="col-lg-7 col-sm-7 col-xs-12 margin-top_30">
				<div class="contact-block">
					<form id="contactForm" method="post" action="">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
                        </div>
                        <div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control datetimepicker" id="proposed_date" name="proposed_date" placeholder="Proposed date and time" required data-error="Please enter Proposed Date">
								<div class="help-block with-errors"></div>
							</div>                                 
                        </div>
                        
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Book Now</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>


				<div class="col-lg-5 col-sm-5 col-xs-12 margin-top_30">
					<div class="left-contact">
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>Lavington Green
Shopping Centre, 3rd floor Chandarana Building, room 301,</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">lavingtongreendental@gmail.com</a><br>
								
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
                                <a href="#">0706 820099</a><br>
                                <a href="#">0720774844</a><br>
								<a href="#"> 0723711130</a>
							</div>
						</div>
					</div>
				</div>


			</div>
        </div>
    </div>


    <div class="section layout_padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_left">
                    <div class="left">
                        <p class="section_count"></p>
                    </div>
                    <div class="right">
                        <p class="small_tag">Visit Us</p>
                        <h2><span class="theme_color">Get </span> In Touch</h2>
                    </div>	
                    </div>
                </div>
            </div>
        </div>	
            <div class="row">

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.291668392081!2d36.7707876!3d-1.2798811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77c365e170c69162!2sLavington+Green+Dental+Suite!5e0!3m2!1sen!2ske!4v1558167936169!5m2!1sen!2ske" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
	<!-- end section -->
	
<?php 

include_once 'php/layout/footer.php';

?>
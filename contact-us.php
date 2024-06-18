
<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Book Marketing and Publishing Agency | Atlantic Book Publishers</title>

  <body>
  <?php include "./components/header.php"?>
  <section class="banner__sec__main about__bannner">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="assets/images/inner-banner.jpg" class="img-responsive banner__img" alt="Los Angeles">
		      <div class="carousel-caption">
			    <div class="container">
			    	<div class="row">
			    		<div class="col-sm-12">
			    			<div class="banner__content">
			    				<!-- <h6>CONTACT US TODAY WE ARE NOT DIFFICULT TO REACH</h6> -->
				    			<h1>We welcome your inquiries, feedback, <br> and collaboration ideas. </h1>

				    			<p>Welcome to Atlantic Book Publishers, where words come alive, stories unfold, and literary dreams find their home.</p>

				    			<div class="banner__btn">
				    				<ul>
				    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
				    					<li><a href="tel:8776753363">(877) 675-3363</a></li>
				    				</ul>
				    			</div>

			    			</div>
			    		</div>
			    	</div>
			    </div>
			  </div>
		    </div>
		</div>
	</section>

<!-- Banner Section End -->


<!-- Contact Us Section Begin -->
	
	<section class="contact__sec padding__90">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="contact__det">
						<img src="assets/images/get-touch.png" class="img-responsive get__img" alt="get-touch">
						<h3>Get Ready to Avail the Finest Assistance Through Our Exceptional Services. Connect With Us Today!</h3>
						<p>Our approachable team is here to assist you with any questions regarding our services, discuss your literary project, or address any concerns you may have. You can get in touch with us through the given form as well. Whether you're an aspiring author seeking guidance or a publishing enthusiast exploring collaboration opportunities, we look forward to hearing from you. Connect with us today, and let's start a conversation about bringing your literary visions to fruition.</p>

						<div class="number__det">
							<ul>
								<li><a href="tel:15623421027">+1 562 342 1027</a></li>
							</ul>
						</div>

					</div>
				</div>

				<div class="col-sm-7">
					<div class="contact__form">
						<form class="" id="banform" method="POST" action="webpages/contactSubmitController">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="name" placeholder="Your Name" required="" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<input type="email" name="email" placeholder="Your Email" required="" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<input id="phone-coun" name="number" rangelength="[7,12]" type="number" placeholder="Phone Number" required="" class="cta-phone" autocomplete="off">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<textarea class="form-control" name="message" placeholder="Talk About Your Project" required=""></textarea>
								</div>
							</div>

							<div class="row">
    							    <div class="col-sm-12">
    							        <div class="form-group">
                                          <label><input type="checkbox" class="quote-form" required=""> Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL (<a href="privacy-policy">PRIVACY POLICY </a>&amp; <a href="term-and-condition">TERM &amp; CONDITIONS</a>) - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP to unsubscribe anytime.</label>
                                        </div>
    							    </div>
    							</div>
    							
    							

							<div class="row">
								<div class="col-sm-12">
									<div class="btn__form">
										<button type="submit">Submit</button>
										<input type="hidden" name="ctry" value="">
						                    <input type="hidden" name="pc" value="">
						                    <input type="hidden" name="cip" value="">
						                    <input type="hidden" name="hiddencapcha" value="">
						                    <input type="hidden" id="location" name="pageURL" value="https://www.atlanticbookpublishers.com/contact-us" />
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

<!-- Contact Us Section End -->

<?php include "./components/footer.php"?>


</body>
</html>

<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Book Marketing and Publishing Agency | Global Publishings</title>

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

				    			<p>Welcome to Global Publishings, where words come alive, stories unfold, and literary dreams find their home.</p>

				    			<div class="banner__btn">
				    				<ul>
				    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
				    					<li><a href="tel:15623421027">+1 562 342 1027</a></li>
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

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="footer__det">
					<div class="footer__logo">
						<a href="/"><img srcset="assets/images/logo.png" class="img-responsive" alt="Global Publishings"></a>
					</div>

					<div class="footer__content__sec">
						<p>We offer all-inclusive services to cater to author needs with a 360-degree approach. Our motto is to ensure a stress-free ground for authors. With our all-in-one solution, you can just overhaul the process and leave the rest to us.</p>
                        
                        <p>This website is under the ownership of Global Book Writers, operating as Global Publishings.</p>
                        
                        <div class="social__media__icon">
                            <ul>
                                <li><a href="https://facebook.com/Atlanticbookwriters/" target="_blank" rel='noreferrer'><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="https://www.instagram.com/atlanticbookwriters/" target="_blank" rel='noreferrer'><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="https://twitter.com/AtlanticBwriter" target="_blank" rel='noreferrer'><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="https://www.linkedin.com/company/atlantic-book-writers" target="_blank" rel='noreferrer'><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="https://www.pinterest.com/atlanticbookwriters/" target="_blank" rel='noreferrer'><i class='bx bxl-pinterest'></i></a></li>
                            </ul>
                        </div>
                            
						<img src="assets/images/payment-logo.png" class="img-responsive" alt="Payment">

					</div>

				</div>
			</div>

			<div class="col-sm-2">
				<div class="quic__link">
					<div class="link__head">
						<h6>Quick Links</h6>
					</div>

					<div class="links__menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="/about-us.php">About Us</a></li>
							<!--<li><a href="#">Pricing</a></li>-->
							<li><a href="/contact-us.php">Contact Us</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="col-sm-2">
				<div class="quic__link">
					<div class="link__head">
						<h6>Services</h6>
					</div>

					<div class="links__menu">
						<ul>
							<li><a href="/ghostwriting.php">Ghost Writing</a></li>
							<li><a href="/book-editing.php">Book Editing</a></li>
							<li><a href="/book-formatting.php">Book Formatting</a></li>
							<li><a href="/book-cover-design.php">Book Cover Design</a></li>
							<li><a href="/book-publishing.php">Book Publications</a></li>
							<li><a href="/book-marketing.php">Book Marketing</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="col-sm-3">
				<div class="det__loc">
					<div class="link__head">
						<h6>Contact Information</h6>
					</div>

					<div class="det__loc__tab">
						<ul>
							<li>
								<span><img src="assets/images/footer-icon-01.svg" class="img-responsive" alt="footer">Mailing Address</span>
								<p><span><img src="assets/images/flag-footer-img-01.webp" alt="USA Flag"></span>The Quad, 530 Technology Dr, Irvine, CA 92618, United States</p>
								
							</li>

							<li>
								<span><img src="assets/images/footer-icon-02.svg" class="img-responsive" alt="footer">Phone Number</span>
								<a href="tel:15623421027">+1 562 342 1027</a>
							</li>

							<li>
								<span><img src="assets/images/footer-icon-03.svg" class="img-responsive" alt="footer">Email Address</span>
								<a href="mailto:info@globalpublishings.com">info@globalpublishings.com</a>
							</li>

						</ul>
					</div>



				</div>
			</div>

		</div>
	</div>

	<div class="copy_right">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copy__text">
						<p>© Copyright 2024 | Global Publishings | All right reserved.</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="term__links">
						<ul>
							<li><a href="/term-and-condition.php">Terms & Conditions</a></li>
							<li><a href="/privacy-policy.php">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>


</body>
</html>
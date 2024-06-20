<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Author Website Design | Build an Author Website - ABP</title>
  <body>
  <?php include "./components/header.php"?>

	<section class="banner__sec__main inner__services">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="assets/images/author-website-banner.jpg" class="img-responsive banner__img" alt="Los Angeles">
		      <div class="carousel-caption">
			    <div class="container">
			    	<div class="row align-items-center">
			    		<div class="col-sm-7">
			    			<div class="banner__content text-left">
			    				<h6>Author Website Design by Global Publishings </h6>
				    			<h1>Connect With Our Experts For Customized <span class="inner-pages-head-clor">Web Design</span> Solutions.</h1>

				    			<p>Want to elevate your online presence as an author? Look no further! Our author website design services are tailored to give your literary endeavors a professional and captivating online platform.</p>

				    			<div class="banner__btn">
				    				<ul>
				    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
				    					<li><a href="tel:15623421027">+1 562 342 1027</a></li>
				    				</ul>
				    			</div>

			    			</div>
			    		</div>

			    		<div class="col-sm-5">
			    			<div class="inner__form__ser">
			    				<form class="cmxform leadForm" id="regForm bottomform" method="POST" action="webpages/bannerFormController">
				    				<div class="inner__form__head">
				    					<h4>Start Your Publishing Journey</h4>
				    				</div>

				    				<div class="form__sec__tab">
				    					<div class="row">
				    						<div class="col-sm-6">
				    							<select name="book_ready" class="form-control" required="">
							                        <option selected="" disabled="">Do you have a manuscript ready?</option>
							                        <option value="Yes, I am ready to publish today">Yes, I'm ready to publish today</option>
							                        <option value="Yes, I will be ready to publish in 1 to 3 months">Yes, I'll be ready to publish in 1 to 3 months</option>
							                        <option value="Yes, I will be ready to publish in 3 to 6 months">Yes, I'll be ready to publish in 3 to 6 months</option>
							                        <option value="Yes, I will be ready to publish in 6 to 12 months">Yes, I’ll be ready to publish in 6 to 12 months</option>
							                        <option value="No, I do not have a book or manuscript ready">No, I do not have a book or manuscript ready</option>
							                    </select>
				    						</div>

				    						<div class="col-sm-6">
				    							<select name="published_before" class="form-control" required="">
							                        <option selected="" disabled="">Have you published before?</option>
							                        <option value="Yes">Yes</option>
							                        <option value="No">No</option>
							                    </select>
				    						</div>

				    					</div>

				    					<div class="row">
				    						<div class="col-sm-12">
				    							<select name="book_your_writing" class="form-control" required="">
							                        <option selected="" disabled="">What type of book do you plan on publishing?</option>
							                        <option value="Business">Business</option>
							                        <option value="Biography">Biography</option>
							                        <option value="Inspirational">Inspirational</option>
							                        <option value="Non-Fiction">Non-Fiction</option>
							                        <option value="How-To">How-To</option>
							                        <option value="Autobiography/Memoir">Autobiography/Memoir</option>
							                        <option value="Self-Help">Self-Help</option>
							                        <option value="Children">Children</option>
							                        <option value="Spiritual/Religious">Spiritual/Religious</option>
							                        <option value="Fiction">Fiction</option>
							                        <option value="Art/Photography">Art/Photography</option>
							                        <option value="Cookbook">Cookbook</option>
							                        <option value="Other">Other</option>
							                    </select>
				    						</div>
				    					</div>

				    					<div class="row">
				    						<div class="col-sm-12">
				    							<div class="center__head">
				    								<h6>What Services Are You Looking For?</h6>
				    							</div>

				    							<div class="form-check-flex">
				    							    <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Ghostwriting" id="ghostwriting">
							                            <label class="form-check-label" for="ghostwriting">
							                                Ghostwriting
							                            </label>
							                        </div>
							                        
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Self Publishing" id="selfPublishing">
							                            <label class="form-check-label" for="selfPublishing">
							                                Self Publishing
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Book Editing" id="bookediting">
							                            <label class="form-check-label" for="bookediting">
							                                Book Editing
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Book Cover Design" id="coverDesign">
							                            <label class="form-check-label" for="coverDesign">
							                                Book Cover Design
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Book Printing" id="BookPrinting">
							                            <label class="form-check-label" for="BookPrinting">
							                                Book Printing
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Interior Formatting" id="interiorFormatting">
							                            <label class="form-check-label" for="interiorFormatting">
							                                Interior Formatting
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Illustration" id="illustration">
							                            <label class="form-check-label" for="illustration">
							                                Illustration
							                            </label>
							                        </div>
							                        <div class="form-check">
							                            <input class="form-check-input" type="checkbox" name="services[]" value="Book Marketing" id="bookmarketing">
							                            <label class="form-check-label" for="bookmarketing">
							                                Book Marketing
							                            </label>
							                        </div>
							                    </div>
				    						</div>
				    					</div>

				    					<div class="row">
				    						<div class="col-sm-6">
				    							<input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
				    						</div>

				    						<div class="col-sm-6">
				    							<input id="phone-country" name="number" rangelength="[7,12]" type="number" placeholder="Phone Number" required="" class="cta-phone form-control" autocomplete="off">
				    						</div>
				    					</div>

				    					<div class="row">
				    						<div class="col-sm-12">
				    							<input type="email" name="email" id="Email" class="form-control" placeholder="Email Address" required="">
				    						</div>
				    					</div>
				    					
				    					<!--<div class="row">-->
             <!--                             <div class="col-sm-12">-->
             <!--                                 <div class="g-recaptcha" data-sitekey="6LeFrVwpAAAAAJMgDSwTiWRuEZ-Aj3kG4AURmrkQ"></div>-->
             <!--                               <br>-->
             <!--                             </div>-->
             <!--                         </div>-->

				    					<div class="row">
				    						<div class="col-sm-12">
				    							<div class="btn__form">
				    								<input type="submit" value="Request a Quote">
				    								<input type="hidden" name="ctry" value="">
                                                    <input type="hidden" name="pc" value="">
                                                    <input type="hidden" name="cip" value="">
                                                    <input type="hidden" name="hiddencapcha" value="">
                                                    <input type="hidden" id="location" name="pageURL" value="https://www.atlanticbookpublishers.com/author-website-design" />
				    							</div>
				    						</div>
				    					</div>

				    				</div>

				    			</form>			    			</div>
			    		</div>

			    	</div>
			    </div>
			  </div>
		    </div>
		</div>
	</section>

<!-- Banner Section End -->


<!-- About Services Section Begin -->
	
	<section class="inner__services__main padding__90">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="inner__services__content">
						<p>An impactful first impression is crucial in the digital marketplace, and our talented author website designers are here to help you make that lasting impression. Showcase your literary works, connect with readers, and create a strong online brand presence with our expertly crafted website designs.  </p>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h2>Stand Out Online with Our Author Website Design Services   </h2>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h3>There Is Always Space for Enhancement and Refinement for Developed Websites</h3>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h6>Explore our comprehensive packages designed to boost your Author Website Design efforts</h6>

						<ul class="services__point">
							<li>Basic Author Branding</li>
							<li>Premium Book Showcase</li>
							<li>Social Media Integration</li>
							<li>SEO Optimization</li>
							<li>Interactive Author Blog</li>
							<li>Website hosting and domain setup</li>
							<li>Newsletter signup and lead magnet</li>
							<li>Customized Author Bio Page</li>
							<li>Reader Reviews Section</li>
							<li>Event Calendar</li>
							<li>Mobile Responsive Design</li>
							<li>Analytics Integration</li>
							<li>24/7 Customer Support</li>


						</ul>

						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:15623421027">+1 562 342 1027</a></li>
		    				</ul>
		    			</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="services__inner__img">
						<img src="assets/images/services-inner-img-24.jpg" class="img-responsive" alt="service">
					</div>
				</div>

			</div>
		</div>

		<div class="vector__about1">
			<img src="assets/images/vector-img-01.webp" class="img-responsive" alt="vector">
		</div>

	</section>

<!-- About Services Section End -->


<!-- CTA Section Begin -->
	
	<section class="cta__sec__main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="cta__content">
						<h2><span>Boost the Significance</span> of Your Online Presence with Our Professional Services.</h2>


						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:15623421027">+1 562 342 1027</a></li>
		    				</ul>
		    			</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<!-- CTA Section End -->


<!-- Process section Begin -->
	
	<section class="process__sec__main padding__90">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="process__rh__con">
						<img src="assets/images/leaf.png" class="img-responsive leaf" alt="Leaf">
						<h2>Process of Author Website Designing</h2>
						<p>Go through the process we use to design your author's website.	</p>

						<img src="assets/images/process-img-15.png" class="img-responsive" alt="Process">

					</div>
				</div>

				<div class="col-sm-6">
					<div class="process__box__main">
						<div class="row">
							<div class="col-sm-6">
								<div class="process__box">
									<span>01</span>
									<h4>Order Placement</h4>
									<p>Kick start the process by completing a concise form on our website. Share pertinent information about your vision, preferences, and requirements. Await a warm welcome from our dedicated managers.</p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>02</span>
									<h4>Research & Outline Draft</h4>
									<p>A designated designer takes charge, delving into comprehensive research to understand your unique authorial identity. Subsequently, they meticulously outline a draft that encapsulates the essence of your literary works and aligns with your brand.</p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>03</span>
									<h4>First Webpage Approval</h4>
									<p>Witness the transformation as our designer crafts the inaugural webpage. Your satisfaction is paramount, so we seek your approval before progressing further. This phase ensures the initial design resonates with your vision.</p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>04</span>
									<h4>Editing & Proofreading</h4>
									<p>Our skilled team scrutinizes the design, focusing on details to ensure flawlessness. Necessary edits are made to refine the visual appeal and functionality of your website. This meticulous step guarantees a polished representation of your brand.</p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>05</span>
									<h4>Final Formatting</h4>
									<p>With your approval, the design undergoes final formatting and structuring. Every element is fine-tuned according to your preferences, creating a cohesive and visually striking digital space that authentically reflects your brand.</p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>06</span>
									<h4>Website Launch</h4>
									<p>The culmination of the process sees the official launch of your website. Seamlessly integrating SEO-rich content, we ensure your digital space is optimized for search engines, aiming to generate high traffic and foster meaningful interactions with your audience.</p>
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<!-- Process section End -->

<!-- Now Offering Section Begin -->
	
	<section class="offering__sec__main padding__90">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="offering__content">
						<h2>Why Global Publishings' Web Designers Stand Out: A Unique Marketplace Experience </h2>



						<p>At Global Publishings, we transcend the conventional approach to author website design. We are not just a company creating websites; we are a dynamic marketplace connecting you with the finest professionals in the publishing domain.    </p>

						<p>At Global Publishings, our commitment is not just to build a website but to match you with the right talent that understands and enhances your unique authorial identity.</p>

						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:15623421027">+1 562 342 1027</a></li>
		    				</ul>
		    			</div>

					</div>
				</div>
				<div class="col-sm-6 p-0">
					<div class="book__section__list book_slider">
						<div class="book__box">
							<img src="assets/images/book-img-01.png" class="img-responsive" alt="Book">
						</div>

						<div class="book__box">
							<img src="assets/images/book-img-02.png" class="img-responsive" alt="Book">
						</div>

						<div class="book__box">
							<img src="assets/images/book-img-03.png" class="img-responsive" alt="Book">
						</div>

						<div class="book__box">
							<img src="assets/images/book-img-04.png" class="img-responsive" alt="Book">
						</div>

						<div class="book__box">
							<img src="assets/images/book-img-05.png" class="img-responsive" alt="Book">
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Now Offering Section End -->

<!-- Review Section Begin -->

<?php include "./components/reviews.php"?>

<!-- Review Section End -->

<?php include "./components/footer.php"?>

</body>
</html>
<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Barnes And Noble Publishing - ABP</title>
  <body>
  <?php include "./components/header.php"?>   
	<section class="banner__sec__main inner__services">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="assets/images/adventure-writing-banner.jpg" class="img-responsive banner__img" alt="Los Angeles">
		      <div class="carousel-caption">
			    <div class="container">
			    	<div class="row align-items-center">
			    		<div class="col-sm-7">
			    			<div class="banner__content text-left">
			    				<!--<h6>Adventure Fiction Writers for Hire</h6>-->
				    			<h1>Create Your Own Books and eBooks on Barnes & Noble Publishing</h1>

				    			<p>It only takes one click to get your book in front of millions of readers on one of the largest internet platforms. The ability of Atlantic Book Publisherss to publish your books on Barnes & Noble is something we are proud of. You can now increase your chances of being seen by the readers you want to reach and engage them with creative, educational, and transformative stories. </p>

				    			<div class="banner__btn">
				    				<ul>
				    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
				    					<li><a href="tel:8776753363">(877) 675-3363</a></li>
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
                                                    <input type="hidden" id="location" name="pageURL" value="https://www.atlanticbookpublishers.com/barnes-and-noble-publishing" />
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
						<p>Atlantic Book Publisherss gives independent writers the tools and resources they need to become well-published on Barnes & Noble, assisting them with their self-publishing efforts. You can publish and directly sell print books and eBooks anywhere in the globe at any time with our quick and simple self-publishing service.</p>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h2>Resources You Need to Publish on Barnes & Noble </h2>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h3>Let Us Handle Your Publication Process And Boost Your Visibility Online And Offline!   </h3>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="inner__services__content">
						<h6>Our in-house publishing packages for Barnes & Noble have been thoughtfully selected to offer an extensive array of publishing services that will ensure your success as an emerging writer. Depending on the services you require, you can potentially receive customized bundles. </h6>

						<ul class="services__point">
							<li>Manuscript Review </li>
                            <li>Grammar and Punctuation Check </li>
                            <li>Spelling Corrections </li>
                            <li>Style Consistency </li>
                            <li>Sentence Structure Improvements </li>
                            <li>Clarity Enhancements </li>
                            <li>Word Choice Refinement </li>
                            <li>Flow and Coherence Adjustments </li>
                            <li>Fact-Checking </li>
                            <li>Chapter Organization </li>
                            <li>Editorial Notes </li>
                            <li>Post-Editing Support </li>


						</ul>

						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:8776753363">(877) 675-3363</a></li>
		    				</ul>
		    			</div>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="services__inner__img">
						<img src="assets/images/services-inner-img-11.jpg" class="img-responsive" alt="service">
					</div>
				</div>

			</div>
		</div>

		<div class="vector__about1">
			<img src="assets/images/vector-img-01.svg" class="img-responsive" alt="vector">
		</div>

	</section>

<!-- About Services Section End -->


<!-- CTA Section Begin -->
	
	<section class="cta__sec__main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="cta__content">
						<h2><span>Nothing Can Stop You from Bringing</span> Your Imaginations to Life as We Let your Stories Be Heard. Contact Us Today for Self-Publishing Details!</h2>


						        
						  



						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:8776753363">(877) 675-3363</a></li>
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
						<h2>Our Process from Draft to Drone</h2>
						<p>We polish your idea through planning, editing, and design in order to capture soaring viewpoints and bring your ideas to life. </p>

						<img src="assets/images/process-img-09.png" class="img-responsive" alt="Process">

					</div>
				</div>

				<div class="col-sm-6">
					<div class="process__box__main">
						<div class="row">
							<div class="col-sm-6">
								<div class="process__box">
									<span>01</span>
									<h4>Proofreading And Editing</h4>
									<p>Get your book edited and polished to make it look polished and incredibly readable. We guide you at any point in the process, whether your book needs proofreading, copyediting, or line editing.  </p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>02</span>
									<h4>2.	Arrangement  </h4>
									<p>To make sure the interior looks tidy and professional; we style your book according to the publishing guidelines of the market you wish to sell it in. </p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>03</span>
									<h4>Illustrations & Cover Design  </h4>
									<p>Our talented and imaginative designers provide eye-catching graphics and book covers that complement your book's theme and improve your narrative.  </p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="process__box">
									<span>04</span>
									<h4>PR & Marketing </h4>
									<p>With the help of ARCs, networking opportunities, and launch-enhancing events, Atlantic Book Publisherss assists you with book marketing, promotion, and launch. </p>
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
						<h2>Publish with Professionals and Passion </h2>

						<p>We give young writers and new voices equal chances and recognition through our Barnes & Noble publishing service. Our team edits book manuscripts, helps authors with the publishing process, and responds to queries right away. Our expert and reasonably priced services relieve the burden of publishing, freeing writers to concentrate on crafting gripping narratives. </p>
						<p>We give stories the ability to reach from your pen to the world. So what are you waiting for, contact us and let us turn your book in to a work of art!   </p>

						<div class="banner__btn btn2">
		    				<ul>
		    					<li><a href="" data-toggle="modal" data-target="#lead_pop">Let's Get Started</a></li>
		    					<li><a href="tel:8776753363">(877) 675-3363</a></li>
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
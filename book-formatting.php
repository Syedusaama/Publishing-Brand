<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Book Formatting Services - Global Publishings</title>
  <body>
  <?php include "./components/header.php"?>    
<!-- Banner Section Begin -->
	
<section class="banner__sec__main inner__services">
    <div id="demo" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/book-formatting-banner.jpg" class="img-responsive banner__img" alt="Los Angeles">
          <div class="carousel-caption">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="banner__content text-left">
                            <!--<h6>Professional Book Formatting Services</h6>-->
                            <h1>Experience the Art of Book Formatting Excellence </h1>

                            <p>At Global Publishings, our book formatting service ensures your manuscript's layout is impeccable. We expertly format text, images, and design elements, providing a visually stunning presentation for your readers </p>

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
                                                <input type="hidden" id="location" name="pageURL" value="https://www.atlanticbookpublishers.com/book-formatting" />
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
                    <p>Unlock the visual allure of your manuscript with Global Publishings' expert book formatting service. We meticulously organize text, enhance visual elements, and optimize layout for a seamless reading experience across devices such as Kindle, Nook, and other e-book platforms. Our commitment is to transform your written words into a visually captivating literary masterpiece that engages and delights readers.  </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h2>Find The Perfect Layout For Your Book With Global Publishings </h2>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h3>Expert Book Formatting – Where Words Find Their Perfect Layout</h3>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h6>Step into the world of refined presentation with our Expert Book Formatting Package at Global Publishings. Elevate your book's appeal and captivate readers with our comprehensive formatting solutions</h6>

                    <ul class="services__point">
                        <li>Professional layout design</li>
                        <li>Font selection and styling</li>
                        <li>Consistent chapter formatting</li>
                        <li>Header and footer customization</li>
                        <li>Image placement</li>
                        <li>TOC - Table of content creation</li>
                        <li>Front and back matter formatting</li>
                        <li>Integration of special formatting elements</li>
                        <li>Consistent styling for headings and subheadings</li>
                        <li>Clean and uniform paragraph indentations</li>
                        <li>Embedding fonts for uniformity</li>
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
                    <img src="assets/images/services-inner-img-20.jpg" class="img-responsive" alt="service">
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
                    <h2><span>Ready to give your</span> Ready to give your words the perfect stage? Contact us today for expert book formatting.</h2>
                    
                    

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
                    <h2>A Step-by-Step Guide to Formatting Your Manuscript</h2>
                    <p>Dive into the art of visual storytelling with Global Publishings' step-by-step formatting process. From layout design to final touches, our guide ensures your manuscript transforms into a visually stunning masterpiece, captivating readers with its polished presentation.</p>

                    <img src="assets/images/process-img-13.png" class="img-responsive" alt="Process">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="process__box__main">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>01</span>
                                <h4>Initial Assessment</h4>
                                <p>Embark on our formatting journey with a comprehensive evaluation of your manuscript. Our experts carefully examine the unique characteristics of your content, identifying specific formatting requirements and visual potential.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>02</span>
                                <h4>Layout Design</h4>
                                <p>Enter the design phase, where our skilled team crafts a professional and visually appealing layout. This includes thoughtful consideration of fonts, spacing, and design elements to ensure your manuscript presents a polished aesthetic.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>03</span>
                                <h4>Element Integration</h4>
                                <p>Seamless integration of various elements, such as images, tables, and special formatting elements, is a crucial step. This ensures these components enhance the overall visual narrative while maintaining harmony within the layout.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>04</span>
                                <h4>Consistency Check</h4>
                                <p>Verify the uniformity of chapter formatting, font styles, and spacing throughout the manuscript. This meticulous step guarantees a cohesive and professional look, contributing to an immersive reading experience.</p>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>05</span>
                                <h4>Quality Assurance</h4>
                                <p>Conduct a thorough quality assurance check to identify and rectify any formatting discrepancies. This step is essential to ensure the final presentation meets the highest standards for both print and e-book formats.</p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>06</span>
                                <h4>Author Review: </h4>
                                <p>Engage in a collaborative process with authors, allowing them to review the formatted manuscript. This feedback loop ensures that the visual representation aligns seamlessly with the author's vision and preferences.</p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>07</span>
                                <h4>Final Adjustments</h4>
                                <p>Implement any necessary revisions based on author feedback. This collaborative approach ensures that the final layout not only meets but exceeds the author's expectations, creating a visually captivating presentation.</p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>08</span>
                                <h4>Delivery of Formatted Manuscript</h4>
                                <p>Conclude the process with the delivery of the finalized, professionally formatted manuscript. This polished product is now ready for publication, visually elevating the impact of your written words and captivating readers from the very first page.</p>
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
                    <h2>Why Choose Our Book Formatting Service? </h2>



                    <p>Choose Global Publishings for a book formatting service that transcends standard presentation. Our dedicated team combines artistic flair with technical precision to transform your manuscript into a visually stunning masterpiece. From professional layout design and consistent formatting to seamless integration of images and special elements, we prioritize excellence in every detail. What sets us apart is our commitment to collaboration, involving authors in the process and ensuring the final product aligns perfectly with their vision.   </p>

                    <p>Our quality assurance checks guarantee a flawless presentation for both print and e-book formats. Entrust us with your manuscript, and witness how our expertise in book formatting elevates your written words, creating a captivating reading experience that engages and delights readers. </p>

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
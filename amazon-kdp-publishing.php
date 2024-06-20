
<!DOCTYPE html>
<html lang="en-US">
<?php include "./components/head.php"?>
<title>Amazon KDP Publishing - ABP</title>

  <body>
  <?php include "./components/header.php"?>
  <!-- Banner Section Begin -->
	
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
                            <h1>Amazon Publishing Services by Global Publishingss</h1>

                            <p>For many writers, it's an "all or nothing" situation when it comes to publishing on the largest online retailer in the world. However, by using Amazon's top marketing tools, such as Amazon KDP (Kindle Direct Publishing) Select, you may take advantage of Global Publishings's self-publishing possibilities and still benefit from our extensive worldwide distribution. This suggests that you can maximize your book's exposure on Amazon and expand its readership globally by utilizing Global Publishings's extensive distribution network. </p>

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
                                                <input type="hidden" id="location" name="pageURL" value="https://www.atlanticbookpublishers.com/amazon-kdp-publishing" />
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
                    <p>Our team provides expert assistance to assist you in managing the book publication process on Amazon. Everything is taken care of by us, including quality formatting, printing, distribution, and book cover design. </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h2>Customized Book Publishing Package for Amazon </h2>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h3>Get The Creative Control You Deserve With our Amazon Book Publishing Services!  </h3>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inner__services__content">
                    <h6>Embark on an exhilarating journey with our Adventure Writing Package, crafted to transform your ideas into gripping narratives. From plot inception to publication, we navigate uncharted territories together, ensuring your adventure story captivates readers and leaves an indelible mark on literary landscapes.</h6>

                    <ul class="services__point">
                        <li>Structural Editing</li>
                        <li>High-end Proofreading </li>
                        <li>Bespoke Cover Design </li>
                        <li>Cover and Internal Formatting/Typesetting </li>
                        <li>KDP Set-Up Service </li>
                        <li>Amazon Analysis & Assistance </li>
                        <li>Marketing & Aftercare Service </li>
                        <li>Manuscript Review </li>
                        <li>Grammar and Punctuation Check </li>
                        <li>Spelling Corrections </li>
                        <li>Style Consistency </li>


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
                    <img src="assets/images/services-inner-img-10.jpg" class="img-responsive" alt="service">
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
                    <h2><span>We Make Sure Everything Feels</span> Well Handled, From Thrilling Plot Points To Suspenseful Denouements, So Every Reader Can Find Their Ideal Book.</h2>

                      
                          
                      



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
                    <h2>Skilled Services for Successful Self-Publishing on Amazon</h2>
                    <p>We offer stand-alone services to writers who want to self-publish through KDP, so that your book has expert support to make it stand out amid the millions of other books on Amazon. Being a top author on Amazon can change your life, as it is currently the largest bookseller in the world, thus it is important that your book is at the top of its game. </p>

                    <img src="assets/images/process-img-09.png" class="img-responsive" alt="Process">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="process__box__main">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>01</span>
                                <h4>Initial Consultation</h4>
                                <p>We begin with a thorough conversation to ascertain your objectives, vision, and particular book requirements. This helps in customizing our offerings to optimally assist your journey. </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>02</span>
                                <h4>Manuscript Evaluation</h4>
                                <p>After getting in touch, we evaluate your manuscript to identify its advantages, disadvantages, and possible areas for development.  </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>03</span>
                                <h4>Formatting and Proofreading</h4>
                                <p>Your work is carefully checked by our team of competent editors to ensure consistency and correct grammar. In accordance with industry standards, we prepare your book for both print and digital media.  </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>04</span>
                                <h4>Book Cover Design</h4>
                                <p>Our skilled designers craft captivating book covers that encapsulate your narrative and appeal to your intended readership. </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>05</span>
                                <h4>Book Publishing</h4>
                                <p>We help you publish your work on Amazon KDP, guaranteeing a smooth transition from manuscript to published book. We polish your manuscript and create the cover.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="process__box">
                                <span>06</span>
                                <h4>Book Rewards</h4>
                                <p>You will receive rewards for each copy sold as soon as your book is available on Amazon. We give you clear reporting and assistance so you can monitor the sales of your book. </p>
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
                    <h2>Get Readers Hooked to your Book!  </h2>

                    <p>For expert self-publishing services, including as formatting, editing, proofreading, cover design, KDP setup, Amazon analysis, and marketing assistance, pick us. Our all-inclusive bundle guarantees exposure on KDP, a distinctive author style, and faultless book reading. Publishing is made easier with our KDP Set-Up Service, and exposure is guaranteed with Amazon Analysis & Assistance. Every step is supported by our marketing and aftercare service.    </p>

                    <p>Choose us and we will help you reach millions of readers in no time. </p>

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
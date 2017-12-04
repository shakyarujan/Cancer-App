@extends('web/include/header')

<div class="inner-banner">
    	<div class="container">
        	<h2>हामीलाई सम्पर्क गर्नुहोस</h2>
        </div>
    </div>
    <!--CONTENT START-->
    <div class="content">
    	<!--CONTACT SECTION START-->
    	<section>
        	<div class="container">
            	<!--HEADER SECTION START-->
            	<div class="section-header">
                	<h2>यदि तपाइँसँग कुनै प्रश्न छ हामीलाई सम्पर्क गर्नुहोस् !</h2>
                </div>
                <!--HEADER SECTION END-->
                <div class="row">
                	<div class="col-md-4 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-map-marker"></i>
                        	<h2>ठेगाना</h2>
                            <p>शंखमुल टावर <br/> शंखमुल मार्ग, काठमाडौं</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-envelope-o"></i>
                        	<h2>ई-मेल</h2>
                            <p><a href="mailto:example@example.com">example@example.com</a></p>
                            <p><a href="mailto:example@example.com">example@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-phone"></i>
                        	<h2>फोन नम्बर</h2>
                            <p>+977 98********</p>
                            <p>+977 98********</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CONTACT SECTION END-->
        <!--LOCATION MAP START-->
        <section class="kode-map">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1485.4776817832744!2d85.33220297846975!3d27.683883351950808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bfc1ca5eb9%3A0xf60e5906ec7a25d0!2sSHANKHAMOOL+TOWER!5e0!3m2!1sen!2snp!4v1511039106975" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <!--LOCATION MAP END-->
        <section class="kode-contact">
        	<div class="container">
            	<div class="section-header">
                	<h2>हामीलाई पत्र पठाउनुहोस्</h2>
                </div>
				<form method="post" class="comments-form" id="contactform">
                <div class="row">
                	<div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-user"></i>
                        	<input id="name" name="name" class="required" placeholder="नाम *">
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-envelope-o"></i>
                        	<input id="email" name="email" class="required email" placeholder="इमेल *">
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-pencil-square-o"></i>
                        	<input name="address" id="address" placeholder="ठेगाना:">
                        </div>
                    </div>
					<div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-phone"></i>
                        	<input name="phone" id="phone" placeholder="फोन नम्बर:">
                        </div>
                    </div>
                    <div class="col-md-12">
                    	<div class="input-container">
                        	<textarea name="message" id="message" placeholder="तपाईंको सन्देश थप गर्नुहोस्"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
						<input class="btn-filled" type="submit" value="Submit Comments">                    	
                    </div>
                </div>
				</form>
            </div>
        </section>
    </div>


@extends('web/include/footer')

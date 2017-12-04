@extends('admin/include/header')

<!--HEADER END-->
    <div class="inner-banner">
    	<div class="container">
        	<h2>Contact Us </h2>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
    </div>
    <!--CONTENT START-->
    <div class="content">
    	<!--CONTACT SECTION START-->
    	<section>
        	<div class="container">
            	<!--HEADER SECTION START-->
            	<div class="section-header">
                	<h2>If you have any question contact us !</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur libero nisi</p>
                </div>
                <!--HEADER SECTION END-->
                <div class="row">
                	<div class="col-md-3 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-map-marker"></i>
                        	<h2>Address</h2>
                            <p>1234 South Cicero Avenue Chicago, IL 60638, United States</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-envelope-o"></i>
                        	<h2>E-mail</h2>
                            <p><a href="mailto:info@kodeforest.com">info@kodeforest.com</a></p>
                            <p><a href="mailto:info@kodeforest.com">info@kodeforest.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-phone"></i>
                        	<h2>Phone</h2>
                            <p>Reservation: +1 123-654-7890</p>
                            <p>Contact: +1 123-456-7890</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    	<div class="kode-contact-icon">
                        	<i class="fa fa-clock-o"></i>
                        	<h2>Working hours</h2>
                            <p>Mon - Thu: 11:00 am - 11:00 pm</p>
                            <p>Fri - Sat: 11:00 am - 1:00 am</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CONTACT SECTION END-->
        <!--LOCATION MAP START-->
        <section class="kode-map">
        	<div id="map_list"></div>
        </section>
        <!--LOCATION MAP END-->
        <section class="kode-contact">
        	<div class="container">
            	<div class="section-header">
                	<h2>Send us a mail</h2>
                </div>
				<form method="post" class="comments-form" id="contactform">
                <div class="row">
                	<div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-user"></i>
                        	<input id="name" name="name" class="required" placeholder="Name *">
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-envelope-o"></i>
                        	<input id="email" name="email" class="required email" placeholder="Email *">
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-pencil-square-o"></i>
                        	<input name="address" id="address" placeholder="Address:">
                        </div>
                    </div>
					<div class="col-md-6">
                    	<div class="input-container">
                        	<i class="fa fa-phone"></i>
                        	<input name="phone" id="phone" placeholder="phone:">
                        </div>
                    </div>
                    <div class="col-md-12">
                    	<div class="input-container">
                        	<textarea name="message" id="message" placeholder="add your message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 k_capcha_image_frame">
                    	<div class="input-container">
							<i class="fa fa-lock"></i>
							<input class="verify" type="text" id="verify" name="verify" placeholder="paste below code here"/>
							<iframe src="inc/capcha_page.html" height="29" width="80" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" class="capcha_image_frame" name="capcha_image_frame"></iframe>
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
    <!--CONTENT END-->
    @extends('admin/include/footer')
    

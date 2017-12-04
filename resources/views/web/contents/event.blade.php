@extends('admin/include/header')

<!-- container-->
	<div class="inner-banner">
    	<div class="container">
        	<h2>Event list</h2>
        </div>
    </div>
    <!--CONTENT START-->
    <div class="content">
    	<div class="container">
        	<div class="content-cover">
            	<!--CAUSE LIST VIEW START-->
                <div class="kode-cause-list kode-list-view">
                    <div class="kode-thumb">
                        <a href="#"><img src="images/cause-listing.jpg" alt=""></a>
                    </div>
                    <div class="kode-cause-content">
                        <div class="kode-text">
                            <h2>WHEN THE BREAST CANCER WENT BEYOND THE BREAST</h2>
                            <!--COUSES META START-->
                            <div class="kode-cause-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                </ul>
                            </div>
                            <!--COUSES META END-->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
                        </div>
                    </div>
                </div>
                <!--CAUSE LIST VIEW END-->
                <!--PAGINATION START-->
                <nav>
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!--PAGINATION END-->
            </div>
        </div>
    </div>
    <!--CONTENT END-->

    @extends('admin/include/footer')
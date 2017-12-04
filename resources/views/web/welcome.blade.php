<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BCAA</title>
<link rel="shortcut icon" href="{!! asset('front/images/favicon.png') !!}" type="image/x-icon">
<!-- CUSTOM STYLE -->
<link href="{!! asset('front/style.css') !!}" rel="stylesheet">
<!-- THEME TYPO -->
<link href="{!! asset('front/css/themetypo.css') !!}" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="{!! asset('front/css/bootstrap.css') !!}" rel="stylesheet">
<!-- COLOR FILE -->
<link href="{!! asset('front/css/color.css') !!}" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="{!! asset('front/css/font-awesome.min.css') !!}" rel="stylesheet">
<!-- BX SLIDER -->
<link href="{!! asset('front/css/jquery.bxslider.css') !!}" rel="stylesheet">
<!-- BX SLIDER -->

<link href="{!! asset('front/css/bootstrap-slider.css') !!}" rel="stylesheet">
<link href="{!! asset('front/js/dl-menu/component.css') !!}" rel="stylesheet">
<link href="{!! asset('front/css/responsive.css') !!}" rel="stylesheet">
<link href="{!! asset('front/css/widget.css') !!}" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    <header class="header-style-3">
        <!--NAV CONTAINER START-->
        <div class="nav-container">
            <div class="container">
                <!--LOGO START-->
              <!--   <div class="logo">
                    <img src="" alt="logo">
                </div> -->

                <!--LOGOEND-->
                <!--NAVIGATION CONTENT START-->
                <div class="nav-content">
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul>
                            <li class="menu-item kode-parent-menu"><a href="{{url('/home')}}">होम</a></li>
                            <li><a href="{{url('/article/कारणहरू र लक्षणहरू')}}">कारणहरू र लक्षणहरू</a>
                                <ul>
                                    <li><a href="{{url('/article/जोखिम-कारकहरू')}}">कारणहरू</a></li>
                                    <li><a href="{{url('/article/जोखिम-कारकहरू')}}">लक्षणहरू</a></li>
                                </ul>  
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="latest-news.html">रोकथाम</a>
                            <ul>
                                <li><a href="">जीवनशैली परिमार्जन </a></li>
                                <li><a href="#">रोकथाम</a>
                                    <ul>
                                        <li><a href="{{url('/article/स्तन-आत्म-परीक्षा')}}">स्तन आत्म परीक्षा </a></li>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                    </ul>
                                </li>
                            </ul> 
                    </div>
                    <!--NAVIGATION START-->
                    <div class="navigation">
                        <ul>
                            <li class="menu-item kode-parent-menu"><a href="{{url('/home')}}">होम</a></li>
                            <li><a href="#">कारणहरू र लक्षणहरू</a>
                                <ul>
                                    <li><a href="{{url('/article/जोखिम-कारकहरू')}}">कारणहरू</a></li>
                                    <li><a href="{{url('/article/लक्षणहरू')}}">लक्षणहरू</a></li>
                                </ul>  
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">रोकथाम</a>
                                <ul>
                                    <li><a href="{{url('/article/जीवनशैली-परिमार्जन')}}">जीवनशैली परिमार्जन </a></li>
                                    <li><a href="#">रोकथाम</a>
                                        <ul>
                                            <li><a href="{{url('/article/स्तन-आत्म-परीक्षा')}}">स्तन आत्म परीक्षा </a></li>
                                            <li><a href="{{url('/article/क्लिनिकल-स्तन-परीक्षा')}}">क्लिनिकल स्तन परीक्षा</a></li>
                                            <li><a href="{{url('/article/म्यामोग्रराम')}}">म्यामोग्रराम</a></li>
                                        </ul>
                                    </li>
                                </ul> 
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">समाचार</a>
                                <ul>
                                    <li><a href="{{url('/events/अन्तर्राष्ट्रिय-क्यान्सर-सम्मेलन-बैठक')}}">अन्तर्राष्ट्रिय क्यान्सर सम्मेलन बैठक</a></li>
                                    <li><a href="{{url('/events/विश्व-क्यान्सर-दिवस-समारोह-2017')}}">विश्व क्यान्सर दिवस समारोह 2017</a></li>
                                    <li><a href="{{url('/events/स्तन-र-गर्भाशय-क्यान्सरमा-जागरूकता')}}">स्तन र गर्भाशय क्यान्सरमा जागरूकता</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">कार्यक्रम</a>
                                <ul>
                                    <li><a href="{{url('/news/स्वस्थ-जीवनशैलीको-लागि-महिलाहरु')}}">स्वस्थ जीवनशैलीको लागि महिलाहरु</a></li>
                                    <li><a href="{{url('/news/एक-प्रतिशत-पुरुषमा-स्तन-क्यान्सर')}}">एक प्रतिशत पुरुषमा स्तन क्यान्सर</a></li>
                                    <li><a href="{{url('/news/स्तनको-क्यान्सर-वाइकथोन')}}">स्तनको क्यान्सर वाइकथोन</a></li>
                                </ul>
                            </li>

                            <li class="menu-item kode-parent-menu"><a target="blank" href="{{url('https://bcancer.000webhostapp.com')}}">ब्लगहरू</a></li>
                            <li><a href="{{url('/contact')}}">सम्पर्क</a></li>
                             <li>
                                <a href="#" class="btn-filled btn-sm">सहयोग गर्नुहोस्</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--NAVIGATION END-->
                    <!-- <div class="kf-nav-options">
                        <ul>
                            <li><a href="#"><i class="fa fa-bars"></i></a></li>
                        </ul>
                    </div> -->
                </div>
                <!--NAVIGATION CONTENT END-->
            </div>
        </div>
        <!--NAV CONTAINER END-->
    </header>
    <!--HEADER END-->
    <div class="main-banner">
        <ul class="bxslider">
            <li>
                <img src="{!! asset('front/images/banner-1.png') !!}" alt="">
                <div class="caption">
                    <h2>CAN WE BREAK DOWN CANCER?</h2>
                    <h3>for those who need it!</h3>
                    <a href="#" class="donate">Donate Now</a>
                </div>
            </li>
            <li>
                <img src="{!! asset('front/images/banner-2.png') !!}" alt="">
                <div class="caption">
                    <h2>Women Empowerment </h2>
                    <h3>for those who need it!</h3>
                    <a href="#" class="donate">Donate Now</a>
                </div>
            </li>
            <li>
                <img src="{!! asset('front/images/banner-3.png') !!}" alt="">
                <div class="caption">
                    <h2>Women Science & Technology</h2>
                    <h3>for those who need it!</h3>
                    <a href="#" class="donate">Donate Now</a>
                </div>
            </li>
        </ul>
    </div>
    <!--CONTENT START-->
    <div class="content">
        <!-- about -->
        <section class="causes-section overlay">
            <div class="container">
                <!--HEADER SECTION START-->
                <div class="heading heading-4">
                    <h2 style="color:#fff">{{$article->title}}</h2>
                </div>
                <!--HEADER SECTION END-->
                <div class=" kode-cause">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{!! asset('front/images/cause.jpg') !!}" alt="">
                        </div>
                        <div class="col-md-6">
                            {!!$article->content!!}
                                     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CAUSES SECTION END-->
        <!--SERVICES SECTION START-->
        <section class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kf-services">
                            <i class="fa fa-heart-o"></i>
                            <div class="kf-text">
                                <h2>जोखिम कारकहरू </h2>
                                <p>हामी लाई के थाहा छ कि स्तन क्यान्सर सधैँ सेलको डीएनए को क्षतिले गर्दा हुन्छ</p>
                                <a href="{{url('/article/जोखिम-कारकहरू')}}" class="read-more">थप पढ्नुहोस्</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kf-services">
                            <i class="fa fa-stethoscope"></i>
                            <div class="kf-text">
                                <h2>लक्षणहरू </h2>
                                <p>क्यान्सर रोगीहरू कहिलेकाहीँ राम्रो हेरविचार प्राप्त गर्न घरबाट बाहिर यात्रा</p>
                                <a href="{{url('/article/लक्षणहरू')}}" class="read-more">थप पढ्नुहोस्</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kf-services">
                            <i class="fa fa-tint"></i>
                            <div class="kf-text">
                                <h2>जोगिने उपायहरू</h2>
                                <p>स्तन क्यान्सरबाट बच्न धेरै तरिकाहरू छन्।</p>
                                <a href="{{url('/article/जोगिने-उपायहरू')}}" class="read-more">थप पढ्नुहोस्</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kf-services">
                            <i class="fa fa-female"></i>
                            <div class="kf-text">
                                <h2>स्तन स्क्रीनिंग विधिहरू  </h2>
                                <p>स्तन स्क्रीनिंग विधिहरूको लागि विभिन्न तरिकाहरू छन्</p>
                                <a href="{{url('/article/स्तन-स्क्रीनिंग-विधिहरू')}}" class="read-more">थप पढ्नुहोस्</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SERVICES SECTION END-->
        <!--CAUSES SECTION START-->
        <section class="causes-section overlay">
            <div class="container">
                <!--HEADER SECTION START-->
                <div class="heading heading-4">
                    <p style="color:#fff">स्तन क्यान्सरको जागरूकताबारे उजुरी</p>
                    <h2 style="color:#fff">स्तन क्यान्सरसँग लड्न मद्दत गर्नुहोस्</h2>
                </div>
                <!--HEADER SECTION END-->
                <div class=" kode-cause">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{!! asset('front/images/cause.jpg') !!}" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2>स्तन क्यान्सरसँग लड्न मद्दत गर्नुहोस्</h2>
                            <p>नेपालमा धेरै महिलाहरू स्तन क्यान्सरबाट ग्रस्त छन्। हामी सबैलाई भ्रमण गरेर उनीहरूलाई मद्दत गर्न त सक्दैनौं तर बटनको एक एकल प्रेसले हामी तिनीहरूलाई मद्दत गर्न सक्दैनौं। मद्दत गर्नुहोस् र स्तन क्यान्सरको पीडितहरूलाई विभिन्न सेवाहरू प्रदान गर्न संगठनहरूलाई सहयोग गर्नुहोस्।</p><br><br>
                            <!--RANGE SLIDER START-->
                            <div class="kode-range">
                                न्यूनतम: $ <span class="range-slider">500</span>
                                <input class="range" type="text" data-slider-min="0" data-slider-max="2000" data-slider-step="1" data-slider-value="500"/&t
<span id="ex6CurrentSliderValLabel"></span>
                            </div>
                            <!--RANGE SLIDER END-->
                            <!--DONATE TEXT START-->
                            <div class="donate-text">
                                <p>हामी तपाईंलाई मदत गर्न सङ्कलन गर्छौं</p>
                                <a href="#" class="btn-filled">Donate Now</a>
                            </div>               
                            <!--DONATE TEXT END-->             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CAUSES SECTION END-->
        <!--EVENTS SECTION START-->
        <section class="white-bg">
            <div class="container">
                <!--HEADER SECTION START-->
                <div class="heading heading-4">
                    <p style="color:#333">सबै महिलाहरु को लागि ठूलो क्यान्सरको अहंकार</p>
                    <h2 style="color:#333">नवीनतम समाचार</h2>
                </div>
                <!--HEADER SECTION END-->
                <div class="row">
                    @foreach($news as $newz)
                    <div class="col-md-4">
                        <div class="kode-event-list-2">
                            <div class="kode-thumb">
                                <a href="#"><img alt="" src="{{url('/images/news/'.$newz->image.'')}}"></a>
                            </div>
                            <div class="kode-text">
                                <h4 style="color: #CC3367;">{{$newz->title}}</h4>
                                <p class="title">Wednesday Januaur 19th, 2015</p>
                                <a class="btn-filled" href="{{url('/news/'.$newz->slug.'')}}">Read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>  
        </section>  
        
        <!--EVENTS SECTION START-->
        <section class="white-bg">
            <div class="container">
                <!--HEADER SECTION START-->
                <div class="heading heading-4">
                    <p style="color:#333">सबै महिलाहरु को लागि ठूलो क्यान्सरको अहंकार</p>
                    <h2 style="color:#333">नवीनतम कार्यक्रमहरू</h2>
                </div>
                <!--HEADER SECTION END-->
                <div class="row">
                    @foreach($events as $event)
                    <div class="col-md-4">
                        <div class="kode-event-list">
                            <img src="{{url('/images/events/'.$event->image.'')}}" alt="">
                            <div class="kode-caption">
                                <h3 style="color:#eee">{{$event->title}}</h3>
                                <p>{{$event->st_date}}</p>
                                <a href="{{url('/events/'.$event->slug.'')}}" class="btn-borderd">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--EVENTS SECTION END-->
   
        <!--BLOG LISTING SECTION START-->
        <!-- <section>
            <div class="container">
                <div class="heading heading-4">
                    <p style="color:#333">सबै महिलाहरु को लागि ठूलो क्यान्सरको अहंकार</p>
                    <h2 style="color:#333">Our Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="kode-blog-list">
                            <div class="kode-thumb">
                                <a href="#"><img src="images/blog1.png" alt=""></a>
                            </div>
                            <div class="kode-text">
                                <div class="kode-avatar">
                                    <a href="#"><img src="images/avatar.png" alt=""></a>
                                </div>
                                <h2>12th March 2015</h2>
                                <p>Posted By: Paige in Blog </p>
                                <h4>Recent developments in breast cancer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kode-blog-list">
                            <div class="kode-thumb">
                                <a href="#"><img src="images/blog2.png" alt=""></a>
                            </div>
                            <div class="kode-text">
                                <div class="kode-avatar">
                                    <a href="#"><img src="images/avatar.png" alt=""></a>
                                </div>
                                <h2>12th March 2015</h2>
                                <p>Posted By: Paige in Blog </p>
                                <h4>Living Beyond Breast Cancer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kode-blog-list">
                            <div class="kode-thumb">
                                <a href="#"><img src="images/blog3.png" alt=""></a>
                            </div>
                            <div class="kode-text">
                                <div class="kode-avatar">
                                    <a href="#"><img src="images/avatar.png" alt=""></a>
                                </div>
                                <h2>12th March 2015</h2>
                                <p>Posted By: Paige in Blog </p>
                                <h4>How I’m Getting Even With Stage 4</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- the video part-->
    <section class="white-bg">
        <div class="container">
            <div class="list-grid">
                <div class="video-back">
                    <div class="container"> 
                        <div class="row">
                            <div class="heading heading-4">
                                <p style="color:#333">सबै महिलाहरु को लागि ठूलो क्यान्सरको अहंकार</p>
                                <h2 style="color:#333">भिडियो मार्फत समाधान गर्नुहोस्</h2>
                            </div>

                            @foreach($galleries as $vid)
                            <div class="col-md-4">
                                {!!$vid->content!!}
                                <p class="text-center">
                                    {{$vid->title}}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of video -->    
    </div>
    <!--CONTENT END-->
    <!--COPYRIGHTS START-->
    <div class="copyrights">
        <div class="container">
            <p>©2017 BCAA, Design by kodeforest</p>
            <div class="footer-nav">
                <ul>
                    <li>सोशल मिडिया खाताहरूमा हामीलाई पछ्याउनुहोस्: </li>
                    <li><a href="#" target="_blank"><div class="social fa fa-facebook"></div></a></li>
                    <li><a href="#" target="_blank"><div class="social fa fa-twitter"></div></a></li>
                    <li><a href="#" target="_blank"><div class="social fa fa-google-plus"></div></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--COPYRIGHTS END-->
</div>
<!--WRAPPER END-->

<!-- tawk -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a10f434bb0c3f433d4ca00b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{!! asset('front/js/jquery.min.js') !!}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{!! asset('front/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('front/js/jquery.bxslider.min.js') !!}"></script>
<script src="{!! asset('front/js/bootstrap-slider.js') !!}"></script>
<!-- <script src="{!! asset('front/js/waypoints.min.js') !!}"></script>  -->
<script src="{!! asset('front/js/jquery.counterup.min.js') !!}"></script> 
<script src="{!! asset('front/js/bg-moving.js') !!}"></script> 
<script src="{!! asset('front/js/dl-menu/modernizr.custom.js') !!}"></script> 
<script src="{!! asset('front/js/dl-menu/jquery.dlmenu.js') !!}"></script> 
<script src="{!! asset('front/js/functions.js') !!}"></script>
</body>

<!-- Mirrored from kodeforest.com/html/feminist/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 18:26:27 GMT -->
</html>
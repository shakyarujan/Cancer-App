<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BCAA</title>
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
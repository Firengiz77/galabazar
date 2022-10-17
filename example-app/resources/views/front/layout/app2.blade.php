<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RetaGroup | @yield('title')</title>
<!-- Stylesheets -->
<link href="{{asset('/front/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('/front/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('/front/css/style.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('/front/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('/front/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{asset('/front/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="link-nav clearfix">
                        	<li><a href="#"><span class="icon flaticon-headphones"></span> {{$contact->tel}}</a></li>
                            <li><a href="#"><span class="icon flaticon-interface"></span>{{$contact->email}}</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
               
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('index')}}"><img src="{{asset('/front/images/logo.png')}}" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                           <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                @if(Route::is('index') )
                                    <li class="current"><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                               @else
                               <li><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                               @endif
                                  
                                    @if(Route::is('about') )
                                    <li class="current"><a href="{{route('about')}}">{{__('static.haqqimizda')}}</a>  </li>
                                @else
                                <li ><a href="{{route('about')}}">{{__('static.haqqimizda')}}</a>  </li>
                                @endif
                                    @if(Route::is('gallery') )
                                  
                                    <li class="current" ><a href="{{route('gallery')}}">{{__('static.qaleriya')}}</a> </li>
                                    @else
                                    <li ><a href="{{route('gallery')}}">{{__('static.qaleriya')}}</a> </li>
                                    @endif

                                    @if(Route::is('shop') || Route::is('shop_single')  || Route::is('allproduct') )
                                    <li class="current dropdown"><a href="{{route('allproduct')}}">{{__('static.mehsullar')}}</a>
                                        <ul>
                                           
                                      @foreach($mehsullar2 as $m)
                                    
                                            <li ><a href="{{route('shop',['id' => $m->id])}}">{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}</a>
                                            
                                            </li>
                                         
                                       @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li class="dropdown"><a href="{{route('allproduct')}}">{{__('static.mehsullar')}}</a>
                                        <ul>
                                           
                                      @foreach($mehsullar2 as $m)
                                    
                                            <li ><a href="{{route('shop' ,['id' => $m->id])}}">{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}</a>
                                                
                                            </li>
                                         
                                       @endforeach
                                        </ul>
                                    </li>
                                   @endif

                                    @if(Route::is('contact') )
                                    <li class="current" ><a href="{{route('contact')}}">{{__('static.əlaqə1')}}</a></li>
                                    @else
                                    <li  ><a href="{{route('contact')}}">{{__('static.əlaqə1')}}</a></li>
                                    @endif

                                    <li id="duzxett"> | </li>
                                    <li class="dropdown" style="font-weight:800"> <a href="">
                                            @if(Config::get('app.locale') === 'az')
                                        AZ
                                        @elseif(Config::get('app.locale') === 'en')
                                       EN
                                        @else 
                                       RU
                                        @endif
                                        </a>
                                        <ul  id="langlar">
                                            <li id="langlar" ><a href="/" @if(App::isLocale('az')) class="active-link"  @endif>AZ</a></li>
                                            <li  id="langlar" ><a href="/en" @if(App::isLocale('en')) class="active-link"  @endif>EN</a></li>
                                            <li id="langlar" ><a href="/ru" @if(App::isLocale('ru')) class="active-link"  @endif>RU</a></li>
                                       </ul>
                                    </li>
                                 </ul>

                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                       
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    

    @yield('container2')


    
    <!--Main Footer-->
    <footer class="main-footer footer-style-two">
    	<!--footer upper-->
    	<div class="footer-upper">
        	<div class="auto-container">
                <div class="row clearfix">
                
                	<!--big column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="widget-content">
                                    	<div class="footer-logo"><a href="{{route('index')}}"><img src="{{asset('/front/images/logo-3.png')}}" alt=""></a></div>
                                        <div class="text">   {{__('static.text2')}}</div>
                                        <ul class="social-icon-one">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>{{__('static.information')}}</h2>
                                    <div class="widget-content">
                                    	<ul class="list">
                                           
                                        <li><a href="{{route('index')}}">{{__('static.əsas')}} </a></li>
                                        	<li><a href="{{route('about')}}">{{__('static.haqqimizda')}}</a></li>
                                            <li><a href="{{route('gallery')}}">{{__('static.qaleriya')}}</a></li>
                                            <li><a href="{{route('allproduct')}}">{{__('static.mehsullar')}}</a></li>
                                            <li><a href="{{route('contact')}}">{{__('static.əlaqə1')}}</a></li>
                                          
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                        	

							
                            <!--Footer Column-->
                        	<div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            	<div class="footer-widget contact-widget">
                                	<h2>{{__('static.mehsullar')}}</h2>
                                    <div class="widget-content">

                                        <ul class="contact-info">
                                            @foreach($mehsullar11 as $m11)
                                            <li style="color: #aaaaaa"><a style="color: #aaaaaa"  href="{{route('shop',['id' => $m11->id])}}">{{$m11->getTranslatedAttribute('name', App::getLocale(), 'az')}}</a>
                                         @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                                <!--Footer Column-->
                        	<div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            	<div class="footer-widget contact-widget">
                                	<h2>{{__('static.əlaqə1')}}</h2>
                                    <div class="widget-content">

                                        <ul class="contact-info">
                                        	<li><span>{{__('static.adress')}}</span> {{$contact->adress}}</li>
                                            <li><span>{{__('static.əlaqə')}}</span> {{$contact->tel}}</li>
                                            <li><span>{{__('static.mail')}}</span> {{$contact->email}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>





                        </div>
					</div>
                </div>
            </div>
        </div>

        

           <!--End Footer Upper-->
        
        <!--footer bottom-->
        <div class="footer-bottom">
        	<div class="auto-container" style="display:flex" id="margin2">
          
            <div class="copyright" >&copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> {{__('static.allright')}} &nbsp; 

                <span id="margin">  Site By <img src="{{asset('/front/images/jedai.png')}}" alt="alt" width="49px">    </span> 
     
            </div>
        </div>
        <!--End Footer Bottom-->
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="{{asset('/front/js/jquery.js')}}"></script> 
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('/front/js/revolution.min.js')}}"></script>
<script src="{{asset('/front/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('/front/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('/front/js/owl.js')}}"></script>
<script src="{{asset('/front/js/wow.js')}}"></script>
<script src="{{asset('/front/js/appear.js')}}"></script>
<script src="{{asset('/front/js/isotope.js')}}"></script>
<script src="{{asset('/front/js/mixitup.js')}}"></script>
<script src="{{asset('/front/js/script.js')}}"></script>
</body>
</html>
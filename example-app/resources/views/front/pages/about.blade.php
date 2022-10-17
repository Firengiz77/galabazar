@section('title',__('static.homepage'))
@extends('front.layout.app2')

@section('container2')

   	<!--Page Title-->
       <section class="page-title" style="background-image:url(/front/images/background/6.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<h1>{{__('static.haqqimizda')}}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                        <li class="active">{{__('static.haqqimizda')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<!--Welcome Section-->
    <section class="welcome-section">
    	<div class="auto-container">

        	<div class="row clearfix">
            	<!--Content Column-->
            	<div class="content-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>{{__('static.about1')}}</h2>
                            <div class="title-text">{!! __('static.about4') !!}</div>
                        </div>
                        <div class="dark-text">{{__('static.about2')}}</div>
                        <div class="text">{{__('static.about3')}}</div>
        
                    </div>
                </div>
                <!--Image Column-->
            	<div class="image-column col-md-5 col-sm-8 col-xs-12">
                	<div class="inner">
                        <div class="image-one">
                            <img src="{{asset('/front/images/resource/image-1.jpg')}}" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="{{asset('/front/images/resource/image-2.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        
    </section>
    <!--End Welcome Section-->

    <!-- 2ci hisse start -->
    <section class="welcome-section2">
    	<div class="auto-container">

        	<div class="row clearfix">
                      <!--Image Column-->
            	<div class="image-column col-md-5 col-sm-8 col-xs-12">
                	<div class="inner">
                        <div class="image-two">
                            <img src="{{asset('/front/images/resource/image-2.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
            	<!--Content Column-->
            	<div class="content-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title-->
                        <div class="dark-text">{{__('static.about2.1')}}</div>
                        <div class="text">{{__('static.about3.1')}}</div>
        
                    </div>
                </div>
          

            </div>
        </div>
    </section>
    <!-- 2ci hisse end -->

@endsection
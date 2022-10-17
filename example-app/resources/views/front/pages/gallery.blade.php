@section('title',__('static.gallerypage'))

@extends('front.layout.app2')
@section('container2')

 	<!--Page Title-->
     <section class="page-title" style="background-image:url(/front/images/background/6.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<h1>{{__('static.qaleriya')}}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                        <li class="active">{{__('static.qaleriya')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<!--Gallery Section-->
    <div class="gallery-section">
    	<div class="auto-container">
        	
            <div class="masonry-container row clearfix">
            	
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gallery-1.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gallery-1.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gallery-2.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gallery-2.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gallery-3.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gallery-3.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gal-1.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gal-1.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gallery-5.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gallery-5.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                      
        
                
           
           
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-8 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gallery-4.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gallery-4.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery"><span class="fa fa-expand"></span></a>
                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Gallery Item-->
                <div class="gallery-item masonry-item col-lg-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{asset('/front/images/gallery/gal-3.jpg')}}" alt="" />
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="content">
                                        <div class="options-box">
                                            <a class="lightbox-image" href="{{asset('/front/images/gallery/gal-3.jpg')}}" title="{{__('static.imagecaption')}}" data-fancybox-group="example-gallery">
                                                <span class="fa fa-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="load-more text-center">
            	<a href="#" class="theme-btn btn-style-one">{{__('static.loadmore')}}</a>
            </div>
            
        </div>
    </div>
    <!--End Gallery Section-->




@endsection
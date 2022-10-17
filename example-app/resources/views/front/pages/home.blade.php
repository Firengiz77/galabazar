@section('title',__('static.homepage'))

@extends('front.layout.app')
@section('container')

<style>
     .shop-item{
	position: relative;
    }
    .shop-item .image-link{
        position: absolute;
        top:0;
        bottom:0;
        right:0;
        left:0;
        z-index: 12;
    }
    #shop-banner2{
        background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(/front/images/background/banner1.jpg); 
        background-repeat: no-repeat; 
        background-attachment: fixed;
        background-size: cover;
     
      
       
    }


</style>

    <!--Main Slider-->
    <section class="main-slider" data-start-height="850" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                @foreach($slider as $s)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{Voyager::image($s->image)}}"  data-saveperformance="off"  data-title="{{$s->getTranslatedAttribute('text', App::getLocale(), 'az')}}">
                    <img src="{{Voyager::image($s->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="25"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>
                    {{$s->getTranslatedAttribute('text', App::getLocale(), 'az')}}
                    </h2></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{$s->link}}" class="theme-btn btn-style-one">More Information</a></div>
                    
                    </li>
                @endforeach

                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    


    <!--Welcome Section-->
    <section class="welcome-section">
    	<div class="auto-container">
        	<div class="clearfix">
            	<!--Content Column-->
            	<div class="content-column">
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>{{__('static.about1')}}</h2>
                            <div class="title-text">{{__('static.haqqimizda')}} </div>
                        </div>
                        <div class="dark-text">{{__('static.about2')}}</div>
                        <div class="text">{{__('static.about3')}}</div>
                        <span class="signature">
                        <a href="{{route('about')}}" class="theme-btn btn-style-one"> {!! __('static.loadmore') !!}</a>
                        </span>
                    </div>
                </div>
            </div>
            <!--image box-->
            <div class="floated-img-up">
                <img src="{{asset('/front/images/resource/welcome-up-img.png')}}" alt="" />
            </div>
            <div class="floated-img-down">
                <img src="{{asset('/front/images/resource/welcome-down-img.png')}}" alt="" />
            </div>
        </div>
    </section>
    <!--End Welcome Section-->
    




    <!--Shop Banner-->
    <section class="shop-banner" id="shop-banner2">
    	<div class="auto-container" style="z-index:1">
        {!! __('static.reklam1') !!}
            <div class="sale-percent"> {!! __('static.reklam2') !!}</div>
            <a href="#" class="theme-btn btn-style-one"> {!! __('static.reklam3') !!}</a>
        </div>
    </section>
    <!--End Shop Banner-->
    





    <!--Product Section-->
    <section class="product-section">
    	<div class="auto-container">
        
        	<!--Sec Title Two-->
            <div class="sec-title-two">
                <h2>{{__('static.ourmehsul1')}}</h2>
                <div class="title-text">{{__('static.ourmehsul2')}}</div>
            </div>
        	<!--Sortable Gallery-->
            <div class="mixitup-gallery">
            
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns text-center">
                        <li class="filter active" data-role="button" data-filter=".all2">{{__('static.all')}}</li>
                        @foreach($mehsullar as $m)
                        <li class="filter" data-role="button" data-filter=".{{$m->id}}">{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="filter-list row clearfix">
            
                @foreach($mehsullar as $m)
                @if($m->id)
                @foreach($m->cesidler as $c)
                @if($loop->index < 12)
                <a style="position:static;z-index:9999"  href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}">
                     <!--Shop Item-->
                     <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix mix_all {{$m->id}}">
                        <div class="inner-box">
                       <div class="image-box">  <img src="{{Voyager::image($c->image)}}" alt="">
                                <div class="overlay-box">
                                    <!--lower box-->
                                    <div class="lower-box">
                                        <h3><a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}">{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</a></h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</a>
                     @endif
                    @endforeach
                    @endif
                    @endforeach


                @foreach($mehsullar as $m)
                @if($m->id)
                @foreach($m->cesidler as $c)
                @if($loop->index < 1)

                     <!--Shop Item-->
                     <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix mix_all all2">
                     <a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}" class="image-link"></a>
                        <div class="inner-box">
                            <div class="image-box"> <a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}"><img src="{{Voyager::image($c->image)}}" alt=""></a>
                                <div class="overlay-box">
                                    <!--lower box-->
                                    <div class="lower-box">
                                        <h3><a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}">{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</a></h3>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    

                </div>





            </div>
            <!--End Sortable Gallery-->
        </div>
    </section>
    <!--End product Section-->
    

    <!--Gallery Section / Full Width Gallery-->
    <div class="gallery-section full-width-gallery gray-bg">
    	
        <!--Sec Title Two-->
        <div class="sec-title-two">
            <h2>{{__('static.qaleriya')}}</h2>
            <div class="title-text">{{__('static.qaleriya2')}}</div>
        </div>
          

        <!--Gallery Item-->
        <div class="masonry-container clearfix">
        
            <!--Gallery Item-->
            <div class="gallery-item masonry-item col-lg-3 col-sm-6 col-xs-12">
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
            <div class="gallery-item masonry-item col-lg-3 col-sm-6 col-xs-12">
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
            <div class="gallery-item masonry-item col-lg-3 col-sm-6 col-xs-12">
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
            <div class="gallery-item masonry-item col-lg-6 col-sm-12 col-xs-12">
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
            <div class="gallery-item masonry-item col-lg-3 col-sm-6 col-xs-12">
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
        </div>
    </div>
    <!--End Gallery Section-->
    
@endsection
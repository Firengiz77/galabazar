@section('title',__('static.cesidlerpage'))

@extends('front.layout.app2')
@section('container2')
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
</style> 


@foreach($cesidler as $c)
               @endforeach
   	<!--Page Title-->
       <section class="page-title" style="background-image:url(/front/images/background/edviyyat-bg.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<h1>{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</div>
                                  </h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index' )}}">{{__('static.əsas')}} </a></li>
                        <li class="active">{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</div>
                                  </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

              
	<!--Shop Section-->
    <section class="shop-single">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--content column-->
            	<div class="content-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
        			<div class="product-details">
            	
                        <!--Basic Details-->
                        <div class="basic-details">
                            <div class="row clearfix">
                                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                                    <!-- <figure class="image-box"><a href="" class="lightbox-image" title="Image Caption Here"><img src="{{Voyager::image($c->image)}}" alt=""></a></figure> -->
                                    <figure class="image-box"><img src="{{Voyager::image($c->image)}}" alt=""></figure>
                                </div>
                                <div class="info-column col-md-7 col-sm-12 col-xs-12">
                                    <div class="details-header">
                                        <h4>{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</h4>
                                    </div>
                                    <div class="text">{{$c->getTranslatedAttribute('faydasi', App::getLocale(), 'az')}}</div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details-->
                        
                        <!--Product Info Tabs-->
                        <div class="product-info-tabs">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box" id="product-tabs">
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-description" class="tab-btn active-btn">{{__('static.istifade')}}</li>
                                </ul>
                                
                                <!--Tabs Content-->
                                <div class="tabs-container tabs-content">
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-description">
                                        <div class="content">
                                            <p>{{$c->getTranslatedAttribute('istifadesi', App::getLocale(), 'az')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--End Product Info Tabs-->
                        
               
                        
                    </div>
            	</div>
                <!--End content Side-->
                
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-8 col-xs-12">
                	<div class="sidebar">
                    	
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            @foreach($mehsullar2 as $m2)
                            @endforeach
                        	<form action="{{url('/search')}}" type="get" method="GET">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="search_field" value="" placeholder="{{__('static.search')}}" required="">
                                    <button type="submit" ><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!--Category Widget-->
                        <div class="sidebar-widget sidebar-category">
                        	<div class="sidebar-title">
                                <h2>{{__('static.categories')}}</h2>
                            </div>
                            <ul class="list">

                            @foreach($mehsullar as $m)
                            	<li><a href="{{route('shop',['id' => $m->id])}}">{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}  </a></li>
                              @endforeach


                            </ul>
                        </div>
                        
                     
                <!--End Sidebar Side-->
                
            </div>
        </div>
</div>

                       @foreach($mehsullar3 as $m)
                       @if($m->id)
                        <!--Related Post-->
                        <div class="related-posts">
                        	<h2 id="h2clasi">{{__('static.newmehsul')}}</h2>
                            <div class="row clearfix">
                                 
                                    @foreach($m->cesidler as $c)
                                <!--Shop Item-->
                                <div class="shop-item col-md-3 col-sm-6 col-xs-12">
                                <a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}" class="image-link"></a>
                                    <div class="inner-box">
                                        <div class="image-box"><img src="{{Voyager::image($c->image)}}" alt="">
                                            <div class="overlay-box">
                                                <!--lower box-->
                                                <div class="lower-box">
                                                    <h3><a href="{{route('shop_single',['id' => $c->id,'id2' => $m->id])}}">{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                             
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!--End Related Post-->
    </section>
    <!--End Shop Section-->
    
    
    
@endsection
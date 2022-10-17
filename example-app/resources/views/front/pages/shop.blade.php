@section('title',__('static.productpage'))

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
    #shop-banner2{
        background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(/front/images/background/banner1.jpg); 
        background-repeat: no-repeat; 
        background-attachment: fixed;
        background-size: cover;
     
      
       
    }


</style>

@foreach($mehsullar as $m)
            @endforeach


            

 
   	<!--Page Title-->
   

   	<!--Page Title-->
       @if($m->id ==1 )
       <section class="page-title" style="background-image:url(/front/images/background/denli-bit.jpg);">
       @elseif($m->id==2)
       <section class="page-title" style="background-image:url(/front/images/background/tort.jpg);">
       @elseif($m->id==3)
       <section class="page-title" style="background-image:url(/front/images/background/edviyyat.jpg);">
       @elseif($m->id==4)
       <section class="page-title" style="background-image:url(/front/images/background/nogul.jpg);">
       @elseif($m->id==5)
       <section class="page-title" style="background-image:url(/front/images/background/nogul.jpg);">
       @elseif($m->id==6)
       <section class="page-title" style="background-image:url(/front/images/background/qend.jpg);">
       @elseif($m->id==7)
       <section class="page-title" style="background-image:url(/front/images/background/sup.jpg);">
       @else
       <section class="page-title" style="background-image:url(/front/images/background/pripravka.jpg);">
       @endif

    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<h1>{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                        <li class="active">{{$m->getTranslatedAttribute('name', App::getLocale(), 'az')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<!--Shop Section-->
    <section class="shop-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
      

            @foreach($mehsullar3 as $m)  
       
                <!--Shop Item-->
               
                <div class="shop-item col-md-4 col-sm-6 col-xs-12">
                <a href="{{route('shop_single',['id' => $m->id,'id2' => $mehsullar4->id])}}" class="image-link"></a>
                    <div class="inner-box">
                        <div class="image-box"><img src="{{Voyager::image($m->image)}}" alt="">
                            <div class="overlay-box">
                               
                                <!--lower box-->
                                <div class="lower-box">
                                
                                    <h3><a href="{{route('shop_single',['id' => $m->id,'id2' => $mehsullar4->id])}}">{{$m->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</a></h3>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
          {!! $mehsullar3->links() !!}

            </div>

            
        </div>
    </section>
    <!--End Shop Section-->


@endsection
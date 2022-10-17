@section('title',__('static.productpage'))

@extends('front.layout.app2')

@section('container2')


	<!--Shop Section-->
    <section class="shop-section">
    	<div class="auto-container">
        	<div class="row clearfix">

            @foreach($cesidler as $c)  
          
                <!--Shop Item-->
                <div class="shop-item col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{Voyager::image($c->image)}}" alt="">
                            <div class="overlay-box">
                                <!--lower box-->
                                <div class="lower-box">
                                    <h3><a href="{{route('shop_single',[app()->getLocale(),'id' => $c->id]) }}">{{$c->getTranslatedAttribute('ad', App::getLocale(), 'az')}}</a></h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
         
                @endforeach
               
                
            </div>
      
            
        </div>
    </section>
    <!--End Shop Section-->


@endsection
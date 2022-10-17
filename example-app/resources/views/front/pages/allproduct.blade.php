@section('title',__('static.allproduct'))
@extends('front.layout.app2')

@section('container2')
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

                     <!--Shop Item-->
                     <div class="shop-item col-md-4 col-sm-6 col-xs-12 mix mix_all {{$m->id}}">
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
    
@endsection
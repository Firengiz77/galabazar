@section('title','Rooms')
@extends('front.layouts.app2')
@section('container2')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>


<!-- guest rooms start -->

<section id="guestroom">
    <div class="guestroomarea">
        <p><span class='groom'>
            {{$rooms->roomname}}</span> <br>
            {!!$rooms->text!!}
    </p>
    </section>
    <!-- rooms end -->
    <div id="slider2">
        <div class="slider">
            <div id="owl1" class="owl-carousel owl-theme">
                @foreach($rooms->getMedia('image') as $r)
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{asset($r->getUrl())}}" alt="">
                    </div>
                </div>
       @endforeach



            </div>
        </div>
    </div>
    </div>
  
 <script type="text/javascript">
        $(document).ready(function() {
            $('#owl1').owlCarousel({
                
          loop:true,
          margin:5,
          responsiveClass:true,
          center:true,
          dots:true,
         nav:true,
          autoplay:true,
          autoplayTimeout:3000,
          navText:[
    "<img  src='{{asset('/front/img/left-arrow(3).png')}}'>",
    "<img  src='{{asset('/front/img/right-arrow(1).png')}}'>"
   
    ],
          responsive:{
              0:{
                  items:2,
              },
              600:{
                  items:2,
              },
              1000:{
                  items:3,
              }
          },
      });
    });
      
        </script>    

@endsection
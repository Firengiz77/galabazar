@section('title','Dishes')
@extends('front.layouts.app2')
@section('container2')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>


<!-- menu start -->
<section id="menu">
@foreach ($dish as $d)
    <div class="p">
        <span id="span1">{{$d->dishes}}</span>
        <hr>
        <div class="meal" id="p2">
           {{-- <p> <span id="h3"> {{$d->meal}} </span> - {{$d->ingredient}} </p> <br> --}}
           <p>{!! $d->meal  !!}</p>
           {{-- <p> <span id="h3">Meal 2</span> - water,salad,tea,tomato,carrot,salad,carrot,salad </p> <br>
           <p> <span id="h3">Meal 2</span> - water,salad,tea,tomato,carrot,salad </p> --}}
        </div>
    </div>
    @endforeach
</section>

<!-- menu end -->

<!-- owl section start -->
<div >
    <div class="slider2">
        <div id="owl2" class="owl-carousel owl-theme">

            @foreach ($dish as $d )
            <div class="slider-card2">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{$d->getFirstMediaUrl('image')}}" alt="" width="200px">
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>
<!-- owl section end -->




<script>
    $(document).on('click',function(){
    $('.collapse').collapse('hide');
    })
    </script> 
  
  <script >
      $('#owl2').owlCarousel({
    loop:true,
    margin:5,
    responsiveClass:true,
  
    dost:true,
    autoplay:true,
    autoplayTimeout:3000,
        dots:true,
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
    }
  });
  
  </script>
@endsection
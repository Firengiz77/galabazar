@section('title','Rooms')
@extends('front.layouts.app2')
@section('container2')

<!-- guest rooms start -->

<section id="guest">
@foreach ($room as $r )
@if($r->id % 2 === 0)
    <h3>{{$r->roomname}}</h3>
<div class="container" id="orta">
    <div class="row">
      <div class="col" > <img  src="{{$r->getFirstMediaUrl('image')}}" alt=""> </div>
      <div class="col">
          <p data-aos="fade-up">      
       <span id="italiana">{{$r->title}}</span> <br>
 {{$r->text}}<br> <br>
         <a  href="{{route('about_room',[app()->getLocale(),'id' => $r->id])}}">{{__('static.Discover More ...')}}</a>

</p>
</div>
    </div>
  </div>
  @else

  <h3>{{$r->roomname}}</h3>
  <div class="container" id="orta">
      <div class="row">
        <div class="col"><p  data-aos="fade-up">      
          <span id="italiana">{{$r->title}}</span> <br>
          {{$r->text}} <br> <br>
            <a href="{{route('about_room',[app()->getLocale(),'id' => $r->id])}}">{{__('static.Discover More ...')}}</a>
   
   </p> </div>
        <div class="col">
          <img src="{{$r->getFirstMediaUrl('image')}}" alt="" width="400px">
  </p></div>
      </div>
    </div>
    @endif
  @endforeach
</section>

 <br> <br>

{{-- <section id="spa">
    <h3>Spa & Bathroom</h3>
    <div class="container" id="orta">
        <div class="row">
          <div class="col"><p  data-aos="fade-up">      
            <span id="italiana">Absolute relaxation</span> <br>
       An intimate retreat of well being to rediscover the   value of our precious time. <br> <br>
              <a href="spa.html">Discover More ...</a>
     
     </p> </div>
          <div class="col">
            <img src="img/jared-rice-PibraWHb4h8-unsplash(1).jpg" alt="" width="400px">
    </p></div>
        </div>
      </div>
</section> --}}



<!-- rooms end -->

@endsection
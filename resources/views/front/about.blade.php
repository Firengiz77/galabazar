@section('title','About Us')
@extends('front.layouts.app2')
@section('container2')
<!-- about start -->

<section id="about">

  <h3>{{__('static.About Us')}}</h3>
  @foreach ($about as $a )
  @if($a->id % 2 === 0)
<div class="container">
  <div class="row">
    <div class="col" id="aboutimg" > <img  src="{{$a->getFirstMediaUrl('image')}}" alt=""> </div>
    <div class="col">
        <p data-aos="fade-up">      
       {{$a->text}}
</p></div>
  </div>
</div>
@else
<div class="container" id="c2">
  <div class="row">
    <div class="col">
      <p data-aos="fade-up">      
     {{$a->text}}
</p></div>
    <div class="col" id="aboutimg" > <img  src="{{$a->getFirstMediaUrl('image')}}" alt=""> </div>
  </div>
</div>
@endif

@endforeach
</section>

<!-- about end -->
@endsection
@section('title','Menu')
@extends('front.layouts.app2')
@section('container2')

<!-- menus start -->
<section id="menus">
@foreach ($menu as $m )
    @if($m->id%2 !==0)

    <h3>{{$m->menuname}}</h3>
<div class="container" id="orta">
    <div class="row">
      <div class="col"> <img  src="{{$m->getFirstMediaUrl('image')}}" alt=""> </div>
      <div class="col">
          <p data-aos="fade-up">      
       <span id="italiana">{{$m->title}}</span> <br>
  {{$m->text}} <br> <br>
         <a  href="{{route('dishes',[app()->getLocale(),'id' => $m->id])}}">{{__('static.Discover More ...')}}</a>

</p></div>
    </div>
  </div>

@else
    <h3>{{$m->menuname}}</h3>
<div class="container" id="orta">
    <div class="row">
      <div class="col" >         <p data-aos="fade-up">      
        <span id="italiana">{{$m->title}}</span> <br>
   {{$m->text}} <br> <br>
          <a  href="{{route('dishes',[app()->getLocale(),'id' => $m->id])}}">{{__('static.Discover More ...')}}</a>
 
 </p> </div>
      <div class="col" >
        <img  src="{{$m->getFirstMediaUrl('image')}}" alt=""> 

</div>
    </div>
  </div>




@endif
  @endforeach
{{-- 
    <h3>Salads</h3>
    <div class="container" id="orta">
        <div class="row">
          <div class="col"><p  data-aos="fade-up">      
            <span id="italiana">Absolute relaxation</span> <br>
       An intimate retreat of well being to rediscover the   value of our precious time. <br> <br>
              <a href="menu.html">Discover More ...</a>
     
     </p> </div>
          <div class="col">
            <img src="img/adam-bartoszewicz-MaqdFCtH8Oo-unsplash.jpg" alt="" width="400px">
    </p></div>
        </div>
      </div> --}}

      {{-- <h3>Snack</h3>
      <div class="container" id="orta">
          <div class="row">
            <div class="col" > <img  src="img/lindsay-moe-n-QvF3vyf5M-unsplash.jpg" alt=""> </div>
            <div class="col">
                <p data-aos="fade-up">      
             <span id="italiana">Absolute relaxation</span> <br>
        An intimate retreat of well being to rediscover the   value of our precious time. <br> <br>
               <a  href="menu.html">Discover More ...</a>
      
      </p></div>
          </div>
        </div>

        <h3>Desserts</h3>
        <div class="container" id="orta">
            <div class="row">
              <div class="col"><p  data-aos="fade-up">      
                <span id="italiana">Absolute relaxation</span> <br>
           An intimate retreat of well being to rediscover the   value of our precious time. <br> <br>
                  <a href="menu.html">Discover More ...</a>
         
         </p> </div>
              <div class="col">
                <img src="img/toa-heftiba-MSxw2vpQzx4-unsplash.jpg" alt="" width="400px">
        </p></div>
            </div>
          </div>

          <h3>Drinks</h3>
          <div class="container" id="orta">
              <div class="row">
                <div class="col" > <img  src="img/kobby-mendez-xBFTjrMIC0c-unsplash.jpg" alt=""> </div>
                <div class="col">
                    <p data-aos="fade-up">      
                 <span id="italiana">Absolute relaxation</span> <br>
            An intimate retreat of well being to rediscover the   value of our precious time. <br> <br>
                   <a  href="menu.html">Discover More ...</a>
          
          </p></div>
              </div>
            </div> --}}




</section>


<!-- menus end -->







@endsection
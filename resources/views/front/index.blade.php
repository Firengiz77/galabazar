@section('title','Home Page')
@extends('front.layouts.app')
@section('container')

<!-- home start-->

<section class="img">
    <div>
      <div class="best" >
       <p> {{__('static.Best')}} </p>
      </div>
  </div>
  </section>
  
  <!-- home end-->
  
  <!-- rooms start -->
  <section class="img2" >
    <div  id="rooms">
      <div class="rooms">
       <p data-aos="zoom-out"> <span class="rooms1">{{__('static.Rooms')}}</span> <br>
       &nbsp;  &nbsp;  {{__('static.RoomW')}}<br>
       </p>
      <a href="{{route('room',app()->getLocale())}}"> <button type="button" class="button1"> <p class="glass">{{__('static.View Rooms')}}</p> </button> </a>

  </div>
  
  </section>
  <!-- rooms end -->
  
  <!-- menu start -->
  <section class="img3" id="menu">
    <div>
      <div class="menus" >
       <p data-aos="zoom-out"> <span class="menus1">{{__('static.Menu')}}</span> <br>
       &nbsp;  &nbsp; {{__('static.MenuW')}}</p>
       <a href="{{route('menu',app()->getLocale())}}"><button type="button" class="button1"> <p class="glass">{{__('static.View Menu')}}</p> </button> </a>
      </div>
  </div>
  </section>
  <!-- menu end -->
  
  <!-- contact start -->
  <section id="contact">
    <p class="contact">{{__('static.Gala Bazar')}}</p>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <p class="contact2">
          {{__('static.Contact')}} :  <br>
          +{{__('static.numb1')}} <br>
          +{{__('static.numb2')}}   <br>
          {{__('static.email')}}
        </p>
        </div>
        <div class="col-sm">
          <p class="contact2">
        {{__('static.Opening Hours')}} :  <br>
            {{__('static.Launc')}} <br>
            {{__('static.Dinner')}}  
          </p>
        </div>
        <div class="col-sm">
          <p class="contact2">
            {{__('static.Location')}} :  <br>
            {{__('static.loc1')}} <br>
            {{__('static.loc2')}}, <br>
            {{__('static.loc3')}}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- contact end -->
  
    
@endsection
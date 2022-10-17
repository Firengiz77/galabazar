@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code')


	<!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">

            <figure class="error-image"><img src="{{asset('/front/images/resource/error-image.png')}}" alt=""></figure>
            <h3>Nothing found here</h3>
            <div class="text">Page does not exist or some other error occured. Go to our <a href="{{route('index')}}">Home Page</a>  </div>
        </div>
    </section>
    <!--End Error Section-->

@endsection
@section('message', __('Service Unavailable'))

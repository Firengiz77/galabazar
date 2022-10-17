@section('title',__('static.contactpage'))


@extends('front.layout.app2')

@section('container2')


   	<!--Page Title-->
       <section class="page-title" style="background-image:url(/front/images/background/6.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<h1>{{__('static.əlaqə1')}}</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('index')}}">{{__('static.əsas')}}</a></li>
                        <li class="active">{{__('static.əlaqə1')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
            <div class="contact-info-section">
                <div class="row clearfix">
                	<!--Contact Info Box-->
                	<div class="contact-info-box col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="icon flaticon-location-pin"></span></div>
                            <h3>{{__('static.adress')}}</h3>
                            <div class="text">{{$contact->adress}}</div>
                            <div class="large-icon"><span class="icon flaticon-location-pin"></span></div>
                        </div>
                    </div>
                    <!--Contact Info Box-->
                    <div class="contact-info-box col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="icon flaticon-headphones"></span></div>
                            <h3>{{__('static.əlaqə')}}</h3>
                            <div class="text">{{$contact->tel}}</div>
                            <div class="large-icon"><span class="icon flaticon-headphones"></span></div>
                        </div>
                    </div>
                    <!--Contact Info Box-->
                    <div class="contact-info-box col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="icon flaticon-business-2"></span></div>
                            <h3>{{__('static.mail')}}</h3>
                            <div class="text">{{$contact->email}}</div>
                            <div class="large-icon"><span class="icon flaticon-business-2"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-section">
            	<div class="row clearfix">
                	<!--Map Column-->
                	<div class="map-column col-md-5 col-sm-12 col-xs-12">
                    	
                        <div class="map-outer">
							<!--Map Canvas-->
                            <div class="map-canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.6323524353384!2d49.83797171539526!3d40.3948401793677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDIzJzQxLjQiTiA0OcKwNTAnMjQuNiJF!5e0!3m2!1str!2s!4v1635412907727!5m2!1str!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                            </div>
                		</div>
                        
                    </div>
                    
                    <!--form column-->
                    <div class="form-column col-md-7 col-sm-12 col-xs-12">
                    	
                        <!-- Comment Form -->
                        <div class="contact-form">
                            <h2>{{__('static.sendus')}}</h2>
                            <div>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            </div>
                            
                            <!--Comment Form-->
                            <form method="post" action="{{route('sendmail')}}" id="contact-form">
                                @csrf
                                <div class="form-group">
                                	<input type="text" name="name" placeholder="{{__('static.name')}} *" required>
                                </div>
                                    
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="{{__('static.email')}} *" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="tel" placeholder="{{__('static.tel')}} *">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="melumat" placeholder="{{__('static.msg')}} *"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">{{__('static.send')}}</button>
                                </div>
                            </form>
                                
                        </div>
                        <!--End Comment Form --> 
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Contact Section-->





    @endsection
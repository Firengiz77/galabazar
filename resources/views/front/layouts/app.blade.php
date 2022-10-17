<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gala Bazar | @yield('title') </title>
    <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/responsive.css')}}">
    <!-- google fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- aos -->
<link href="https://fonts.googleapis.com/css2?family=Glass+Antiqua&family=Grand+Hotel&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<style>
  .dropdown1 {
position: relative;
display: inline-block;
color:white;
}

.dropdown-content1 {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 140px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
padding: 12px 16px;
z-index: 1;
}

.dropdown1:hover .dropdown-content1 {
display: block;
}

</style>
<body style="background-color: #f8f8f8;" onload="loadfun()">
  <!-- loading start -->
  <div id="loading"></div>
  <!-- loading end -->
<!-- navbar start -->

<section class="texts text-light">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('index',app()->getLocale())}}"> <span class="size text-light"><span class="narinc">G</span>ala <span class="narinc">B</span>azar</span> </a>
          <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle">
            <i class="fas fa-times" style="color:white"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" id="right">
              <li class="nav-item">
                <a class="nav-link text-light" id="a" href="{{route('index',app()->getLocale())}}">{{__('static.Home')}}</a>
              </li>
              <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle text-light" href="{{route('index',[app()->getLocale(),])}}"  id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{__('static.Rooms')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                  @foreach ($room1 as $rs )
                  <li><a class="dropdown-item" href="{{route('about_room',[app()->getLocale(),'id' => $rs->id])}}">{{ $rs->roomname }}</a></li>
           @endforeach
                </ul>

              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-light" href="{{route('index',app()->getLocale()).'#menu'}}"  id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{__('static.Menu')}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                  @foreach ($menu as $d1 )
                  <li><a class="dropdown-item" href="{{route('dishes',[app()->getLocale(),'id' => $d1->id])}}">{{ $d1->menuname }}</a></li>
           @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('about',app()->getLocale())}}">{{__('static.About Us')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('index',app()->getLocale()).'#contact'}}">{{__('static.Contact')}}</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-light" href="{{route('lang',['lang' => 'az'])}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Az
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('lang',['lang' => 'en'])}}">En</a></li>
                </ul>
              </li>
            </ul>
          </div>


        </div>
      </nav>
</section>
    
<!-- navbar end -->

@yield('container')

<!-- footer start -->
<section id="footer">
  <p class="footerp">2021 | All rights Reserved</p>
</section>
<!-- footer end -->




    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.6/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<!-- load js -->
<script>
  var load=document.getElementById("loading");
  function loadfun(){
    load.style.display='none';
  }
</script>

<!-- aos js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      var navbar = document.querySelector('nav')

window.onscroll = function() {

  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }
}
    </script>

<script>
  $(document).on('click',function(){
  $('.collapse').collapse('hide');
  })
  </script> 
  </body>
</html>
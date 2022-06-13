<!DOCTYPE html>
<!--
Template Name: Spourmo
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>E-Shop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"-->
<link href="/layout/styles/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" media="all">
<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">




</head>
<body >


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">{{__('messages.home')}}</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">about</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!--this code to retreive all my languages as alinks  in the nav bar -->
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"> 
            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
          </ul>
        </li>
        <li class="nav-item">
        <i class="fa-solid fa-message"></i><span class="notifications">9</span>
        </li>
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



<div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            <div class="inline-block messages bring_right">
                <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="left"
                      title="الرسائل"><span class="notifications">9</span></span>
            </div>




<h1>hello in index page</h1>

<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></!--script-->



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

@hasSection('contentCategories')
   @yield('contentCategories')
   @endif


<div>this is afooter</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="js/popper.min.js"></script>
<script src="/layout/scripts/bootstrap.js" ></script>

</body>
</html>
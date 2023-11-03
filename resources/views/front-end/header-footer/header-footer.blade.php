<!DOCTYPE html>
<html lang="en">
<head>
  <title>PQIK.TECH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="PQIK.TECH, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/work.css')}}">
</head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="#0">
    <img src="assets/img/logo.png" alt="PQIK.TECH">
    <p>PQIK.TECH</p>
  </a>
  <p class="device-notification--message">PQIK.TECH has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="#0">
            <img src="assets/img/logo.png" alt="PQIK.TECH">
            <p>PQIK.TECH</p>
          </a>
          <button class="header--cta cta">Hire Us</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span>Works</span></li>
            <li><span>About</span></li>
            <li><span>Contact</span></li>
            <li><span>Our Prices</span></li>
            <li><span>Hire us</span></li>
            
          </ul>
        </nav>
@yield('body')

<ul class="outer-nav">
    <li class="is-active">Home</li>
    <li>Works</li>
    <li>About</li>
    <li>Contact</li>
    <li>Our Prices</li>
    <li>Hire us</li>
    
  </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>

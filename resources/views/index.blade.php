<!DOCTYPE html>
<html lang="ja" >
<head>
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</head>
<body>
 <header id="header">
     <h1 class="site-title">
         <a href="index">
             <img src="{{ asset('/img/logo.svg') }}">
         </a>
     </h1>
     <nav id="nav">
        <ul class="nav-menu">
            <li>
                <a href="#pickup">PICK UP</a>
            </li>
            <li>
                <a href="#feature">FEATURE</a>
            </li>
            <li>
                <a href="#contact">CONTACT</a>
            </li>
        </ul>
        <ul class="nav-sns">
            <li>
                <a href="https://twitter.com/" target="_blank">Twitter</a>
            </li>
            <li>
                <a href="https://www.facebook.com/" target="_blank">facebook</a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank">instagram</a>
            </li>

        </ul>
     </nav>
     <div class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
     </div>
     <div id="mask"></div>
 </header>
<main id="main">
    <div id="video">
        <video id="bg-video" src="{{ asset('video/video.mp4') }}" loop autoplay muted playsinline></video>
    </div>
    <section id="pickup">
        <h2 class="sec-title">PICK UP</h2>
            <ul class="slick-area">
                <li><img src="{{ asset('/img/pickup1.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup2.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup3.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup4.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup5.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup6.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup7.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup8.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup9.jpg') }}"></li>
            </ul>
    </section>
    <section id="feature">
        <h2 class="sec-title">FEATURE</h2>
        <div class="grid">
            <div class="item">

            </div>
        </div>
    </section>
</main>

</body>
</html>

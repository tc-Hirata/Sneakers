<!DOCTYPE html>
<html lang="ja" >
<head>
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</body>
</html>

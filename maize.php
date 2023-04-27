<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
</head>
<body>
<section class="landing-page">
    <div class="circle"></div>

    <header>
        <h1><span>E</span>CORN</h1>
        <ul>
            <li><a href="#">home</a></li>
            <li >
                <a href="./?page=products" class="nav-link <?= isset($page) && $page =='products' ? "active" : "" ?>">Products</a>
            </li>
            <li><a href="#gallery">what's new</a></li>
            <li><a href="#footer"> contact</a></li>
        </ul>
    </header>
    <div class="content">
        <div class="textBox">
            <h2> Discover  wonders  <br> 0f <span> MAIZE</span> </h2>
            <p>Maize, also known as corn, is a versatile crop with a rich history. Grown in Kenya and around the world, maize has become a staple food for many. From livestock feed to biofuel, maize has something to offer everyone </p>
            <a href="./?page=products" class="nav-link <?= isset($page) && $page =='products' ? "active" : "" ?>">learn more</a>
        </div>
        <div class="imgBox">
            <img src="img/yel.png" alt="" class="phone-img" height="430"  width="650">
        </div>
    </div>
    <ul class="thumb">
        <li><img src="img/yel.png" alt="" width="100" height="100" onclick="imgslider('img/yel.png');changecirclecolor('white')" > </li>
        <li><img src="img/fli.png" alt="" width="100" height="100" onclick="imgslider('img/fli.png');changecirclecolor('black')" > </li>
        <li><img src="img/gun.png" alt="" width="100" height="100"  onclick="imgslider('img/gun.png');changecirclecolor('#F0E68C')"> </li>

    </ul>


</section>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-88ade1ec-163a-4564-9422-e54cc3b904de"></div>
</body>
</html>

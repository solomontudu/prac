<?php
require "session.php";

$_SESSION['s_num']='15';
$_SESSION['s_nam']='15';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Dhorom seren</title>
</head>

<body class="container">
    <div class="sidebar">
        <svg class="sidebar-svg">
            <use xlink:href="img/sprite.svg#icon-books" class="sidebar-icon"></use>
        </svg>
    </div>
    <div class="header">
        <!-- 
        <svg class="header-svg">
                <use xlink:href="img/sprite.svg#icon-books" class="header-icon"></use>
        </svg>
        -->
        <form action="process.php" method="POST" class="header-sbx">
            <input type="text" class="search-bx" name="query" placeholder="Seren nombor / nitum">
            <button type="search" class="search-btn" name="srch" value="search">
                <svg class="search-svg" name="submit" type="submit">
                    <use xlink:href="img/sprite.svg#icon-search" class="search-icon" ></use>
                </svg>
            </button>
            <!--
            <svg class="search-svg" name="submit" type="submit">
                <use xlink:href="img/sprite.svg#icon-search" class="search-icon" ></use>
            </svg>
        -->
        </form>
    </div>
    <div class="main">
        <div class="main-con">
            <h1 class="main-heading"><?php echo @$_SESSION['s_num'];?></h1>
            <p class="main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ullam corporis tempora, sunt vitae odio consequatur
                quis fuga, ipsam nam at velit alias, esse non? Magni necessitatibus ab blanditiis eos.
            </p>

            <p class="main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ullam corporis tempora, sunt vitae odio consequatur
                quis fuga, ipsam nam at velit alias, esse non? Magni necessitatibus ab blanditiis eos.
            </p>

            <p class="main-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ullam corporis tempora, sunt vitae odio consequatur
                quis fuga, ipsam nam at velit alias, esse non? Magni necessitatibus ab blanditiis eos.
            </p>
        </div>

    </div>
    <div class="footer">
        <div class="footer-con footer-con--1">
            <p class="footer-legal">
                    &copy; Copyrigh 2018 | All rights reserved.
            </p>
            
        </div>
        <!-- starting of the second division in footer  -->
        <div class="footer-con footer-con--2">
            <a href="https://www.facebook.com/solomon.tudu" class="footer-link">
                <svg class="footer-svg">
                    <use xlink:href="img/sprite.svg#icon-facebook" class="footer-svg--iconf"></use>
                </svg>
            </a>

            <a href="https://www.instagram.com/solomontudu/" class="footer-link">
                <svg class="footer-svg">
                    <use xlink:href="img/sprite.svg#icon-instagram" class="footer-svg--iconi"></use>
                </svg>
            </a>

            <a href="https://twitter.com/solomon_tudu" class="footer-link">
                <svg class="footer-svg">
                    <use xlink:href="img/sprite.svg#icon-twitter" class="footer-svg--icont"></use>
                </svg>
            </a>
        </div>
    </div>
</body>
<script src="js/script.js" type="text/javascript"></script>

</html>
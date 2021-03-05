<?php

echo '<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IVEC</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a4d7e0ec55.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- Custom fonts for this template -->

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
<style>
    html {
        scroll-behavior: smooth;
    }

    .carousel-control-next,
    .carousel-control-prev,
    .lin {
        filter: invert(100%);
    }

    body {
        font-size: 14px;
    }

    a.nav-link {
        text-decoration: none;
        background-image: linear-gradient(currentColor, currentColor);
        background-position: 0% 100%;
        background-repeat: no-repeat;
        background-size: 0% 2px;
        transition: background-size .3s;
    }

    a:hover,
    a:focus {
        background-size: 100% 2px;
    }
</style>
<style>
    li {
        list-style: none;
        cursor: pointer;
    }

    .cntdir {
        background-color: #F2F2F2;
        font-size: 12px;
        text-align: center;
        color: #B40404;
        height: auto;
    }

    .sel {
        color: #B40404;
    }
</style>
<style>
    .dropdown-toggle::after {
        display: none;
    }
</style>
<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
    }
</style>
<head>';
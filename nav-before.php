<?php
    include 'stye.css';
?>

<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
<style>
    label{
            color : #FFFF00;
            font-family: 'Kaushan Script',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji';
        }
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
    <div class="container"> 
        <img src="img/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand" href="home1.php" id=font-Pattaya>&nbsp;ระบบคลังสินค้าออนไลน์</a>
        <button id=nav class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link btn" href="home1.php" onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#FFFF00';" style="color:rgb(255, 255, 0)">HOME<span class="sr-only">(current)</span></a>
                </li>
                &nbsp;
                <li class="nav-item">
                    <a class="nav-link btn " href="login1.php" onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#FFFF00';" style="color:rgb(255, 255, 0)">LOGIN</a>
                </li>
                &nbsp;&nbsp;&nbsp;
                <li>
                <a class="nav-link btn btn-outline-warning" href="register1.php" onmouseover="this.style.color='#FFFFFF';" onmouseout="this.style.color='#FFFF00';" style="color:rgb(255, 255,0)">REGISTER</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
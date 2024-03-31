<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="land.css">
</head>
<body>
    <div class="c">
        <header class="header">
            <a href="#" class="logo"><span>E</span>vento</a>
    
            <nav class="navbar">
                
                <a href="user_page.php">home</a>
                <a href="join.php">view events</a>
                <a href="feedback.html">Feedback</a>
                
                
                
               
            </nav>
    
            <div id="menu-bars" class="fas fa-bars"></div>
        </header>

    </div>
   
    <!-- GALLREY -->
    <section class="gallery" id="gallery">
        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="images/gallery1.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery2.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery3.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery4.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery5.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery6.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery2.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div> 

             <div class="box">
                <img src="images/gallery1.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <!-- <div class="box">
                <img src="images/gallery3.jpg" alt="" />
                <h3 class="title">best events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div> 
            </div> -->
        </div>
    </section>
    
</body>
</html>

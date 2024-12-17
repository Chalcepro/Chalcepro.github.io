<?php
// Start the session to store the playback position
session_start();

// Check if a new playback position is being set
if (isset($_POST['audioPosition'])) {
    $_SESSION['audioPosition'] = $_POST['audioPosition']; // Save position to session
    $_SESSION['musicPlaying'] = true; // Music is playing
} elseif (isset($_POST['stopMusic'])) {
    // Stop music and reset state
    $_SESSION['musicPlaying'] = false;
    $_SESSION['audioPosition'] = 0;
} else {
    // If no POST data, just output the current position and state
    echo json_encode([
        'audioPosition' => isset($_SESSION['audioPosition']) ? $_SESSION['audioPosition'] : 0,
        'musicPlaying' => isset($_SESSION['musicPlaying']) ? $_SESSION['musicPlaying'] : false
    ]);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playwrite+CU:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body id="stopo1">
    

    <!-- <div class="overlayer container-fluid" id="overlay"></div> -->
    <!-- <div class="container-fluid" style="position: fixed; background-color: rgba(255, 255, 255, 0); height: fit-content;"> -->
        <img src="img/note.png" onclick="playSong()" ondblclick="stopsong()" class="img p-0 imageDesign1" id="musicpauser" style="right: 20px; top: 15px; position: fixed; border: 5px solid white; z-index: 1111;" width="5%">
        <audio src="Audio/y2mate.com - C418  Aria Math Minecraft Volume Beta.mp3" loop id="music"></audio>
    <!-- </div> -->

    <div class="container-fluid p-0">
        <div class="conatiner-fluid d-flex justify-content-center count-down text-white fw-bold align-items-center">
            <span class="px-2" style="--i:1;">3</span>
            <span class="px-2" style="--i:5;">2</span>
            <span class="px-2" style="--i:9;">1</span>
        </div>
    </div>

    <div class="container-fluid p-4 pb-5" style="background-color: rgb(0, 0, 0);">


        <div class="container-fluid" id="Design">
            <div class="container-fluid d-flex justify-content-center align-items-center p-0 mb-3 fw-bold" style="background-color: rgb(41, 41, 41); font-size: 90; color: rgb(255, 255, 255);">
                3D
            </div>
        </div>


        <div class="container-fluid d-flex justify-content-center">
            <p class="fw-bold display-5 text-center" onload="fadeIn()" style="z-index: 111111;" id="welcome">Hello and welcome...</p>
        </div>

        <div class="observer-container">
            <div class="section hidden-section" data-loaded="false">

       <!-- portfolio1 container -->
       <div class="container-fluid holder1" id="portfolio1"> 
        <div class="container-fluid p-0" id="clippy1" style="background-color: rgb(12, 12, 12);">
            <div class="row text-start main">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio2" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(248, 240, 224);">LOST IN YOU</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(214, 214, 214);">Inspiration and design gotten from an actual product<span class="fw-bold" style="color: rgb(248, 240, 224);"> LOST IN YOU</span> eu de perfume an oriflame product. not only was it a great challenge but also a great way to gain experience on designing mockup products</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color: rgb(248, 240, 224);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center imageDesign1" style="z-index: 1 !important;">
                    <img src="img/weeeeeell.jpg" class="img img-thumbnail border-0 p-0" id="imageDesign1" width="70%" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
    </div>


    <div class="observer-container">
        <div class="section hidden-section" data-loaded="false">

    <!-- portfolio2 container -->
    <div class="container-fluid" id="portfolio2"> 
        <div class="container-fluid p-0 mt-5 spacious" id="clippy1">
            <div class="row text-start main2">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio3" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(233, 224, 177);">The Elevator</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color:  rgb(255, 253, 240);">This was at first supposed to be just an elevator model, until the urge to create became so great that i decided to make part of a lobby to recreate that distant feeling</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color: rgb(233, 224, 177);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
        </div>

        <div class="observer-container">
            <div class="section hidden-section" data-loaded="false">

    <!-- portfolio3 container -->
    <div class="container-fluid pb-5" id="portfolio3"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background-color: rgba(44, 44, 44, 0.281);">
            <div class="row text-start main3">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio4" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(214, 243, 248);">Airpod Pack</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(227, 252, 232);">The Airpod, Docker and casing and environment, down to the last pixel is made by me. The only problem is the docker not having the "Logical" holes for the pods. But i feel it still looks pretty good</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(214, 243, 248);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center imageDesign4" style="z-index: 1 !important;">
                    <img src="img/fully6.jpg" class="img img-thumbnail border-0 p-0" id="imageDesign2" width="70%" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
            </div>

            <div class="observer-container">
                <div class="section hidden-section" data-loaded="false">

    <div class="container-fluid" id="Design">
        <div class="container-fluid d-flex justify-content-center align-items-center p-0 mb-3 fw-bold" style="background-color: rgba(148, 111, 64, 0.774); font-size: 90; color: rgb(255, 255, 255);">
            2D 
        </div>
    </div>

    <!-- pictures canva -->
    <div class="container-fluid pb-5" id="portfolio4"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background-color: rgb(14, 14, 14);">
            <div class="row text-start main13">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio5" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- <div class="container-fluid w-50 flexible" style="position: absolute; mix-blend-mode: difference; rotate: -50deg; scale: 0.5;">
                    <img src="/img/M.png" class="img bigM" alt="" width="100%">
                </div> -->
                <div class="col col-6 d-flex align-items-center px-5">
                </div>
                <div class="col d-flex align-items-center justify-content-center" style="overflow: hidden;">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(255, 255, 255); letter-spacing: -10;">M<span style="color: red;">E</span>M</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">A logo I made for a class project that i felt would help bring the feel of the website to life. Giving it both a classy and modern feel</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(255, 255, 255)" id="ButtonMain">Visit Page</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
    </div>

    <div class="observer-container">        
        <div class="section hidden-section" data-loaded="false">

    <!-- pictures canva -->
    <div class="container-fluid pb-5" id="portfolio5"> 
        <div class="container-fluid p-0 mt-0" id="clippy1" style="background-color: rgb(14, 14, 14);">
            <div class="row text-start main14">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio6" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">

                </div>
                <div class="col d-flex align-items-center justify-content-center" style="overflow: hidden;">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(255, 255, 255);">Logo <span style="color: red;">II</span> design</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">This is actually the logo placed on the container of the oriflame model i made. I decided to create a slightly similar but unique design making sure that is just looks...well different</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(255, 255, 255)" id="ButtonMain">Visit Page</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
        </div>

        <div class="observer-container" id="portfolio6">
            <div class="section hidden-section" data-loaded="false">

    <div class="container-fluid" id="Design">
        <div class="container-fluid d-flex justify-content-center align-items-center p-0 mb-3 text-dark" style="background-color: rgba(255, 255, 255, 0.774); font-size: 90; color: rgb(255, 255, 255);">
            <span class="fw-bolder" style="color: rgba(4, 27, 56, 0.986);"><em>PRO</em></span>JECTS
        </div>
    </div>


    <!-- portfolio2 container -->
    <div class="container-fluid" id="portfolio2"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background: url(img/Original.jpeg) left ; background-size: cover;">
            <div class="row text-start main2">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio7" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(255, 255, 255);">The Original</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">The original or well, the previous version i made of my portfolio. This is just the hero section but i will leave a link to the porfolio. Judging from the image, im sure you've already seen the resemblance.</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(255, 255, 255);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
            </div>


            <div class="observer-container">
                <div class="section hidden-section" data-loaded="false">

    <!-- portfolio2 container -->
    <div class="container-fluid" id="portfolio7"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background: url(img/Mem.jpeg) left; background-size: cover;">
            <div class="row text-start main16">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-black" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio8" class="nav-link text-black" aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-black" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-black" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(0, 0, 0);">The <span style="letter-spacing: -10;">M<span style="color: red;">E</span>M</span> <br>Project</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(0, 0, 0);">I was told to get a reference image from <a href="htps://dribbble.com" class="fw-bold" style="text-decoration: none; color: black;">Dribbble</a> and remake the website and it was a great challenge (Was only supposed to make the welcome page)</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(0, 0, 0); color: white;" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
                </div>


                
    <div class="observer-container">
        <div class="section hidden-section" data-loaded="false">

    <div class="container-fluid pt-5" id="Design">
        <div class="container-fluid d-flex justify-content-center align-items-center p-0 mb-3 text-white" style="background-color: rgba(168, 132, 91, 0.774); font-size: 90; color: rgb(255, 255, 255);">
            <span class="fw-bolder" style="color: rgba(15, 12, 17, 0.986);"><em>WEB</em></span>SITES
        </div>
    </div>


    <!-- portfolio2 container -->
    <div class="container-fluid" id="portfolio8"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background: url(img/Koffee&Tea.jpeg) left; background-size: contain; background-repeat: no-repeat;">
            <div class="row text-start main17">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio9" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(233, 162, 103);">Koffee & Tea</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 249, 243);">My most challenging work yet. This was actually a school project requiring me to make use of all the skills i acquired during the semester.<br>Will make the link to the website and the PowerPoint slides available soon</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(255, 186, 129);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
        </div>

        
    <div class="observer-container">
        <div class="section hidden-section" data-loaded="false">

    <!-- portfolio2 container -->
    <div class="container-fluid" id="portfolio9"> 
        <div class="container-fluid p-0 mt-5" id="clippy1" style="background: url(img/The\ portfolio.png) left; background-size: cover;">
            <div class="row text-start main17">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio1" class="nav-link text-white " aria-current="page">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link text-white" aria-current="page">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link text-white" aria-current="page">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col col-6 d-flex align-items-center px-5">
                    <div class="container-fluid fontStyle p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(248, 184, 131);">The Portfolio</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 249, 243);">Well i don't really need to add this but it is a website, so it fits. This portfilio is actually meant to summarize majority of the things i can do but in a graphical way.</p>
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color:rgb(248, 184, 131);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end -->
        </div>


   </div>
</body>
<!-- <script src="JavaScript/startanim.js"></script> -->
<script src="/JavaScript/player.js"></script>
<!-- <script>
    function playSong(){
            document.getElementById("music").play();
            // setInterval(() => {
            //     document.getElementById("music").onload.play()
            // }, 2000);
    }
    function stopsong(){
        document.getElementById("music").pause();
    }
</script> -->
<script src="/JavaScript/progressiveLoad.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
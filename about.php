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

<!DOCTYPE html>
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
<body id="stopo">

    <!-- <div class="container-fluid" style="position: fixed; background-color: rgba(255, 255, 255, 0); height: fit-content;"> -->
        <img src="img/note.png" onclick="playSong()" ondblclick="stopsong()" class="img p-0 imageDesign1" id="musicpauser" style="right: 20px; top: 15px; position: fixed; border: 5px solid white; z-index: 1111" width="5%">
        <audio src="Audio/y2mate.com - C418  Aria Math Minecraft Volume Beta.mp3" loop id="music"></audio>
    <!-- </div> -->

    <div class="container-fluid p-4 pb-5" style="background-color: rgb(0, 0, 0);">


    <!-- in-between1 container -->
    <div class="container-fluid" id="about"> 
        <div class="container-fluid p-0" id="clippy1" style="background-color: rgb(0, 0, 0);">
            <div class="row text-start">
                <nav class="navbar px-5">
                    <div class="container-fluid justify-content-between px-4 py-3">
                        <img src="img/Orb.jpg" class="img img-thumbnail border-0 p-0 rounded-5" width="5%" alt="">
                        <ul class="nav d-flex justify-content-center fw-bold">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link text-white" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="porfolios.php" class="nav-link text-white " aria-current="page">Portfolio</a>
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
                        <p class="display-6 fw-bold" style="color: rgb(255, 255, 255);">About Me</p>
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">I love modelling and animating, designing and anything that requires creativity (i think alot too)</p>
                        <hr style="width: 100%; height: 3px; background-color: rgb(255, 255, 255);">
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">I am 17yrs, Male, tall (but not too tall)<br>I live in Nigeria (Abuja to be more specific)<br> <hr style="width: 100%; height: 3px; background-color: rgb(255, 255, 255);"> 
                        <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(255, 255, 255);">I'm a gamer but thinking about being a dev. (just need to be rich first)<br>I am (was) an editor<br>I'm into music production<br>i am a web-developer (frontend but will soon move on to backend)</p>
                        <hr style="width: 100%; height: 3px; background-color: rgb(255, 255, 255);">
                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color: rgb(255, 255, 255);" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center imageDesign02" style="z-index: 1 !important;">
                    <img src="img/cryptcut.png" class="img img-thumbnail border-0 p-0 imageDesign" width="70%" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

 
    </div>
</body>
<!-- <script>
    alert("Still working on this page");
</script> -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>


<!-- react native.dev -->
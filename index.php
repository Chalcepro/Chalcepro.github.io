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
    <link rel="stylesheet" href="/CSS/styles.css">
</head>
<body id="stopo">

    <div class="overlayer container-fluid" id="overlay"></div>
    <!-- <div class="container-fluid" style="position: fixed; background-color: rgba(255, 255, 255, 0); height: fit-content;"> -->
        <img src="/img/CLICK.png" id="clickyy" alt="">
        <img src="/img/click 2x.png" id="clickyy2" alt="">
        <img src="img/note.png" onclick="playSong()" ondblclick="stopsong()" class="img p-0 imageDesign1" id="musicpauser" style="right: 20px; top: 15px; position: fixed; border: 5px solid white; z-index: 1111" width="5%">
        <audio src="Audio/y2mate.com - C418  Aria Math Minecraft Volume Beta.mp3" loop id="music"></audio>
    <!-- </div> -->

    <div class="container-fluid p-4" style="background-color: rgb(0, 0, 0);">

        <div class="container-fluid d-flex justify-content-center">
            <p class="fw-bold display-5 text-center" onload="fadeIn()" style="z-index: 111111;" id="welcome">Hello and welcome...</p>
        </div>

        <!-- intro container -->
        <div class="container-fluid holder0" id="home"> 
            <div class="container-fluid p-0" style="background-color: rgb(34, 16, 0);">
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
                            <p class="display-6 fw-bold" style="color: rgb(248, 199, 92);">Hello, I'm Chalcedony</p>
                            <p class="fs-5 fontStyle2 text-capitalize" style="color: rgb(248, 217, 159);">This is my official portfolio website to showcase my works, designs, projects and front-end web designs</p>
                            <a href="/porfolios.html" id="ButtonMain" class="btn fs-5 rounded-2 p-0"><button class="btn fs-5 rounded-2 fw-semibold"  style="background-color: rgb(248, 199, 92);">EXPLORE</button></a>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center imageDesign0">
                        <img src="img/LightBulb.jpg" class="img img-thumbnail border-0 p-0" style="z-index: 1111111;" id="imageDesign" loading="lazy" onload="moveToPosition()" onclick="revert()" width="70%" alt="Light Bulb Image">
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

    </div>
</body>
<script src="JavaScript/startanim.js" defer></script>
<script>
    alert("Please wait for page to load");
</script>
<script src="/JavaScript/clickAppear.js"></script>
<script src="/JavaScript/player.js"></script>
<script>
    function playSong(){
        // document.getElementById("music").play();
        document.getElementById("clickyy").style.display = 'none';
        document.getElementById("clickyy2").style.display = 'block';
            // setInterval(() => {
            //     document.getElementById("music").onload.play()
            // }, 2000);
    }
    function stopsong(){
        // document.getElementById("music").pause();
        document.getElementById("clickyy2").style.display = 'none';
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

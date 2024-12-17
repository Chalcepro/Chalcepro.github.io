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
        <div class="container-fluid p-0" id="clippy1" style="background-color: rgb(44, 44, 44);">
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
                    <div class="container-fluid p-4 my-4">
                        <p class="display-6 fw-bold" style="color: rgb(255, 255, 255);">Contact Me</p>
                        <div style="width: 50px;"
                            <a href="https://wa.me/2348091112033" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                              </svg></a>
                            
                            <a href="https://web.facebook.com/profile.php?id=61551724834265" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg>
                            </a>
                            <a href="https://gmail.com/glitchtrapsonic@gmail.com" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                  </svg>
                            </a>
                        </div>

                        <!-- <button class="btn fs-5 rounded-2 fw-semibold" style="background-color: rgb(255, 255, 255);;" id="ButtonMain">SEE MORE</button> -->
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center blockImg" style="z-index: 1 !important;">
                    <img src="img/Hour glass1.jpg" class="img img-thumbnail border-0 p-0 imageDesign2" width="70%" alt="">
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
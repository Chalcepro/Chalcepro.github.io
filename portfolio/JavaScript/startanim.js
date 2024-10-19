window.onload = function moveToPosition(){
    document.getElementById("imageDesign").style.marginRight = "100%";
    document.getElementById("imageDesign").style.marginBottom = "50%";
    document.getElementById("imageDesign").style.width = "40%";
    document.getElementById("imageDesign").style.display = "block";
    document.getElementById("imageDesign").style.zIndex = "11111";

    let element = document.querySelector(".imageDesign0");
    element.classList.add("imageDesignhide");

    document.getElementById("welcome").style.opacity = "1";
    
    document.getElementById("overlay").style.opacity = "1";
    document.getElementById("overlay").style.zIndex = "111";
    document.getElementById("overlay", "imageDesign").style.transitionDuration = "500ms";

    document.getElementById("welcome").style.transitionDelay = "400ms";
    document.getElementById("welcome").style.transitionDuration = "1000ms";

    // document.getElementById("first").style.display = 'none'; 
}

function revert(){
    document.getElementById("imageDesign").style.marginRight = "0";
    document.getElementById("imageDesign").style.marginBottom = "0";
    document.getElementById("imageDesign").style.width = "70%";
    document.getElementById("imageDesign").style.display = "block";
    document.getElementById("imageDesign").style.zIndex = "11111";

    let element = document.querySelector(".imageDesign0");
    element.classList.remove("imageDesignhide");

    document.getElementById("welcome").style.opacity = "0";

    document.getElementById("overlay").style.opacity = "0";
    document.getElementById("overlay", "imageDesign").style.transitionDuration = "4000ms";

    document.getElementById("welcome").style.transitionDuration = "0";

    setInterval(() => {
    document.getElementById("overlay").style.display = "none";
        
    }, 2500);

}

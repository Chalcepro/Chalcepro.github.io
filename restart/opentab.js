// docked tab

function openTab(){
    document.getElementById("androidCounter").style.right = "0px";
}

function closeTab(){
    document.getElementById("androidCounter").style.right = "-25px";
}


// verification and delivery method

function openVerification1(){
    document.getElementById("verification1").style.display="block";
    document.getElementById("verification1").style.transitionDuration = "7s";
    document.getElementById("bodilo").style.overflow = "hidden";
    document.getElementById("verification1").style.animationDelay = `2s`;
}

function openVerification(){
    document.getElementById("verification").style.display="block";
    document.getElementById("verification").style.transitionDuration = "7s";
    document.getElementById("bodilo").style.overflow = "hidden";
}
function closeVerification(){
    document.getElementById("verification").style.display="none";  
}


// Hide radio on selection

const hide1 = function hideRadio2(){
    document.getElementById("exampleCheck2").style.display="none";
    document.getElementById("continue_butun") = closeVerification()
}

const hide2 = function hideRadio1(){
  document.getElementById("exampleCheck1").style.display="none";
}

if (hide2 == true){
  console.log("Kinda working here")
}




// notifiction

// let hasRun = true;

// function runOnce() {
//   if (!hasRun) {

    // function jumpTo2(){
    //     document.getElementById("notification").style.display="none";
    
    //     document.getElementById("notification1").style.display="block";
    //     document.getElementById("notification1").style.display="flex";
    // }
    
    // function jumpTo3(){
    //     document.getElementById("notification1").style.display="none";
    
    //     document.getElementById("notification2").style.display="block";
    //     document.getElementById("notification2").style.display="flex";
    // }
    
    // function jumpTo4(){
    //     document.getElementById("notification2").style.display="none";
    
    //     document.getElementById("notification3").style.display="none";



        // document.getElementById("notification2").style.display="flex";
    }

    // Set the flag to true so it won't run again
//     hasRun = false;
//   }
// }


var audio = document.querySelector(".audio");
var btn = document.querySelector(".audio-btn");
var img = document.querySelector("#ficheImg");


function play() {
    if(audio.paused) {
        audio.play();
        btn.style.background = "url(assets/pause.png) no-repeat";
        img.style.animation = "imgTourne 5s normal linear infinite";
    }

    else {
        audio.pause();
        btn.style.background = "url(assets/play.png) no-repeat";
        img.style.animation = "none";
    }
}


  

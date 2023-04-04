

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementsByTagName('header')[0].classList.add("header-scrolled");
    document.getElementById("main-title").style.fontSize = "0px";
    document.getElementById("background-video").style.filter = "blur(75px)";
    document.getElementById("go-up").style.height = "4vw";
    document.getElementById("go-up").style.width = "4vw";
  } else {
    document.getElementsByTagName('header')[0].classList.remove("header-scrolled");
    document.getElementById("main-title").style.fontSize = "3.5rem";
    document.getElementById("background-video").style.filter = "blur(0px)";
    document.getElementById("go-up").style.height = "0px";
    document.getElementById("go-up").style.width = "0px";
  }
}

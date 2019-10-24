var x1 = window.matchMedia("(max-width: 310px)");
var x2 = window.matchMedia("(max-width: 767px)");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if(x1.matches){
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("header-nav").style.fontSize = "13px";
      document.getElementById("header-nav").style.height = "15vh";
      document.getElementById("header-nav").classList.add("navvisible");
      //document.getElementById("logo").style.height = "10vh";
      document.getElementById("hide").classList.add("hide");
    } else {
      document.getElementById("header-nav").style.fontSize = "15px";
      document.getElementById("header-nav").style.height = "13vh";
      document.getElementById("header-nav").classList.remove("navvisible");
      //document.getElementById("logo").style.height = "10vh";
      document.getElementById("hide").classList.remove("hide");
    }
  }if(x2.matches){
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("header-nav").style.fontSize = "13px";
      document.getElementById("header-nav").style.height = "15vh";
      document.getElementById("header-nav").classList.add("navvisible");
      document.getElementById("logo").style.height = "10vh";
      document.getElementById("hide").classList.add("hide");
    } else {
      document.getElementById("header-nav").style.fontSize = "15px";
      document.getElementById("header-nav").style.height = "13vh";
      document.getElementById("header-nav").classList.remove("navvisible");
      document.getElementById("logo").style.height = "10vh";
      document.getElementById("hide").classList.remove("hide");
    }
  }else{
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("header-nav").style.fontSize = "13px";
      document.getElementById("header-nav").style.height = "10vh";
      document.getElementById("header-nav").classList.add("navvisible");
      document.getElementById("logo").style.height = "50px";
      document.getElementById("hide").classList.add("hide");
    } else {
      document.getElementById("header-nav").style.fontSize = "15px";
      document.getElementById("header-nav").style.height = "15vh";
      document.getElementById("header-nav").classList.remove("navvisible");
      document.getElementById("logo").style.height = "75px";
      document.getElementById("hide").classList.remove("hide");
    }
  }
}


function addNavbarBackgroundColor(){
  document.getElementById("navbarbackgroundabout").style.background = "#50636a";
}
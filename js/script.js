window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("header-nav").style.fontSize = "13px";
    document.getElementById("header-nav").style.height = "10vh";
    document.getElementById("logo").style.height = "50px";
    document.getElementById("hide").classList.add("hide");
  } else {
    document.getElementById("header-nav").style.fontSize = "15px";
    document.getElementById("header-nav").style.height = "15vh";
    document.getElementById("logo").style.height = "75px";
    document.getElementById("hide").classList.remove("hide");
  }
}

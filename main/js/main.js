window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var content = document.getElementById("section");
var burgermenu = document.getElementById("burgermenu");
var burgermenu2 = document.getElementById("burgermenu2");
var check = false;
var check2 = false;
var sticky = header.offsetTop;
// alert(window.innerWidth);

function myFunction() {
  if (window.pageYOffset > sticky && window.innerWidth < 600) {
    header.classList.add("sticky");
    content.classList.add("pt-7");
  } else {
    header.classList.remove("sticky");
    content.classList.remove("pt-7");
  }
} 

function burger(){
  if(check == false){
    burgermenu.classList.add("onBurger");
    check = true;  
  }

  else {
    burgermenu.classList.remove("onBurger");
    check = false;
  }
}

function burger2(){
  if(check2 == false){
    burgermenu2.classList.add("onBurger");
    check2 = true;  
  }

  else {
    burgermenu2.classList.remove("onBurger");
    check2 = false;
  }
}

new WOW().init();
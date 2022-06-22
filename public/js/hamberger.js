document.addEventListener('DOMContentLoaded', () => {
let windowWidth = window.innerWidth;
// let windowSm = 500;

let humbergerbox = document.getElementById('hamburger_box');
let hamburger = document.getElementById("hamburger");
let glovalnav = document.querySelector('.gloval-nav');

if (windowWidth <= 500){


hamburger.addEventListener('click',function(){

  if(glovalnav.style.display == "none"){
   
      glovalnav.style.display = "flex";
      humbergerbox.classList.replace('fa-bars' , 'fa-xmark');

  }else{
 
    glovalnav.style.display ="none";
    humbergerbox.classList.replace('fa-xmark','fa-bars' );
  }

});

}});

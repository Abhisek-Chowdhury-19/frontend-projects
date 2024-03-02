var loader=document.querySelector('#loader');
setTimeout(()=>{
loader.style.display='none';
console.log("loader");

},1500)
const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

function hello() {
    var close =  document.querySelector('.mobilemenu')
    close.style.opacity=0
    close.style.visibility='hidden';
   }
   function show() {
     var unhide =  document.querySelector('.mobilemenu')
     unhide.style.opacity=1
     unhide.style.visibility='visible';
   }







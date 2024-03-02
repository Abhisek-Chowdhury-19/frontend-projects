const check=document.querySelector('.check');
const check1=document.querySelector('.check1');
const check2=document.querySelector('.check2');
const check3=document.querySelector('.check3');
const check4=document.querySelector('.check4');

function one() {
    check.style.opacity=0;
}
function two() {
    check1.style.opacity=0;
    
}
function three() {
    check2.style.opacity=0;
    
}
function four() {
    check3.style.opacity=0;
    
}
function five() {
    check.style.opacity=1;
    check1.style.opacity=1;
    check2.style.opacity=1;
    check3.style.opacity=1;
   

    
}
function slider() {
    
setTimeout(()=>{
    one();
    setTimeout(() => {
        two();
        setTimeout(() => {
            three();
            setTimeout(() => {
                four();
                setTimeout(() => {
                    five();
                    setTimeout(() => {
                        slider()
                    }, 10);
                }, 3000);
            }, 3000);
        }, 3000);
    }, 3000);
}, 3000);
}
slider();
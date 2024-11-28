//te marrim akses tek fotot
let slideImages = document.querySelectorAll('img');
//aksesojme butonin para dhe mbas
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');
// aksesojme pikat
let pikat = document.querySelectorAll('.pik');


var counter = 0;

//kodi per butonin para
next.addEventListener('click',slideNext);
function slideNext(){
    slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
    if(counter >= slideImages.length-1){
        counter = 0;
    }
    else{
        counter++;
    }
    slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';

}
// kodi per butoni mbas
prev.addEventListener('click',slidePrev);
function slidePrev(){
    slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
    if(counter == 0){
        counter = slideImages.length-1;
    }
    else{
        counter--;
    }
    slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
    
}

//auto slide
function autoSliding(){
    deletInterval = setInterval(timer, 1000);
    function timer(){
        slideNext();

    }
}
autoSliding();
 


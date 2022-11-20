'use strict';
const showCont = document.querySelector('.gameImg');
const content = document.querySelector('.game-content');

const showContent = function(){
    content.classList.remove('hidden');
    console.log("pes");
}

showCont.addEventListener('click',showContent);
document.fo
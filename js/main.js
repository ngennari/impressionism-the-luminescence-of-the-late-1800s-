const btnToggleOverlay = document.querySelector('.toggle-overlay');
const btnCloseOverlay = document.querySelector('.close-overlay');
const overlay = document.querySelector('.overlay');

function toggleOverlay(){
  overlay.classList.add('fade');
  setTimeout(function(){overlay.classList.add('hide')},200);
}

btnToggleOverlay.addEventListener('click',function(){
  overlay.classList.remove('hide');
  setTimeout(function(){overlay.classList.remove('fade')},100);
})

overlay.addEventListener('click',toggleOverlay);
btnCloseOverlay.addEventListener('click',toggleOverlay);
var contentPage = document.querySelector('.content_page');
var spaceShip = document.querySelector('#mi_spaceship_one');
var startButton = document.querySelector('#start_button');

startButton.addEventListener('click', ()=>{
    contentPage.innerHTML = spaceShip;
    document.querySelector('.interface_page').style.display = "none";
});
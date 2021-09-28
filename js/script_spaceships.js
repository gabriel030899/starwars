var shipDiv = document.querySelector('.space_images');
var nextButton = document.querySelector('#next_ship');
var backButton = document.querySelector('#back_ship');

// CHANGE SPACESHIPS
var spaceNum = 1;
// -- NEXT BUTTON
nextButton.addEventListener('click', ()=>{
    if(spaceNum >= 4){
        spaceNum = 1;
    }else{
        spaceNum = spaceNum+1;
    }
    shipDiv.innerHTML = `<img src="assets/img/spaceship${spaceNum}.png" id="mi_spaceship_one" alt="Spaceship-${spaceNum}">`;
});
// -- BACK BUTTON
backButton.addEventListener('click', ()=>{
    if(spaceNum <= 1){
        spaceNum = 4;
    }else{
        spaceNum = spaceNum-1;
    }
    shipDiv.innerHTML = `<img src="assets/img/spaceship${spaceNum}.png" id="mi_spaceship_one" alt="Spaceship-${spaceNum}">`;
});


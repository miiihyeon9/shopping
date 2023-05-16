const navLink = document.querySelector('.navLink1');
const outerClothes = document.querySelector('.outerClothes');

navLink.addEventListener('click',menu);

function menu(){
        outerClothes.classList.toggle('active');
    }



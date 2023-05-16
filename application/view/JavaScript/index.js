const menuBtn = document.querySelector('.menuBtn');

const listGroup = document.querySelector('.listGroup');
const sideList = document.getElementsByClassName('sideList');

// function menu(tog){
//         tog.classList.toggle('active');
//     }


menuBtn.addEventListener('click',menu)
// navLink[i].addEventListener('mouseout',()=>menu(listGroup[i]));

for (let i = 0; i < sideList.length; i++) {
      sideList[i].addEventListener('mouseover', sideListOver);
      sideList[i].addEventListener('mouseout',sideListOut);
    }

function menu(){
        listGroup.classList.toggle('active');
    }

    
    function sideListOver(){
        this.style.color ="#FF6347";
    }
    function sideListOut(){
        this.style.color ="black";
    }


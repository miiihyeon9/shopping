const menuBtn = document.querySelector('.menuBtn');
const list = document.querySelector('.list');
const listGroup = document.querySelector('.listGroup');
const sideList = document.getElementsByClassName('sideList');
const delBtn = document.querySelector('.delBtn');
const logoutBtn = document.querySelector('.logoutBtn');
function menu(){
        listGroup.classList.toggle('active');
        list.classList.toggle('active');
}

function sideListOver(){
    this.style.color ="#FF6347";
}

function sideListOut(){
    this.style.color ="black";
}



menuBtn.addEventListener('click',menu);


for (let i = 0; i < sideList.length; i++) {
    sideList[i].addEventListener('mouseover', sideListOver);
    sideList[i].addEventListener('mouseout',sideListOut);
}





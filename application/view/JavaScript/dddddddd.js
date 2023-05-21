const category = document.querySelector('.category');
const booksHover = document.querySelector('.booksHover');
// const listGroup = document.querySelector('.listGroup');
// const sideList = document.getElementsByClassName('sideList');
// const delBtn = document.querySelector('.delBtn');
// const logoutBtn = document.querySelector('.logoutBtn');

function menu(){
    booksHover.classList.toggle('active');
}
category.addEventListener('click',menu);

// function sideListOver(){
//     this.style.color ="#FF6347";
// }

// function sideListOut(){
//     this.style.color ="black";
// }





// for (let i = 0; i < sideList.length; i++) {
//     sideList[i].addEventListener('mouseover', sideListOver);
//     sideList[i].addEventListener('mouseout',sideListOut);
// }





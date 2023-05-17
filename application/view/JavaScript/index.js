const menuBtn = document.querySelector('.menuBtn');
const list = document.querySelector('.list');
const listGroup = document.querySelector('.listGroup');
const sideList = document.getElementsByClassName('sideList');
const delBtn = document.querySelector('.delBtn');

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

// function delBtnAlarm(){
//     alert("탈퇴 완료되었습니다.");
//     // Location.href="/shop/main";
// }

menuBtn.addEventListener('click',menu);
// navLink[i].addEventListener('mouseout',()=>menu(listGroup[i]));

for (let i = 0; i < sideList.length; i++) {
    sideList[i].addEventListener('mouseover', sideListOver);
    sideList[i].addEventListener('mouseout',sideListOut);
}


// delBtn.addEventListener('click',delBtnAlarm);


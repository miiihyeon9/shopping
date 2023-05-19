const menuBtn = document.querySelector('.menuBtn');
const list = document.querySelector('.list');
const listGroup = document.querySelector('.listGroup');
const sideList = document.getElementsByClassName('sideList');
const userNowpw = document.querySelector('#user_nowpw');
const showPwbtn = document.querySelector('.showPw');
let pwFlg = true;

// 상단바 클릭했을 때 상세 카테고리
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
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

// 수정페이지 눈 모양
function showPw(){
    this.classList.toggle('active');
    if(pwFlg){
    userNowpw.setAttribute('type', 'text');
    }else{
    userNowpw.setAttribute('type', 'password');
    }
    pwFlg = !pwFlg;
}


menuBtn.addEventListener('click',menu);
showPwbtn.addEventListener('click',showPw);

for (let i = 0; i < sideList.length; i++) {
    sideList[i].addEventListener('mouseover', sideListOver);
    sideList[i].addEventListener('mouseout',sideListOut);
}





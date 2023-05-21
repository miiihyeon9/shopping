


const menuGroup = document.querySelectorAll('.menuGroup');
const menuList = document.querySelectorAll('.menuList');
const header = document.getElementsByTagName('header');
const aTag = document.getElementsByTagName('a');

function menu(sidehover) {
    sidehover.classList.toggle('active');
}
function removeMenu(side){
    side.classList.remove('active');
}

// 사이드바
menuGroup[0].addEventListener('mouseover', () => {
    menu(menuList[0]);
    removeMenu(menuList[1]);
    removeMenu(menuList[2]);
});

menuGroup[1].addEventListener('mouseover', () => {
    menu(menuList[1]);
    removeMenu(menuList[0]);
    removeMenu(menuList[2]);
});
menuGroup[2].addEventListener('mouseover', () => {
    menu(menuList[2]);
    removeMenu(menuList[0]);
    removeMenu(menuList[1]);
});
// menuList[0].addEventListener('mouseout',()=>{
//     menuList[0].classList.remove('active');
// });
// menuList[1].addEventListener('mouseout',()=>{
//     menuList[1].classList.remove('active');
// });
// menuList[2].addEventListener('mouseout',()=>{
//     menuList[2].classList.remove('active');
// });
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

for(let i =0;i<aTag.length;i++){
    aTag[i].addEventListener('mouseover',()=>{
        aTag[i].style.color="#929292";
    })
}

for(let j =0;j<aTag.length;j++){
    aTag[j].addEventListener('mouseleave',()=>{
        aTag[j].style.color="#010101";
    })
}

header[0].addEventListener('mouseleave',()=>{
    for(let a =0;a<menuList.length;a++){
        menuList[a].classList.remove('active');
    }
});
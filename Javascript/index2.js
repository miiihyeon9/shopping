function menu(){
    // let menu = document.querySelector('.offCanGroup');
    let sideMenu = document.querySelector('.offCanGroup');
    // let sideList = document.querySelector('.offCanList');
    // menu.classList.toggle('active');
    
    sideMenu.classList.toggle('active');
    // sideList.classList.toggle('active');
    // console.log(sideList);
}

const navBtn = document.querySelector('.navBtn');
navBtn.addEventListener('click',menu);



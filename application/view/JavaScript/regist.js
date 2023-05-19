const idCheckBtn = document.querySelector('.idCheckBtn');
const id = document.getElementById('user_id');
const url = "/api/user?user_id="+id.value;
const idSpan = document.getElementById('errMsgId');
let apiData = null;

// const debounce = (func)=>{
//     let timer;
//     return (e)=>{
//         if(timer){
//             clearTimeout(timer);
//         }
//         timer = setTimeout(func,500);
//     };
// };



const checkDuplication=() =>{
    
    // API
    
    fetch(url)
    .then(data=>{
        // Response Status 확인  (200번 외에는 에러 처리)
        if(data.status !== 200){
            throw new Error(data.status + ' : API Response Error');
        }
        return data.json();
    })
    .then(apiData =>{
        if(apiData["flg"] === "1"){
            idSpan.innerHTML = apiData["msg"];
            idSpan.style.color = "red";
        }else if(apiData["flg"] === "2"){
            idSpan.innerHTML = apiData["msg"];
            idSpan.style.color = "red";
        }else{
            idSpan.innerHTML = apiData["msg"];
            idSpan.style.color = "green";
        }
    })
    .catch(error=>alert(error.message));
}


const throttle = () =>{
    let timer;
// undefined (false)
    return() => {
        if (!timer){
            timer = setTimeout(()=>{
            timer = null;
            },1000); // 1초뒤에 timer를 null로 바꿔주는 setTimeout 콜백함수를 호출하는걸 timer에 넣어주고
            checkDuplication(); // checkDuplication()실행  => 1초동안은 timer가 null이 아니기 때문에 실행이 안됨. 
        }
    }
}


// idCheckBtn.addEventListener('click',debounce(checkDuplication));

idCheckBtn.addEventListener('click',throttle(checkDuplication));
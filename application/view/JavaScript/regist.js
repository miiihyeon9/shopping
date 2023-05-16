
function checkDuplication(){
    const id = document.getElementById('user_id');
    const url = "/api/user?user_id="+id.value;
    let apiData = null;

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
        const idSpan = document.getElementById('errMsgId');
        if(apiData["flg"] === "1"){
        idSpan.innerHTML = apiData["msg"];
        idSpan.style.color = "red";
        }else{
            idSpan.innerHTML = apiData["msg"];
            idSpan.style.color = "green";
        }
    })
    .catch(error=>alert(error.message));


}

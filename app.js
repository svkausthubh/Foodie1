let rate=document.getElementById("rate");
let ratebtn=document.getElementById("rate-btn");

ratebtn.addEventListener("click",changeRate);

function changeRate(){
    let x = prompt('Rate the item');
    rate.innerText=x;
}

const open=document.getElementById('sign');
const close=document.getElementById('pclose');
const popup=document.getElementById('popup');

sign.addEventListener('click',function(e){

    e.preventDefault();
    popup.classList.add('active');
})
close.addEventListener('click',() => {
popup.classList.remove('active');

})
window.onload = function () {
    let preloader = document.getElementById('preloader');
    preloader.style.display = 'none';
}
// popup.addEventListener('click',()=>{
//     popup.classList.remove('active');
// })

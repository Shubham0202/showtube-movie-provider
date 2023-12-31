const s1 = document.querySelectorAll('.s1');
const drop = document.querySelectorAll('.drop-menu');
s1.forEach((season,index)=>{
    season.addEventListener('click',()=>{
        drop[index].classList.toggle('active-drop-down');
    })
})



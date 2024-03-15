const activateContent = document.querySelectorAll('.activate-content');
const loadBtns = document.querySelectorAll('.load-btn');
const showAll  = document.querySelectorAll('.show-all');
activateContent.forEach((mode,index)=>{
    mode.addEventListener('click',()=>{
        activateContent.forEach(mode=>mode.classList.remove('content-shift-bg'));
        mode.classList.add('content-shift-bg');
        // hiide and show the btn web and movie
        loadBtns.forEach(btn=> btn.classList.add('hidden'));
        loadBtns[index].classList.remove('hidden');

        // show all web and mv
        showAll.forEach(btn=>btn.classList.add('hidden'));
        showAll[index].classList.remove('hidden');
    })
})
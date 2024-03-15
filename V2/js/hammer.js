const navbar = document.querySelector('.nav-options'); 
const hammer = document.querySelector('.hammer');
const h1 = document.querySelector('.h1');
const h2 = document.querySelector('.h2');
const h3 = document.querySelector('.h3');
const closeList = document.querySelector('.close-ul-list');

hammer.addEventListener('click',toggleNavigation);
closeList.addEventListener('click',toggleNavigation);

function toggleNavigation()
{   
    navbar.classList.toggle('active-nav');

    h1.classList.toggle('ac-h1');
    h2.classList.toggle('ac-h2');
    h3.classList.toggle('ac-h3');

    //remove search when click on hammer
    const removeSrch = document.querySelector('.take-input');
    removeSrch.classList.remove('active-take-input');
}
const hammer = document.querySelector('.hammer');
const navList = document.querySelector('.nav-list');
const mainContainer = document.querySelector('.main');
const hammerStickBefore = getComputedStyle(document.documentElement).getPropertyValue('--ham-before');
const hammerStickAfter = getComputedStyle(document.documentElement).getPropertyValue('--ham-after');
hammer.addEventListener('click', () => {
    navList.classList.toggle('active-nav-list');
    if(navList.classList.contains('active-nav-list'))
    {
        document.documentElement.style.setProperty('--ham-after','20px');
        document.documentElement.style.setProperty('--ham-before','30px');
    }
    else{
        document.documentElement.style.setProperty('--ham-after','30px');
        document.documentElement.style.setProperty('--ham-before','20px');
    }
});

mainContainer.addEventListener('click', () => {
        navList.classList.remove('active-nav-list');
        if(!navList.classList.contains('active-nav-list'))
        {
            document.documentElement.style.setProperty('--ham-after','30px');
            document.documentElement.style.setProperty('--ham-before','20px');
        }
});
mainContainer.addEventListener('touchmove', () => {
        navList.classList.remove('active-nav-list');
        if(!navList.classList.contains('active-nav-list'))
        {
            document.documentElement.style.setProperty('--ham-after','30px');
            document.documentElement.style.setProperty('--ham-before','20px');
        }
});

// typeWritter
const dynamicText = document.querySelector('.c-gradient');
window.addEventListener('DOMContentLoaded',()=>{
    let frstWord = setInterval(() => {
        if(dynamicText.textContent == "Movies")
        dynamicText.textContent="WebSeries";
        else if(dynamicText.textContent == "WebSeries")
        dynamicText.textContent="Premium Apps";
        else
        dynamicText.textContent="Movies";
    }, 3000);
    
});

//copyright current year

const date = new Date();
const currentYear = date.getFullYear();
const sinceYear = document.querySelector('.since-year');
sinceYear.textContent = currentYear;
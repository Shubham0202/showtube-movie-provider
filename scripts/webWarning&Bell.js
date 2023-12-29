const broweserWarning = document.querySelector('.browser-warning');
const webAlerts = document.querySelector('.web-alerts');
const warningPara = document.querySelector('.warning-para');
const CloseBtn = document.querySelector('.cross-btn');
CloseBtn.addEventListener('click',()=>{
    webAlerts.style.display="none";
    let setLocal =localStorage.setItem('weAlert',"true");
})
warningPara.addEventListener('click',()=>{
    webAlerts.style.display="none";
    let setLocal =localStorage.setItem('weAlert',"true");
})
let getWebLocal = localStorage.getItem('weAlert');

if(getWebLocal == 'true')
{
        webAlerts.style.display="none";
    }


    //bell script

    const bell = document.querySelector('.not-bell');
    const addedMoviesList = document.querySelector('.new-added-movies');
    bell.addEventListener('click',()=>{
        addedMoviesList.classList.toggle('hide-new-added-movies');
        addedMoviesList.classList.toggle('add-animation-in-notifications');
       
    })

    // notifications no yet msg 

    const notifications = document.querySelectorAll('.added-movie');
   if(notifications.length < 2)
   {
    let para =document.createElement('p');
    para.className='no-notifications';
    para.innerText = 'No Notifications';
    let gridDiv = document.createElement('div');
    gridDiv.className = 'grid-item';
    gridDiv.append(para);
    addedMoviesList.append(gridDiv);
   }
   
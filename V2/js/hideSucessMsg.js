const hideSucessContainer = document.querySelector('.show-success-msg');
const msg = document.querySelector('.success-msg');
const cross = document.querySelector('.cross');

try{
    cross.addEventListener('click',hideSucess);

}catch(er){}

function hideSucess()
{
    hideSucessContainer.removeChild(msg);
}



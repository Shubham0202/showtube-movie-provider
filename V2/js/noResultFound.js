window.addEventListener('DOMContentLoaded',checkMovieResult);

function checkMovieResult()
{

const movieData = document.querySelector('.mv-container');

let checkcardCount=movieData.children.length;
if(checkcardCount <1)
movieData.innerHTML='<div class="warning"><h3>No Movie Found For This Result. 🥺</h3> <p>Check the spelling of search result If you are enter correct name but no result found then Request the movie / webseries. 😶‍🌫️</p><h4>⚠️Do not give the space after last of the word.</h4></div>';
}
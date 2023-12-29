//disable right click
// window.addEventListener('contextmenu',(e)=>{
//     e.preventDefault();
//     if(window.innerWidth >= 1000)
//     alert('right click disabled');
// })

const hammer = document.querySelector('.hammer');
//search-bar line no 58 
const searchContent = document.querySelector('.search-bar');
hammer.addEventListener('click',()=>{
    const inactiveMenu = document.querySelector('.menu-list');
    inactiveMenu.classList.toggle('inactive-menu');

    const inactiveCloseMenu = document.querySelector('.close-menu');
    inactiveCloseMenu.classList.remove('inactive-close-menu');

    //remove search bar 
    searchContent.classList.remove('inactive-search-bar');
    //remove notifyer
    try{
        addedMoviesList.classList.add('hide-new-added-movies'); 
        addedMoviesList.classList.remove('add-animation-in-notifications');
    }catch(err){

    }
    
});
const inactiveCloseMenu = document.querySelector('.close-menu');
inactiveCloseMenu.addEventListener('click',()=>{
    const inactiveMenu = document.querySelector('.menu-list');
    inactiveMenu.classList.toggle('inactive-menu');
});

// langs 

// ALl


//search movies
    const searchInput = document.getElementById('search');

    const searchBar = document.querySelector('.search-bar');
    const content= document.querySelectorAll('.content');
const cTitle = document.querySelectorAll('.content-title');
searchInput.addEventListener('keyup',(event)=>{
    if(event.key== "Enter")
    {
        searchInput.blur();
        searchContent.classList.remove('inactive-search-bar');
    }
    let  search = searchInput.value;
    const upperCaseSearch = search.toUpperCase();
    search = upperCaseSearch;
    console.log(search)
    cTitle.forEach((title,index)=>{
        const upperCaseTitle = title.textContent.toUpperCase();
        if(upperCaseTitle.includes(search))
            content[index].style.display="flex";
        else
            content[index].style.display="none";
            
        })
       //remove notifyer
    try{
        addedMoviesList.classList.add('hide-new-added-movies'); 
        addedMoviesList.classList.remove('add-animation-in-notifications');
    }catch(err){
        
    }
    
    })
    

//search bar toggle
const searchBtn = document.querySelector('.searchBtn').addEventListener('click',(sBtn)=>{
    searchContent.classList.toggle('inactive-search-bar');
    searchInput.focus();
})

//loader

window.addEventListener('load',()=>{
    const loader = document.querySelector('.loader');
    try{
        loader.style.display='none';
    }catch(err){

    }
})
window.addEventListener('unload',()=>{
    const showWeb = document.querySelector('.show-web');
    try{
        showWeb.style.display="none";
    }catch(err){

    }
})

//hide search when user click on main container

const mainContainer = document.getElementById('containerr');
//for mobile
mainContainer.addEventListener('touchmove',()=>{
    searchContent.classList.remove('inactive-search-bar');
        //remove notifyer
        try{
            addedMoviesList.classList.add('hide-new-added-movies'); 
            addedMoviesList.classList.remove('add-animation-in-notifications');
        }catch(err){
            
        }
        
})

mainContainer.addEventListener('click',()=>{
    searchContent.classList.remove('inactive-search-bar');
        //remove notifyer
        try{
            addedMoviesList.classList.add('hide-new-added-movies'); 
            addedMoviesList.classList.remove('add-animation-in-notifications');
        }catch(err){
            console.log("error handle notifyer");
        }
        
})

// share app
const shareApp = document.querySelector('.share-app');
shareApp.addEventListener('click',(e)=>{
    
        var text = "ShowTube \nAll Latest released Movies,\n Webseries, south movies, Marathi, Tamil, telegu movies Download all premium apps for free \n\n App download Link: https://download.showtube.live/";
        var encodedText = encodeURIComponent(text);
        var url = "https://wa.me/?text=" + encodedText;
        window.open(url, "_blank");
      
})



// share app
const shareApp = document.querySelector('.share-app');
shareApp.addEventListener('click',(e)=>{
        e.preventDefault();
        var text = "ShowTube \nAll Latest released Movies,\n Webseries, south movies, Marathi, Tamil, telegu movies Download all premium apps for free \n\n App download Link: https://download.showtube.live/";
        var encodedText = encodeURIComponent(text);
        var url = "https://wa.me/?text=" + encodedText;
        window.open(url, "_blank");
      
})

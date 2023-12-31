const episodeLinks = document.querySelectorAll('.ep-links');
const linkCover = document.querySelectorAll('.link-cover');

linkCover.forEach((linkCv,index)=>{
    linkCv.addEventListener('click',()=>{
        episodeLinks.forEach(eplink=>{
            
        })
        let url=episodeLinks[index].getAttribute('href');
        
        if(url.includes(' ')){

        let splitUrl = url.split('');
        let position = splitUrl.indexOf(' ');
        // console.log(splitUrl,position);
        let popedEmptyString= splitUrl.splice(position,1);
        let joinSplitUrl = splitUrl.join('');
        // console.log(popedEmptyString,splitUrl,joinSplitUrl);
         window.open(joinSplitUrl,'_blank');

        }
       
        // console.log(url)
    })
})

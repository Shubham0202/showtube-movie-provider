const urls = document.querySelectorAll('.ep-links');

urls.forEach(url=>{
    let urlHref=url.getAttribute('href');
    let UrlArray = urlHref.split('');
    if(urlHref == '' || urlHref == null)
        url.style.display="none";

})
    
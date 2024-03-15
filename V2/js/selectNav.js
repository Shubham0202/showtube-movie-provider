const fItems = document.querySelectorAll(".f-items");
const fNames = document.querySelectorAll(".f-name");

function checkPage(pageName)
{
    let hs= location.pathname
    let splitHs= hs.split('/');
    const getPageName = splitHs[splitHs.length - 1];
    console.log(getPageName);
    
    if(pageName == getPageName)
    fItems[0].classList.add('active-f-items');
}
checkPage('index.php');
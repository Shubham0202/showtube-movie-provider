const mvQuality = document.querySelectorAll('.mv-quality');
const allDownlaods = document.querySelectorAll('.mv-download');
let counter = 0;
allDownlaods.forEach((download,index)=>{
    let href=download.getAttribute('href');
    // console.log(href.length);
    //or we can also use this instead of https-> if(href.length>0)
    if(!href.includes('https'))
    mvQuality[index].style.display="none";

});

    //if no links are uploaded in table
    //just remembering things
    //logic is display:none; count is 22 then show msg.
    
    const showMsg = "No Download links are available";
    const table = document.querySelector(".download-table");
    const tableName = document.querySelector("tbody");
    let tbody = tableName.children;
    let arrayTBody = Array.from(tbody);
    let t2 = Array(22);
    arrayTBody.forEach((tr,i) => {
        t2[i] = tr.getAttribute("style");
    });

for (let i = 1; i < t2.length; i++) {
    if(t2[i] == "display: none;")
        counter++;
}

// console.log(counter);
if(counter == 22)
{
    table.removeAttribute('class');
    table.innerHTML= showMsg;
}


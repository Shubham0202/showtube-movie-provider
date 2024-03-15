const mvData = document.querySelector('.mv-data');
const search = document.querySelector('#srchmv');

mvData.addEventListener('click', () => {
    takeInput.classList.remove('active-take-input');
    search.blur();
    // search.value="";
});

try {
    // back btn
    const backBtn = document.querySelector('.bck-btn');
    backBtn.addEventListener('click', goBack);

    //search and details file only 
    const takeInput2 = document.querySelector('.take-input2');
    const showSearch2 = document.querySelector('.srch-btn2');
    showSearch2.addEventListener('click', visibleSearch);
    function visibleSearch() {
        takeInput2.classList.toggle('active-take-input2');
        search.focus();
        if (!takeInput2.classList.contains("active-take-input2"))
        search.blur();
    }
} catch (error) {
    // console.log(error);
}

function goBack() {
    if(history.length >1)
    history.back();
    else
    location.href='https://freemovie.showtube.live'; //showtube main page
}


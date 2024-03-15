//back btn
const backBtn = document.querySelector('.bck-btn');
//Normal back function
function goBack() {
    if (history.length > 1)
        history.back();
    else
        location.href = 'https://freemovie.showtube.live/'; //showtube mainpage url
}
// Function to check if the next and previous pages are the same
function areNextAndPreviousPagesSame() {
    var currentPageURL = window.location.href;

    // Check  there is a previous page in the browser history
    if (window.history.length > 2) {
        // Get the URL of the previous page
        var previousPageURL = document.referrer;

        // Compare the URLs to check if they are the same
        if (currentPageURL === previousPageURL) {
            return true;
        }
    }

    return false;
}

var samePage = areNextAndPreviousPagesSame();
backBtn.addEventListener('click', () => {

    if (samePage) {
        //   console.log("The next and previous pages are the same.");
        location.href = 'https://freemovie.showtube.live/';//main page url
    } else {
        //   console.log("The next and previous pages are different.");
        goBack();
    }
});

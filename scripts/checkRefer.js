const showWeb = document.querySelector('.show-web');
const showAlert = document.querySelector('.show-alert');
function checkReferrer() {
    const referrer = document.referrer.toLowerCase();
    const expectedReferrer = "https://example.com"; 
  
    const webRefer = "https://showtube.xyz/langs/webseries.php"; 
    const hindiRefer = "https://showtube.xyz/langs/hindi.php"; 
    const englishRefer = "https://showtube.xyz/langs/english.php"; 
    const southRefer = "https://showtube.xyz/langs/southmovie.php"; 
    const  marathiRefer= "https://showtube.xyz/langs/marathi.php"; 
    const upcomingRefer = "https://showtube.xyz/newrelease.php"; 
    const movieRequestRefer = "https://showtube.xyz/filerequest.php"; 
    const modeApkRefer = "https://showtube.xyz/modeapk.php"; 

    const aboutRefer = "https://showtube.xyz/slider/about.php"
    const privacyRefer = "https://showtube.xyz/slider/privacy.php"
    const feedbackRefer = "https://showtube.xyz/slider/feedback.php"

    if (referrer.includes(expectedReferrer)) {
      showAlert.classList.add('hide-alert');
      showWeb.classList.remove('hide-web');
    } 
    else if(referrer.includes(webRefer) || referrer.includes(hindiRefer) || referrer.includes(englishRefer) || referrer.includes(southRefer) || referrer.includes(marathiRefer) || referrer.includes(upcomingRefer) || referrer.includes(movieRequestRefer) || referrer.includes(modeApkRefer))
    {
      showWeb.classList.remove('hide-web');
      showAlert.classList.add('hide-alert');
    }
    else {
      showAlert.classList.add('hide-alert'); //remove it when your work is done. and uncomment the below script 
      // showAlert.classList.remove('hide-alert');
      // showWeb.classList.add('hide-web');
    }
  }
  checkReferrer();
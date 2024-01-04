// main admin panel 
const dash= document.querySelector('.dash');
const boxes= document.querySelectorAll('.box');
// display the admin section verities
const showFeature = document.querySelectorAll('.show-features');
const backButton = document.querySelectorAll('.back-btn');
 backButton.forEach(backbtn=>{
     backbtn.addEventListener('click',()=>{
         dash.style.display="block";
         showFeature.forEach(addClass=>{
            addClass.classList.add('inactive-features');
         })
        })
    })

boxes.forEach((box,index)=>{
    box.addEventListener('click',()=>{
        dash.style.display="none";
        try{
            showFeature[index].classList.remove('inactive-features');
        }catch(err){
            dash.style.display="block";
        }
    })
})


//show sidebar included tables by their indexes .
const displaySidebar = document.querySelector('.display-sideOp');
const showSidebar = document.querySelectorAll('.show-sidebar');
const sideItems = document.querySelectorAll('.s-items');
const sideDash = document.querySelector('.dash-item');

sideItems.forEach((sItem,index)=>{
    sItem.addEventListener('click',()=>{
        dash.style.display="none";
        sideItems.forEach(sItem=>{
            sItem.classList.remove('s-items-border');
        })
        sItem.classList.add('s-items-border');
        showSidebar.forEach(sBar=>{
            sBar.classList.add('inactive-sidebar');
        })
        try
        {
            showSidebar[index].classList.remove('inactive-sidebar');
            sideDash.classList.remove('s-items-border');
        }
        catch(err){

        }
    })
})


//show dashboard

sideDash.addEventListener('click',()=>{
    dash.style.display="block";
    sideDash.classList.add('s-items-border');
    
    sideItems.forEach(sItem=>{
        sItem.classList.remove('s-items-border');
    })

    showSidebar.forEach(s=>{
        s.classList.add('inactive-sidebar');
    })
})

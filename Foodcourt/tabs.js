let tabHeader = document.querySelectorAll('.tabHeader');

tabHeader.forEach((button) => {
    button.onclick =  changeTabHeader;
    
});

function changeTabHeader() {
   let tabnumber = parseInt(this.dataset.tab);

   document.querySelector('.active-tab').classList.remove('active-tab');
   this.classList.add('active-tab');
   
   switch(tabnumber){
        case 1:
           changeTabSection(tabnumber);
           break;
        case 2:
            changeTabSection(tabnumber);
            break;
        case 3:
            changeTabSection(tabnumber);
            break;
        case 4:
            changeTabSection(tabnumber);
           break;
        case 5:
           changeTabSection(tabnumber);
           break;
        case 6:
            changeTabSection(tabnumber);
           break;
        case 7:
            changeTabSection(tabnumber);
           break;
        case 8:
            changeTabSection(tabnumber);
           break;
        case 9:
            changeTabSection(tabnumber);
           break;
        default:
           break;
    

   }
}

function changeTabSection(tabnumber){
    let currentTab= document.querySelector('.show-tab');
    currentTab.classList.remove('show-tab');
    currentTab.classList.add('hide-tab');

    
 
    let newSection = document.getElementById('tabSection-' + tabnumber);
    
    
    
    newSection.classList.remove('hide-tab');
    newSection.classList.add('show-tab');
}
let openNav = document.querySelector('.navigation-slider');
let closeNav = document.querySelector('.close-navigation-slider');
let navSliderSection = document.querySelector('.navigation-slider-section');
let navLinks =document.querySelectorAll('.nav-links');

openNav.onclick = function(){
    navSliderSection.classList.remove('closeNav');
    navSliderSection.classList.add('openNav');
}

closeNav.onclick = closeNavSlider;
    

navLinks.forEach((link) => {
    link.onclick = closeNavSlider;

});

function closeNavSlider(){
    navSliderSection.classList.remove('openNav');
    navSliderSection.classList.add('closeNav');
}


//RESTAURANT MENU BUTTONS
function mybutton(){
    location.replace("menu.html");
}

function mybutton_KFC(){
    window.location("https://www.kfcpakistan.com/");
}
function mybutton_MC(){
    window.location("https://mcdonalds.com.pk/our-menu/");
}
function mybutton_chachajee(){
    window.location("https://www.restaurantmenu.pk/chachajee-restaurant-menu/");
}
function mybutton_Subway(){
    window.location("https://www.subway.com/en-PK/MenuNutrition/Menu");
}

function mybutton_Baskin(){
    window.location("https://www.baskinrobbins.com/en/flavor-of-the-month");
}
function mybutton_Fibbi(){
    window.location("http://fibbicafe.com/menu/");
}

function mybutton_BurgerLab(){
    window.location("https://burgerlab.com.pk/menu/");
}


//RESTAURANT LISTING BUTTONS
function mybutton_continental_italian_res(){
    window.location("continental_italian_res.html");
}

function mybutton_chinese_res(){
    window.location("chinese_res.html");
}

function mybutton_pakistani_res(){
    window.location("pakistani_res.html");
}

function mybutton_fastfood_res(){
    window.location("fastfood_res.html");
}
var menu = document.querySelector('nav ul');
var menuicon = document.querySelector('nav .menu-icon');
var menuiconimg = document.querySelector('nav .menu-icon img');

menuicon.addEventListener('click',()=>{
    menu.classList.toggle('active');
    if(menuiconimg.getAttribute("src") == 'img/menu.png'){
        menuiconimg.setAttribute("src","img/close.png")
    }else{
        menuiconimg.setAttribute("src","img/menu.png")
    }
});

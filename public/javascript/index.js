

function openMenu(){

    document.getElementById('mobileMenuButton').style.display='none';
    let menuContainer=document.getElementById('mobileMenuLinksContainer');
    menuContainer.style.display='block';
    setTimeout(() => {
        menuContainer.style.transform='translateX(0)';  
        menuContainer.style.opacity='1';    
    }, 200);
    
}

function closeMenu(){
    let menuContainer=document.getElementById('mobileMenuLinksContainer');
    menuContainer.style.transform='translateX(-20px)';  
    menuContainer.style.opacity='0';  
    
    setTimeout(() => {
        menuContainer.style.display='none';
        document.getElementById('mobileMenuButton').style.display='block';
    }, 200);
}
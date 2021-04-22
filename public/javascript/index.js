
let productContainers=document.getElementsByClassName('product-container');
let l=productContainers.length;
let c;

for (c=0;c<l;c++){
    if(c!=0){
        let path='./images/products'+c+'.png';
        productContainers[c].style.backgroundImage='url('+path+')';

    }
}

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
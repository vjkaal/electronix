document.querySelector('html').onclick = start();

function start(){
    
    // starting display
    setheader();
    hideAll();

    show(1);
    displayItems_1("t1d",0);

    alert("Click on heading of each item to know more...\n\n\nThank you,\nTeam Electronix");
}


// function to set src and links in header
function setheader(){
    
    // image src changed here
    let imgArr = document.querySelectorAll('img[class="hImg"]');
    // console.log(imgArr.length);
    
    for(let i=0;i<=imgArr.length+1;i++){
        // console.log(document.getElementsByClassName('hImg')[i].src);
        
        // replaced 'produts/' with empty string
        document.getElementsByClassName('hImg')[i].src = document.getElementsByClassName('hImg')[i].src.replace("products/","");
        // console.log(document.getElementsByClassName('hImg')[i].src);
    }

    // link href changed here

    // this section is for links of pages not inside product dir
    let link = document.querySelectorAll('.changeHREF');
    console.log(link.length);

    for(let i=0;i<link.length;i++){
        // console.log(document.getElementsByClassName('changeHREF')[i].href);

        document.getElementsByClassName('changeHREF')[i].href = document.getElementsByClassName('changeHREF')[i].href.replace("products/", "");

        // console.log(document.getElementsByClassName('changeHREF')[i].href);
    }

}


// begin the page by hiding all available items
function hideAll(){
    document.querySelector('.bottombar').style.display = 'none';
    let n = document.querySelector('.mainContent').childElementCount;
    // console.log(n);
    n-=2; //first 2 elements won't affect the loop now
    for(let i=0;i<n;i++){
        document.getElementsByClassName('display')[i].style.display = 'none';
    }
}


// button works


function show(i){
    document.querySelector('.bottombar').style.display = 'block';

    let btmchild = document.querySelector('.bottombar').childElementCount;
    console.log(btmchild);
    for(let i=0; i<btmchild; i++){
        document.getElementsByClassName('btmChild')[i].style.display = 'none';
        console.log("called");
    }


    var show = ".t"+i+"b";
    const showCount = document.querySelectorAll(show);
    console.log(showCount.length);
    
    show = show.replace('.', '');
    console.log(show);
    for(let i=0;i<showCount.length;i++){
        document.getElementsByClassName(show)[i].style.display = 'block';
        console.log('here');
    }
}




/*

    functions to display items

*/


function setActive(str,x){

    const strClass = "."+str;
    console.log(strClass);

    const strCount = document.querySelectorAll(strClass);
    console.log(strCount.length);


    for(let i=0;i<strCount.length;i++){
        document.getElementsByClassName(str)[i].setAttribute("class",str);
    }

    const activeClass = str+" active";
    document.getElementsByClassName(str)[x].setAttribute("class",activeClass);
}


function displayItems_1(str,x){

    const displayCount = document.querySelectorAll('.display');
    console.log(displayCount.length);


    for(let i=0;i<displayCount.length;i++){
        document.getElementsByClassName('display')[i].style.display = 'none';
    }

    str = str.toString();
    console.log(str);
    console.log(typeof str);

    if(window.matchMedia("(min-width: 60rem)").matches) document.getElementsByClassName(str)[x].style.display = 'flex';
    else document.getElementsByClassName(str)[x].style.display = 'block';
}

function displayItems_2(fp,str,a,b){
    
    var strClass = "."+str;
    const displayCount = document.querySelectorAll(strClass);
    console.log(displayCount.length);

    console.log(a);
    console.log(b);

    var fpClass = "."+fp;
    const firstPreference = document.querySelectorAll(fpClass);
    console.log(firstPreference.length);

    for(let i=0;i<firstPreference.length;i++){

        var className = document.getElementsByClassName(fp)[i].getAttribute("class").toString();
        if(className.includes("active") && i == 0){
            displayItems_1(str,a);
        }
        else if(className.includes("active") && i == 1){
            displayItems_1(str,b);
        }
    }

    // if(classVar.includes("active"))
}
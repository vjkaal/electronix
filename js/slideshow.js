document.querySelector('html').onclick = documentDesign();
const imgArr = ["#img1", "#img2", "#img3", "#img4","#img5","#img6", "#img7", "#img8", "#img9"];
//if length of array is changed plz also change it on line 11

function documentDesign() {
    start();
    hoverable(0,8);
}


function start() {
    // console.log("yes here!")
    document.querySelector('#img1').style.display = 'inline';
    document.querySelector('#img1').style.width = '90%';
    document.querySelector('#img2').style.display = 'none';
    document.querySelector('#img3').style.display = 'none';
    document.querySelector('#img4').style.display = 'none';
    document.querySelector('#img5').style.display = 'none';
    document.querySelector('#img6').style.display = 'none';
    document.querySelector('#img7').style.display = 'none';
    document.querySelector('#img8').style.display = 'none';
    document.querySelector('#img9').style.display = 'none';
}

document.querySelector('#prev').onclick = function prev() {
    setButtons();
    // console.log("left");
    let n = getCurrent();
    if (n > 0) {
        n--;
        slideShow(n);
    }
    else slideShow(0);
}

document.querySelector('#next').onclick = function next() {
    setButtons();
    // console.log("right");
    let n = getCurrent();
    let len = imgArr.length;
    if (n < len - 1) {
        n++;
        slideShow(n);
    }
    else slideShow(len - 1);
}

function getCurrent() {
    // let imgArr = ["#img1","#img2","#img3","#img4"];
    for (let i = 0; i < imgArr.length; i++) {
        if (document.querySelector(imgArr[i]).style.display === 'inline') {
            return i;
        }
    }
}

function slideShow(n) {
    // console.log('Entered ' + n);
    let current = n;
    for (let i = 0; i < imgArr.length; i++) {
        if (i === current) {
            display(imgArr[i]);
        }
        else document.querySelector(imgArr[i]).style.display = 'none';
    }
    hoverable(n,imgArr.length-1);
}

function display(image) {
    let img = document.querySelector(image);
    img.style.display = 'inline';
    img.style.width = '90%';
}

function hoverable(n,len) {
    // console.log(n+" "+len);
    let btn1 = document.querySelector('#prev');
    let orgclr1 = btn1.style.color;
    let orgbg1 = btn1.style.backgroundColor;
    let pt1 = btn1.style.cursor;
    if (n > 0) {
        btn1.addEventListener('mouseover', (event) => {
            btn1.style.backgroundColor = 'gray';
            btn1.style.color = 'white';
            btn1.style.border = 'solid white 2px';
            btn1.style.cursor = 'pointer';
        });
        btn1.addEventListener('mouseleave', (event) => {
            btn1.style.backgroundColor = orgbg1;
            btn1.style.color = orgclr1;
            btn1.style.cursor = pt1;
        });
    }
    else{
        // console.log('else am running');
        btn1.addEventListener('mouseover',(event) => {
            btn1.style.cursor = 'not-allowed';
        });
        btn1.addEventListener('mouseleave',(event) => {
            btn1.style.cursor = pt1;
        });
    }

    let btn2 = document.querySelector('#next');
    let orgclr2 = btn2.style.color;
    let orgbg2 = btn2.style.backgroundColor;
    let pt2 = btn2.style.cursor;
    if (n < len) {
        // console.log(n);
        btn2.addEventListener('mouseover', (event) => {
            btn2.style.backgroundColor = 'gray';
            btn2.style.color = 'white';
            btn2.style.border = 'solid white 2px';
            btn2.style.cursor = 'pointer';
        });
        btn2.addEventListener('mouseleave', (event) => {
            btn2.style.backgroundColor = orgbg2;
            btn2.style.color = orgclr2;
            btn2.style.cursor = pt2;
        });
    }
    else{
        btn2.addEventListener('mouseover',(event) => {
            btn2.style.cursor = 'not-allowed';
        });
        btn2.addEventListener('mouseleave',(event) => {
            btn2.style.cursor = pt2;
        })
    }
    // console.log('this');
    // console.log(btn1.style.backgroundColor);
    // console.log(btn2.style.backgroundColor);
}

function setButtons(bg1,c1,bg2,c2){
    let btn1 = document.querySelector('#prev');
    btn1.style.backgroundColor = 'white';
    btn1.style.color = 'black';
    btn1.style.border = 'solid black 2px';
    let btn2 = document.querySelector('#next');
    btn2.style.backgroundColor = 'white';
    btn2.style.color = 'black';
    btn2.style.border = 'solid black 2px';
    // console.log('that');
    // console.log(btn1.style.backgroundColor);
    // console.log(btn2.style.backgroundColor);
}

// function setImages(){
//     let img1 = document.querySelector('#img1');
//     img1.setAttribute('src','1.jpg');
//     let img2 = document.querySelector('#img2');
//     img2.setAttribute('src','2.jpg');
//     let img3 = document.querySelector('#img3');
//     img3.setAttribute('src','3.jpg');
//     let img4 = document.querySelector('#img4');
//     img4.setAttribute('src','4.jpg');
//     start();
//     // img1.style.width = '10em';
//     // img2.style.width = '10em';
//     // img3.style.width = '10em';
//     // img4.style.width = '10em';
// }

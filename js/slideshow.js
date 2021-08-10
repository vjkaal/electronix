document.querySelector('html').onclick = divDesign();

const imgArr = ["#img1", "#img2", "#img3", "#img4","#img5","#img6", "#img7", "#img8", "#img9", "#extra"];
const waitTime = 5000;


function divDesign() {
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
    document.querySelector('#extra').style.display = 'none';
}


window.onload = looping();

async function looping() {
    let len = imgArr.length;
    for (let i = 0; i <= len; i++) {
        
        if(i === (len-1)){
            i = 0;
        }

        // console.log(i);
        
        await wait();
        display(i);        
    }
}

// function getCurrent() {
//     for (let i = 0; i < imgArr.length; i++) {
//         if (document.querySelector(imgArr[i]).style.display === 'inline') {
//             return i;
//         }
//     }
// }

async function display(i) {
    let img = document.querySelector(imgArr[i]);
    img.style.display = 'inline';
    img.style.width = '90%';
    await wait();
    img.style.display = 'none';
}

function wait(){
    let miliseconds = waitTime;
    return new Promise(resolve => setTimeout(resolve,miliseconds));
}

/*Settings Title Section*/
const titlesArray = document.getElementsByClassName('brand-title');
const source = document.getElementById('title');
source.value = titlesArray[0].innerHTML;

if (!localStorage.title){
    localStorage.title =titlesArray[0].innerHTML;
}

if (localStorage.title){
    source.value =localStorage.title;
    [...titlesArray].forEach((element, index, array) => {
        element.innerHTML = localStorage.title;
    });
}



const inputHandler = function(e) {
    [...titlesArray].forEach((element, index, array) => {
        element.innerHTML = e.target.value;
        localStorage.title =e.target.value;
    });
}

source.addEventListener('input', inputHandler);





/*Settings Colors Section*/
var variables  = document.querySelector(':root');
const firstcolor = document.getElementById('firstcolor');
const secondcolor = document.getElementById('secondcolor');

if (localStorage.color1){
    variables.style.setProperty(firstcolor.dataset.color, localStorage.color1);
}
if (localStorage.color2){
    variables.style.setProperty(secondcolor.dataset.color, localStorage.color2);
}

const colorchenge1 = function(e) {
    variables.style.setProperty(firstcolor.dataset.color, firstcolor.value);
    localStorage.setItem("color1", firstcolor.value);
}

const colorchenge2 = function(e) {
    variables.style.setProperty(secondcolor.dataset.color, secondcolor.value);
    localStorage.setItem("color2", secondcolor.value);
}

secondcolor.addEventListener('input',colorchenge2);
firstcolor.addEventListener('input',colorchenge1);

/*Settings Logo*/
var logo =document.getElementById('logo');
var logoinput =document.getElementById('logo-input');



logoinput.onchange = evt => {
    const [file] = logoinput.files
    if (file) {
        url = URL.createObjectURL(file);
        logo.src = url;
        localStorage.setItem("logo",url);
    }
}

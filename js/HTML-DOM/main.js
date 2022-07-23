//HTML DOM 

//1.element : ID , class , tagname, css,
//html collection

//2.attribute
//3.text

//element

//var headingNode = document.getElementById('heading');
// var heading2Node = document.getElementsByClassName('heading-2');
//var headingTag = document.getElementsByTagName('h2');
    // var pTag = document.querySelector('.box .p');
    //var pTags = document.querySelectorAll('p');
    // console.log(pTags);

// var box_1 = document.querySelector('.box-1');
// box_1.innerHTML = "<h1 class ='h1'> Thêm thẻ h1</h1>";
// box_1.outerHTML = "<h1 class ='h1'> Thêm thẻ h1</h1>";

// console.log(box_1.querySelector('h1').getAttribute('class'));
// console.log(box_1.querySelector('h1').innerText);
// console.log(box_1.style);

//attribute

// var h1 = document.querySelector('h1');

// h1.title = 'h1-title';
// h1.setAttribute('data','data-attribute');
// console.log(h1.title);
// console.log(h1.getAttribute('data'));

//text

// var h1 = document.querySelector('h1');
// h1.innerText = `

// New heading

// `;
// console.log(h1.innerText);
// console.log(h1.textContent);

//Dom css

// document.querySelector('.box').style.width = '200px';
// document.querySelector('.box').style.height = '200px';
// document.querySelector('.box').style.backgroundColor = 'yellow';
// document.querySelector('.box').style.marginBottom = '10px';

// var box_1 = document.querySelector('.box-1');
// Object.assign(box_1.style,{
//     width : ' 200px',
//     height : ' 100px',
//     backgroundColor : 'green',
// });


var h1 = document.querySelector('h1');
h1.classList.add('red');
// h1.classList.add('red','yellow');
// h1.classList.replace('red','green');
// h1.classList.remove('red');
// h1.classList.remove('red', 'yellow');
setInterval(function(){
// h1.classList.toggle('red');

h1.classList.replace('blue','red');
},1000);

console.log(h1.classList.value);




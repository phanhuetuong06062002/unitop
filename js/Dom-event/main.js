// var h2 = document.querySelectorAll("h2");
// for(var i = 0;i < h2.length; i++){
//     h2[i].onclick = function(e){
//         console.log(e.target);
//     }
// }
// var input_text = document.querySelector("input[type='text']");
// input_text.oninput = function(e){
//     var text_input_value = e.target.value;
//     console.log(text_input_value);
// };
// var input_password = 
//     document.querySelector("input[type=password]");
// input_password.oninput = function(e){
//     console.log(e.target.value);
//}
// var input_checkbox = 
//     document.querySelector("input[type='checkbox']");
// input_checkbox.onchange = function(e){
//     console.log(e.target.checked);
// };

// var input_radio =
//     document.querySelectorAll("input[type='radio']");
// for (var i = 0; i < input_radio.length; i++) {
//     input_radio[i].onchange = function (e) {
//         console.log(e.target.checked);
//     };
// }

// var input_select = 
//     document.querySelector("select");
// input_select.onchange = function(e){
//     console.log(e.target.value);
// };

// var input_text = document.querySelector("input[type='text']");
// input_text.onkeydown = function(e){
//     var text_input_value = e.target.value;
//     console.log(text_input_value);
// };
// var input_text = document.querySelector("input[type='text']");
// input_text.onkeyup = function(e){
//    console.log(e.which);
// };
// document.onkeypress = function(e){
//     console.log(e.which);
// }

var aElements = 
    document.querySelectorAll('a');
    for(var i = 0;i < aElements.length; i++){
        aElements[i].onclick = function(e){
            // if (!e.target.href.startsWith("http://unitop.vn")){
            //     e.preventDefault();
            // }
            console.log(e.target.href);
        }
    }

var ul = document.querySelector("ul");
ul.onmousedown = function(e){
    e.preventDefault();
}
var divElement = document.querySelector('div');
var buttonElement = document.querySelector('button');
divElement.onclick = function(e){
    console.log('div');
}
buttonElement.onclick = function (e) {
    e.stopPropagation();
    console.log('click me');
}

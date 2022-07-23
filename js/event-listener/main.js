var buttonElement = 
    document.querySelector('button');
// buttonElement.onclick = function(){
//     //Công việc 1
//     console.log("Công việc 1");
//     //Công viêc 2
//     console.log("Công việc 2");
//     //Công viêc 2
//     console.log("Công việc 3");
// }
// setTimeout(function(){
//     buttonElement.onclick = function () {
       
//     }
// },3000);
var event1 = function (e) {
    console.log('Công việc 1');
}
var event2 = function (e) {
    console.log('Công việc 2');
}
var event3 = function (e) {
    console.log('Công việc 3');
}
buttonElement.addEventListener('click', event1)
buttonElement.addEventListener('click', event2)
buttonElement.addEventListener('click', event3)

 setTimeout(function(){
    buttonElement.removeEventListener('click', event1)
},3000);

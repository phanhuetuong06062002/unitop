function myCallBack(value){
    console.log(value);
}
function myFunction(param) {
    if (typeof param === 'function')
        param('Học lập trình');
}
myFunction(myCallBack);
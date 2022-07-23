//pendding
//fulfilling
//rejected

var promise = new Promise(
    //execute
    function(resolve,reject){
        //logic
        //Thành công: resolve
        //Thất bại: reject
        resolve({
            id : 1,
            name : 'Javascript',
            coin: 30,
        });
        // reject("failure");
    }
);
promise
        .then(function(course){
            console.log(course);
        })
        .catch(function(error){
            console.log(error);
        })
        .finally(function(){
            console.log("Done!");
        })
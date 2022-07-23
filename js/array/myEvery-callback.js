var courses = [{
        id: 1,
        name: 'Javascript',
        coin: 0,
    },
    {
        id: 2,
        name: 'HTML,css',
        coin: 0,
    },
    {
        id: 1,
        name: 'PHP',
        coin: 0,
    },
    {
        id: 1,
        name: 'NodeJs',
        coin: 0,
    },
];
Array.prototype.some2 = function(callback){
    var output = false;
    for(var i in this){
        if(this.hasOwnProperty(i)){
            if(callback(this[i],i)){
                output = true;
                break;
            }
        }
    }
    return output;
}

var result = courses.some(function(course,index){
    return course.coin == 1;
});
console.log(result);